<?php
// Název CSS souboru
$cssSoubor = "styl.css";

// Kontrola, zda byl formulář odeslán
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Získání vstupů z formuláře
    $selektor = trim($_POST['selektor']);
    $vlastnosti = trim($_POST['vlastnosti']);

    // Validace vstupů
    if (!empty($selektor) && !empty($vlastnosti)) {
        // Vytvoření CSS pravidla
        $cssPravidlo = "$selektor {\n$vlastnosti\n}\n\n";

        // Zápis do souboru
        file_put_contents($cssSoubor, $cssPravidlo, FILE_APPEND);

        echo "CSS pravidlo bylo úspěšně přidáno do souboru $cssSoubor.";
    } else {
        echo "Vyplňte prosím selektor i vlastnosti.";
    }
}
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS Generátor</title>
</head>
<body>
    <h1>PHP - CSS Generátor</h1>
    <form method="post">
        <label for="selektor">Selektor:</label><br>
        <input type="text" id="selektor" name="selektor" required><br><br>

        <label for="vlastnosti">Vlastnosti (každá na novém řádku, např. color: red;):</label><br>
        <textarea id="vlastnosti" name="vlastnosti" rows="5" cols="30" required></textarea><br><br>

        <button type="submit">Generovat CSS</button>
    </form>
</body>
</html>
