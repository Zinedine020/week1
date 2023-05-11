<!DOCTYPE html>
<html>
<head>
    <title>GET Formulier</title>
</head>
<body>
    <form method="GET" action="get.php">
        <label for="naam">Naam:</label>
        <input type="text" name="naam" id="naam" required>
        <br>
        <label for="achternaam">Achternaam:</label>
        <input type="text" name="achternaam" id="achternaam" required>
        <br>
        <label for="leeftijd">Leeftijd:</label>
        <input type="number" name="leeftijd" id="leeftijd" required>
        <br>
        <label for="adres">Adres:</label>
        <input type="text" name="adres" id="adres" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <br>
        <input type="submit" name="submit" value="Verzenden">
    </form>

    <?php
    if (isset($_GET['submit'])) {
        $naam = $_GET['naam'];
        $achternaam = $_GET['achternaam'];
        $leeftijd = $_GET['leeftijd'];
        $adres = $_GET['adres'];
        $email = $_GET['email'];

        echo "<h2>Ingevoerde gegevens:</h2>";
        echo "Naam: " . $naam . "<br>";
        echo "Achternaam: " . $achternaam . "<br>";
        echo "Leeftijd: " . $leeftijd . "<br>";
        echo "Adres: " . $adres . "<br>";
        echo "Email: " . $email . "<br>";
    }
    ?>
</body>
</html>