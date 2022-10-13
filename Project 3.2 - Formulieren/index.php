<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <label for="Voornaam">Voornaam:</label><br>
        <input type="text" id="Voornaam" name="Voornaam" pattern="[a-z] + [A-Z]"><br>
        <label for="Achternaam">Achternaam:</label><br>
        <input type="text" id="Achternaam" name="Achternaam" pattern="[a-z] + [A-Z]"><br><br>
        
        <input type="radio" id="man" name="fav_language" value="man" checked="checked">
        <label for="man">man</label><br>
        <input type="radio" id="vrouw" name="fav_language" value="vrouw">
        <label for="vrouw">vrouw</label><br><br>
        
        <label for="straat">Straat + Huisnummer:</label><br>
        <input type="text" id="straat" name="straat"><br>
        
        <label for="postcode">postcode:</label><br>
        <input type="text" id="postcode" name="postcode"><br>
        
        <label for="land">land:</label><br>
        <input type="text" id="land" name="land"><br>
        
        <label for="bsn">bsn-nummer:</label><br>
        <input type="number" id="bsn" name="bsn" maxlength="9"><br><br>
        
        <label>Vakantie land:</label><br>
        <input type="radio" id="vakantie1" name="fav_language" value="vakantie1" checked="checked">
        <label for="vakantie1">Uganda</label><br>
        <input type="radio" id="vakantie2" name="fav_language" value="vakantie2" checked="checked">
        <label for="vakantie2">Iran</label><br>
        <input type="radio" id="vakantie3" name="fav_language" value="vakantie3">
        <label for="vakantie3">VS</label><br><br>

        <label for="date">Datum:</label>
        <input type="date" id="date" name="date" min="<?php echo date("Y-m-d"); ?>">
        <label for="date">Datum:</label>
        <input type="date" id="date" name="date" min="<?php echo date("Y-m-d"); ?>"><br><br>

        <label for="aantal">aantal mensen (max 4):</label><br>
        <input type="number" id="aantal" name="aantal" min="1" max="4"><br><br>

    </form>
</body>
</html>