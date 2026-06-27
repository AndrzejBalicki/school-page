# Strona Przedszkola Publicznego św. Józefa

Repozytorium nowej strony internetowej Przedszkola Publicznego św. Józefa
w Rzeszowie.

Projekt zastąpi obecną stronę pod adresem
[jozef.rzeszow.pl](https://jozef.rzeszow.pl/). Zachowujemy wartościowe treści
i adres domeny, ale projektujemy od nowa architekturę informacji, warstwę
wizualną oraz sposób zarządzania treścią.

## Główne cele

- szybki dostęp do informacji potrzebnych rodzicom;
- czytelna rekrutacja i dokumenty do pobrania;
- wygodna obsługa na telefonach;
- zgodność z wymaganiami dostępności cyfrowej;
- bezpieczne publikowanie informacji i zdjęć dzieci;
- prosta edycja aktualności przez pracowników przedszkola;
- dobra wydajność i niewielka liczba zależności.

## Założony kierunek techniczny

Na obecnym etapie przyjmujemy WordPress z lekkim, własnym motywem blokowym.
Kod motywu będzie rozwijany w tym repozytorium, natomiast treści będą
zarządzane przez panel WordPressa.

Szczegóły znajdują się w katalogu [`docs`](docs/):

- [opis projektu](docs/PROJECT_BRIEF.md);
- [architektura informacji](docs/INFORMATION_ARCHITECTURE.md);
- [system wizualny](docs/DESIGN_SYSTEM.md);
- [architektura techniczna](docs/TECHNICAL_ARCHITECTURE.md);
- [migracja treści](docs/CONTENT_MIGRATION.md);
- [plan realizacji](docs/ROADMAP.md).

## Status

Etap 0 — przygotowanie repozytorium, dokumentacji i zasad pracy.

## Praca nad projektem

Zmiany wykonujemy na osobnych gałęziach i włączamy do `main` przez pull
request. Zasady pracy opisuje plik [CONTRIBUTING.md](CONTRIBUTING.md).
