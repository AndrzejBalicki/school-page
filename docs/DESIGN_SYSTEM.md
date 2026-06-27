# System wizualny

## Kierunek: ciepły editorial

Strona łączy wiarygodność placówki z energią dzieciństwa. Duże, redakcyjne
nagłówki nadają jej własny charakter, a proste ilustracje, miękkie kształty
i kolorowe karty budują pogodny klimat bez infantylności.

Najważniejsze zasady:

- dużo oddechu i wyraźna hierarchia;
- asymetria kontrolowana przez spójną siatkę;
- mocne wezwania do działania i szybki dostęp do informacji dla rodziców;
- dekoracje wspierają treść, ale nigdy nie utrudniają jej odczytania;
- fotografie dzieci mogą być dodawane wyłącznie po potwierdzeniu zgód.

## Kolory

| Rola | Wartość | Zastosowanie |
| --- | --- | --- |
| Głęboka zieleń | `#165B3F` | przyciski, pasek kontaktowy, stopka |
| Zieleń ciemna | `#0D3D2B` | duże powierzchnie i mocny kontrast |
| Papier | `#FBFAF6` | główne tło |
| Krem | `#FFF9EC` | hero i spokojne sekcje |
| Grafit | `#1B2A24` | tekst |
| Koral | `#C85D45` | akcent marki i ważne działania |
| Niebo | `#B8D8E8` | pogodne karty i ilustracje |
| Ciepły róż | `#F3C7B7` | delikatne wyróżnienia |
| Słońce | `#F1C64F` | małe akcenty i podkreślenia |
| Szałwia | `#D5E6D3` | spokojne karty informacyjne |

Biały tekst jest używany tylko na głębokiej lub ciemnej zieleni. Żółty,
niebieski i różowy zawsze otrzymują ciemny tekst.

## Typografia

- nagłówki: systemowy krój editorial — `Iowan Old Style`, `Palatino Linotype`,
  `Book Antiqua`, `Georgia`, serif;
- tekst i interfejs: `Aptos`, `Segoe UI Variable`, `Segoe UI`, sans-serif;
- tekst podstawowy: 17–18 px, interlinia około 1,6;
- nagłówek hero jest płynny i dopasowuje się do szerokości ekranu;
- szerokość dłuższego tekstu nie przekracza około 65 znaków;
- nie pobieramy fontów z zewnętrznych serwerów, więc strona pozostaje szybka
  i nie wysyła danych użytkownika do dostawcy fontów.

## Kształty i odstępy

- skala odstępów: `4, 8, 12, 16, 24, 32, 48, 64, 96`;
- duże sekcje mają zaokrąglenia 28–56 px;
- karty korzystają z miękkich cieni i cienkich, półprzezroczystych obramowań;
- przyciski główne są zwarte, czytelne i mają obszar dotykowy minimum 44 px;
- elementy dekoracyjne mogą być lekko obrócone, ale tekst pozostaje prosty.

## Komponenty

- pasek szybkiego kontaktu;
- nagłówek z sygnetem i rozwijanym menu;
- asymetryczny hero z ilustracją SVG;
- komunikat rekrutacyjny;
- cztery kolorowe skróty dla rodziców;
- sekcja wartości w układzie bento;
- karty aktualności;
- panel kontaktowy z drogą dojazdu;
- rozbudowana stopka;
- pełnoekranowe menu mobilne.

## Dostępność

- widoczny link „Przejdź do treści”;
- jeden nagłówek `h1` na stronie;
- widoczny fokus klawiatury;
- informacja nie zależy wyłącznie od koloru;
- tekst nie jest nakładany na złożone fotografie;
- animacje respektują `prefers-reduced-motion`;
- brak automatycznych karuzel i samoczynnie odtwarzanych multimediów;
- ikony dekoracyjne są pomijane przez czytniki ekranu, a funkcjonalne mają
  dostępną nazwę;
- układ jest testowany bez poziomego przewijania przy szerokości 390 px.
