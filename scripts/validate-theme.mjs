import { readFile, readdir } from "node:fs/promises";
import path from "node:path";
import process from "node:process";

const root = process.cwd();
const themeDirectory = path.join(root, "theme");
const requiredFiles = [
  "style.css",
  "theme.json",
  path.join("templates", "index.html"),
];

const failures = [];

function fail(message) {
  failures.push(message);
}

async function read(relativePath) {
  return readFile(path.join(themeDirectory, relativePath), "utf8");
}

async function listFiles(directory, extension) {
  const fullPath = path.join(themeDirectory, directory);
  const entries = await readdir(fullPath, { withFileTypes: true });

  return entries
    .filter((entry) => entry.isFile() && entry.name.endsWith(extension))
    .map((entry) => path.join(directory, entry.name));
}

function validateBlockMarkup(file, source) {
  const blockComment =
    /<!--\s*(\/)?wp:([a-z0-9-]+(?:\/[a-z0-9-]+)?)(?:\s+\{[\s\S]*?\})?\s*(\/)?-->/g;
  const stack = [];
  let match;

  while ((match = blockComment.exec(source)) !== null) {
    const [, closing, name, selfClosing] = match;

    if (selfClosing) {
      continue;
    }

    if (!closing) {
      stack.push(name);
      continue;
    }

    const openBlock = stack.pop();

    if (openBlock !== name) {
      fail(
        `${file}: zamknięto blok wp:${name}, ale ostatnim otwartym blokiem był ` +
          `${openBlock ? `wp:${openBlock}` : "brak bloku"}.`,
      );
    }
  }

  if (stack.length > 0) {
    fail(`${file}: niezamknięte bloki: ${stack.join(", ")}.`);
  }

  if (source.includes('href="#"')) {
    fail(`${file}: znaleziono niedozwolony pusty odnośnik href="#".`);
  }
}

for (const relativePath of requiredFiles) {
  try {
    await read(relativePath);
  } catch {
    fail(`Brakuje wymaganego pliku theme/${relativePath}.`);
  }
}

try {
  const themeConfiguration = JSON.parse(await read("theme.json"));

  if (themeConfiguration.version !== 3) {
    fail("theme/theme.json musi używać wersji 3.");
  }

  if (themeConfiguration.$schema !== "https://schemas.wp.org/trunk/theme.json") {
    fail("theme/theme.json musi wskazywać aktualny schemat WordPressa.");
  }

  if (!Array.isArray(themeConfiguration.settings?.color?.palette)) {
    fail("theme/theme.json musi definiować kontrolowaną paletę kolorów.");
  }
} catch (error) {
  fail(`Nie można odczytać theme/theme.json: ${error.message}`);
}

try {
  const stylesheet = await read("style.css");

  if (!/Theme Name:\s*.+/i.test(stylesheet)) {
    fail("theme/style.css nie zawiera pola Theme Name.");
  }

  if (!/Requires at least:\s*6\.6/i.test(stylesheet)) {
    fail("theme/style.css nie deklaruje minimalnego WordPressa 6.6.");
  }
} catch (error) {
  fail(`Nie można odczytać theme/style.css: ${error.message}`);
}

for (const directory of ["templates", "parts"]) {
  try {
    const files = await listFiles(directory, ".html");

    for (const file of files) {
      validateBlockMarkup(file, await read(file));
    }
  } catch (error) {
    fail(`Nie można sprawdzić katalogu theme/${directory}: ${error.message}`);
  }
}

try {
  const patternFiles = await listFiles("patterns", ".php");

  for (const file of patternFiles) {
    validateBlockMarkup(file, await read(file));
  }
} catch (error) {
  fail(`Nie można sprawdzić katalogu theme/patterns: ${error.message}`);
}

if (failures.length > 0) {
  console.error("Walidacja motywu nie powiodła się:\n");

  for (const failure of failures) {
    console.error(`- ${failure}`);
  }

  process.exit(1);
}

console.log("Motyw przeszedł podstawową walidację struktury, JSON i bloków.");
