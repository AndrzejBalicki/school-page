# Zasady pracy

## Gałęzie

- `main` — stabilna wersja projektu;
- `codex/<opis>` — zmiany przygotowywane z pomocą Codexa;
- `feature/<opis>` — nowe funkcje;
- `fix/<opis>` — poprawki błędów;
- `content/<opis>` — większe zmiany treści.

Nie pracujemy bezpośrednio na `main`, z wyjątkiem jednorazowego utworzenia
pustej gałęzi bazowej.

## Commity

Commit powinien opisywać jedną logiczną zmianę i używać krótkiego komunikatu
w trybie rozkazującym, np.:

```text
Add recruitment page template
Fix mobile navigation focus
Update content migration plan
```

## Pull request

Każdy pull request powinien zawierać:

- opis wykonanych zmian;
- uzasadnienie;
- sposób sprawdzenia;
- zrzuty ekranu przy zmianach wizualnych;
- informacje o wpływie na dostępność i prywatność.

## Warunki przyjęcia zmiany

- brak niezamierzonych plików i danych poufnych;
- działanie na telefonie i komputerze;
- obsługa klawiaturą;
- poprawna hierarchia nagłówków;
- wystarczający kontrast;
- brak błędnych linków;
- brak nieuzasadnionych skryptów śledzących;
- pozytywne przejście testów dostępnych w projekcie.
