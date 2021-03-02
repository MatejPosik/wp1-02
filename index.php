<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $firstname = "Matěj";
        $avatar = "matej-posik-avatar.jpg";
        $lastname = "Pošík";
        $age = "17";
        $profession = "student";
        $city = "Poděbrady";
    ?>    
    <h1>Výpis profilu</h1>
    <img src="<?php echo $avatar;?>" alt="Avatar uživatele">
    <ul>
        <li>jméno: <?php echo $firstname; ?></li>
        <li>Další položky k výpisu</li>
        <li>Příjmení: <?php echo $lastname; ?></li>
        <li>Věk: <?php echo $age; ?></li>
        <li>Profese: <?php echo $profession; ?></li>
        <li>Město bydliště: <?php echo $city; ?></li>
    </ul>
</body>
</html>