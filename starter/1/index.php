<?php
$students = [
    ['name' => 'Harry Potter', 'house' => 'Griffendél', 'patronus' => 'Szarvas'],
    ['name' => 'Cedric Diggory', 'house' => 'Hugrabug', 'patronus' => 'Bagoly'],
    ['name' => 'Ron Weasley', 'house' => 'Griffendél', 'patronus' => 'Terrier'],
    ['name' => 'Neville Longbottom', 'house' => 'Griffendél', 'patronus' => 'Menyét'],
    ['name' => 'Luna Lovegood', 'house' => 'Hollóhát', 'patronus' => 'Nyúl'],
    ['name' => 'Sebastian Sallow ', 'house' => 'Mardekár', 'patronus' => 'Mosómedve'],
    ['name' => 'Draco Malfoy', 'house' => 'Mardekár', 'patronus' => 'Kígyó'],
    ['name' => 'Ginny Weasley', 'house' => 'Griffendél', 'patronus' => 'Ló'],
];

$colors = [
    'Griffendél' => '#fa9891',
    'Hollóhát' => '#abcef7', 
    'Mardekár' => '#b5f5b6', 
    'Hugrabug' => '#fff99e',
];


?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Első feladat</title>
    <link rel="stylesheet" href="style.css">
    <style>body {background-color: white}</style>
</head>
<body>
    <table>
        <tr>
            <th>Név</th>
            <th>Ház</th>
            <th>Patrónus</th>
        </tr>
        <tr>
            <td>diák neve</td>
            <td>diák háza</td>
            <td>diák patrónusa</td>
        </tr>
    </table>
    <div>
    <p>A legtöbb diákkal rendelkező ház: </p> 
    <p>Neki van nyúl patrónusa: </p>
    </div>
</body>
</html>
