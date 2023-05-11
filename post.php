<!DOCTYPE html>
<html>
<head>
    <title>POST Formulier</title>
</head>
<body>
    <form method="POST" action="post.php">
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
    if (isset($_POST['submit'])) {
        $naam = $_POST['naam'];
        $achternaam = $_POST['achternaam'];
        $leeftijd = $_POST['leeftijd'];
        $adres = 
    }
        ?> 