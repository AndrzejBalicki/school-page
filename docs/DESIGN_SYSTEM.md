# System wizualny

## Charakter

Projekt ma być ciepły i przyjazny, ale nie infantylny. Zieleń nawiązuje do
obecnego logo, kremowe tło łagodzi kontrast dużych powierzchni, a złoto
i ceglasty kolor służą wyłącznie jako kontrolowane akcenty.

## Kolory

| Rola | Wartość | Zastosowanie |
| --- | --- | --- |
| Zieleń główna | `#1F5D42` | menu, przyciski, nagłówki |
| Kremowe tło | `#FFF8EA` | tło strony i sekcji |
| Tekst | `#24312B` | główny tekst |
| Jasna szałwia | `#DDEBDD` | karty i wyróżnienia |
| Ciepłe złoto | `#E8B84A` | ikony i akcenty z ciemnym tekstem |
| Ceglasty | `#B6533C` | pilne komunikaty i drugie działanie |
| Biel | `#FFFFFF` | tekst na zieleni i ceglastym |

Sprawdzone kontrasty:

- biel na zieleni: 7,77:1;
- zieleń na kremowym tle: 7,35:1;
- grafit na kremowym tle: 12,82:1;
- grafit na złocie: 7,35:1;
- biel na ceglastym: 4,89:1.

## Typografia

- nagłówki: `Nunito Sans`, wagi 600 i 700;
- tekst: `Source Sans 3`, wagi 400 i 600;
- fonty przechowywane lokalnie jako WOFF2;
- tekst podstawowy: 18 px, na małych ekranach nie mniej niż 17 px;
- interlinia tekstu: około 1,6;
- optymalna szerokość tekstu: 65–72 znaki;
- bez pisma odręcznego i długich fragmentów pisanych wielkimi literami.

Przed implementacją fontów trzeba potwierdzić ich licencje i przygotować
systemowe fonty zapasowe.

## Odstępy

Stosujemy skalę opartą na 4 px:

`4, 8, 12, 16, 24, 32, 48, 64, 96`

Sekcje powinny mieć wyraźny oddech, ale nie mogą wydłużać strony samą
dekoracją.

## Komponenty

- przycisk podstawowy i dodatkowy;
- link tekstowy z wyraźnym stanem fokusu;
- karta aktualności;
- karta wydarzenia;
- ważny komunikat;
- zestaw szybkich skrótów;
- lista dokumentów;
- formularz z komunikatami błędów;
- okruszki nawigacyjne;
- paginacja;
- nagłówek i stopka;
- menu mobilne.

## Zasady dostępności interfejsu

- obszar dotykowy co najmniej 44 × 44 px;
- widoczny fokus o kontraście co najmniej 3:1;
- informacja nie może zależeć wyłącznie od koloru;
- tekst nie jest umieszczany bezpośrednio na złożonym zdjęciu;
- animacje respektują `prefers-reduced-motion`;
- automatyczne przewijanie treści jest wyłączone;
- komunikaty błędów są konkretne i powiązane z polem;
- ikona bez tekstu ma dostępną nazwę.
