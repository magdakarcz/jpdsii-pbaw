## jpdsii-pbaw - Kalkulator kredytowy
APLIKACJE INTERNETOWE CZ.1 (PHP)
+ php_01 - widok - kontroler
  * Osobny index - w środku redirect lub forward do odpowiedniego skryptu (nagłówek location i funkcja include)
  * Podział widok, kontroler (calc_view.php, calc.php)
    
+ php_02 - ochrona zasobow
  * Widok i kontroler logowania
  * Ochrona każdej strony
    
+ php_03 - szablonowanie
  * Użycie include do podziału wspólnych części
    
+ php_04 - szablonowanie smarty
  * Stworzenie szablonu ogólnego z podziałem na bloki (zawartość domyślna)
  * Szablony szczegółowe z definicją zawartości bloków
    
+ php_05 - obiektowosc
  * Obiekt danych formularza oraz danych transferowych do widoku (model) (CalcForm.class.php, CalcResult.class.php, Messages.class.php)
  * Skrypty akcji użytkownika: (index.php, calc.php) - (stworzenie obiektu kontrolera, wywołanie odpowiednich metod)
  * Obiekt roboczy kontrolera: (CalcCtrl.class.php)
  * Obiekt widoku (skrypt CalcView.tpl - szablonowanie smarty)

+ php_06 - kontroler glowny
  * Nowy skrypt: kontroler główny - jeden punkt wejścia do aplikacji - akcje użytkownika określone wartością parametru, a nie nazwą skryptu jak dotychczas.
  * Dodawanie metod do klas kontrolerów
  * Bezpieczeństwo - kod ochrony dostępu może znajdować się w jednym miejscu, należy umożliwić wywołanie tylko kontrolera i pobranie zasobów publicznych (style, grafiki)
    
+ php_07 - ochrona zasobow
  * Kontrola logowania w jednym punkcie wejścia aplikacji - kontrolerze głównym
  * Brak konieczności ochrony innych skryptów. Chronione akcje są wybrane w kontrolerze.
  * Kontroler logowania teraz w wersji obiektowej z widokiem w Smarty (LoginCtrl.class, LoginView)
  * Nowa funkcja automatyzująca wywołanie kontrolera - kolejne uproszczenie
  * Zautomatyzowanie zapisywania roli w sesji - odpowiednie funkcje pomocnicze
  * Integracja wywołania kontrolera z kontrolą uprawnień na podstawie roli
  * Dodatkowe funkcje pomocnicze do pobierania parametrów oraz przekierowań

+ php_08 - projekt bazo-danowy (medoo)
  * Rozbudowanie inicjalizacji/konfiguracji o łączenie z bazą danych z użyciem niewielkiej biblioteki Medoo, obudowującej obiekt PDO.

+ php_08 - projekt bazo-danowy (amelia + clean urls + ajax)
  * przeniesienia zasobów publicznych (zasoby html, jak css, js, obrazy ...) do podfolderu 'public'. Do tego folderu powinno się podpinać domenę - względy bezpieczeństwa.
  * wprowadzenia przyjaznych linków (tzw. clean lub pretty URL's)
  * Dostęp do obiektów podstawowych został zamknięty w klasie App, poprzez metody statyczne
  * Dodano kilka klas pomocniczych otaczających uprzednie funkcje pomocnicze (skrypt functions.php znika). Są to klasy dobrane odpowiednio do zadań: ParamUtils, SessionUtils, RoleUtils oraz Utils
  * Pobieranie parametrów oraz ich walidację ułątwiono jeszcze bardziej wprowadzając klasę Validator, pozwalającą w łatwy sposób przeprowadzić walidację parametru pod różnymi aspektami i generowanie odpowiednich komunikatów.
  * Funkcjonalność projektu 8 przeniesiona do frameworka Amelia. Użycie clean-urls oraz nowego podejścia do Messages (jak we frameworku).
  * Projekt pokazuje podstawy AJAXa, wykorzystując tę samą aplikację bazodanową
