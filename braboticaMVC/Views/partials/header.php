<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <?php
    switch($pagina)
    {
        case "homePage":
            echo "<link rel=\"stylesheet\" href=\"css/toufik/toufik-styleSheet.css\">";
            break;
        case "overOns":
            echo "<link rel=\"stylesheet\" href=\"css/overOns.css\">";
            break;
        case "producten":
            echo "<link rel=\"stylesheet\" href=\"css/producten.css\">";
            break;
        case "product":
            echo "<link rel=\"stylesheet\" href=\"css/producten.css\">";
            break;
        case "contact":
            echo "<link rel=\"stylesheet\" href=\"css/overOns.css\">
                    <link rel=\"stylesheet\" href=\"css/contact.css\">
                    <link rel=\"stylesheet\" href=\"css/openstreetmap.css\">";
            break;
        case "downloads":
            echo "<link rel=\"stylesheet\" href=\"css/contact.css\">
                    <link rel=\"stylesheet\" href=\"css/overOns.css\">";
            break;
        case "portfolio":
            echo "<link rel=\"stylesheet\" href=\"css/portfolio.css\">";
            break;
              
        case "login":
            echo "<link rel=\"stylesheet\" href=\"css/gebruiker.css\">";
            break;

        case "gebruiker":
            echo "<link rel=\"stylesheet\" href=\"css/beheer.css\">";
            break;

        case "Beheer":
            echo "<link rel=\"stylesheet\" href=\"css/beheer.css\">";
            break;

        case "beheerCategorie":
            echo "<link rel=\"stylesheet\" href=\"css/beheer.css\">";
            break;
            
        case "productBeheer":
            echo "<link rel=\"stylesheet\" href=\"css/producten.css\">";
            echo "<link rel=\"stylesheet\" href=\"css/productUpdaten.css\">";
            break;
        case "productUpdaten":
            echo "<link rel=\"stylesheet\" href=\"css/productUpdaten.css\">";
            echo "<link rel=\"stylesheet\" href=\"css/producten.css\">";
            break;
        case "zoektermBeheer":
            echo "<link rel=\"stylesheet\" href=\"css/productUpdaten.css\">";
            echo "<link rel=\"stylesheet\" href=\"css/producten.css\">";
            break;
        case "winkelwagen":
            echo "<link rel=\"stylesheet\" href=\"css/producten.css\">";
            echo "<link rel=\"stylesheet\" href=\"css/winkelwagen.css\">";
            break;
    }
    ?>
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <script src="https://kit.fontawesome.com/8e6457f37c.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="icon" type="image/png" href="img/favicon.png"/>
    <title><?php echo $title;?></title>
</head>
<body>
<div class="container">

   <?php require_once 'nav.php' ?>
