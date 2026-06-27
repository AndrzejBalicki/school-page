# Architektura techniczna

## Decyzja robocza

Pierwsza wersja zostanie przygotowana jako własny motyw blokowy WordPressa.
To pozwala połączyć kontrolę nad kodem i wydajnością z prostym panelem dla
redaktorów.

Decyzję potwierdzimy po uzyskaniu informacji o obecnym hostingu, wersji PHP,
dostępie do bazy i sposobie utrzymania serwera.

## Podział odpowiedzialności

- **Git** przechowuje motyw, konfigurację jakości i dokumentację;
- **WordPress** przechowuje treści redakcyjne oraz ustawienia witryny;
- **biblioteka mediów** przechowuje wyłącznie zatwierdzone obrazy i dokumenty;
- **backup** obejmuje repozytorium, bazę danych i pliki przesłane przez panel.

Nie zapisujemy w Git danych logowania, pliku `wp-config.php`, bazy danych,
kopii środowiska produkcyjnego ani katalogu z przesłanymi mediami.

## Przewidywana struktura

```text
school-page/
├── .github/
├── docs/
├── theme/
│   ├── assets/
│   ├── parts/
│   ├── patterns/
│   ├── styles/
│   ├── templates/
│   ├── functions.php
│   ├── style.css
│   └── theme.json
├── tests/
├── CONTRIBUTING.md
└── README.md
```

Strukturę `theme/` utworzymy dopiero w kolejnym etapie, razem z działającym
minimalnym motywem.

## Środowiska

1. **Lokalne** — tworzenie kodu i testy.
2. **Staging** — testy z reprezentatywną treścią i odbiór przez placówkę.
3. **Produkcja** — publiczna domena po migracji i akceptacji.

Stara strona pozostaje aktywna do chwili zakończenia testów nowej wersji.

## Zasady techniczne

- semantyczny HTML jako podstawa;
- jedna struktura nawigacji, używana na wszystkich urządzeniach;
- JavaScript tylko tam, gdzie daje realną wartość;
- lokalne fonty i ikony SVG;
- responsywne obrazy w WebP lub AVIF z poprawnymi wymiarami;
- brak osadzonych mediów społecznościowych bez świadomej decyzji;
- formularze zabezpieczone mechanizmem niewymagającym niedostępnej CAPTCHA;
- minimalna liczba sprawdzonych wtyczek;
- regularne aktualizacje, backup i uwierzytelnianie dwuskładnikowe;
- osobne role administratora i redaktora.

## Kontrola jakości

Planowane narzędzia:

- walidacja standardów kodowania WordPress;
- linting CSS i JavaScript;
- automatyczne formatowanie;
- testy jednostkowe dla logiki PHP, jeżeli będzie potrzebna;
- testy przeglądarkowe najważniejszych ścieżek;
- automatyczne testy dostępności jako uzupełnienie testów ręcznych;
- Lighthouse jako wskaźnik wydajności, nie jedyne kryterium odbioru.
