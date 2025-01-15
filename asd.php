<?php
// Funkce pro výpočet počtu cihel v pyramidě
function vypocetCihely($patra) {
    // Pole pro uložení počtu cihel v každém patře
    $cihly = [];

    // Počet cihel pro každé patro
    for ($i = 1; $i <= $patra; $i++) {
        $cihly[$i] = $i; // Počet cihel v i-tém patře je rovno číslo patra
    }

    return $cihly;
}

// Počet pater pyramidy
$pocetPatra = 10; // Změňte na požadovaný počet pater

// Zavolání funkce
$vysledky = vypocetCihely($pocetPatra);

// Výpis výsledků
foreach ($vysledky as $patro => $pocetCihely) {
    echo "Patro $patro má $pocetCihely cihel." . PHP_EOL;
}

// Výpočet celkového počtu cihel v pyramidě
$celkemCihly = array_sum($vysledky);
echo "Celkový počet cihel v pyramidě je: $celkemCihly" . PHP_EOL;
?>
