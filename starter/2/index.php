<?php


?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Második feladat</title>
    
</head>
<body>
    <h1>Felvétel a Roxfortba</h1>

    <form action="" method="post">
        <label for="firstName">Vezetéknév:</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="lastName">Keresztnév:</label>
        <input type="text" name="lastName" id="name">
        <br>
        <label for="email">Email:</label>
        <input type="text" name="email" id="email">
        <br>
        <label for="house">Roxforti ház:</label>
        <select name="house" id="house">
            <option value="">-- Válassz --</option>
            <option value="griffendel">Griffendél</option>
            <option value="hollohat">Hollóhát</option>
            <option value="mardekar">Mardekár</option>
            <option value="hugrabug">Hugrabug</option>
        </select> <br>
            <br>
        <button type="submit">Felvétel</button>
    </form>

</body>
</html>
