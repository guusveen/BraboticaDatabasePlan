<?php  
 session_start();  ?>
<div class="navbar">
    <a href="index.php"><img src="img/logo1.png" alt="logo" class="logo"></a>
    <nav>
        <ul id="menuList">
            <li><a href="index.php?controller=OverOns">Over ons</a></li>
            <li><a href="index.php?controller=Portfolio">Portfolio</a></li>
            <li><a href="index.php?controller=Producten">Producten</a></li>
            <li><a href="index.php?controller=Downloads">Downloads</a></li>
            <li><a href="index.php?controller=Contact">Contact</a></li>
            <?php
             if (isset($_SESSION['email']))              
             {  
                   
                 // echo '<br /><br /><a href="logout.php">Logout</a>';

                //echo '<li><a href="index.php?controller=Login">Uitloggen</a></li>';
                echo '<li><a href="index.php?controller=Login&action=logout">Uitloggen</a></li>';
                echo '<li><a href="index.php?controller=Beheer">Beheer</a></li>';
                echo '<li><a href="index.php?controller=Producten&action=productBeheerPagina">Productbeheer</a></li>';
                echo '<li style="font-size: 12px; text-align: left; color: #669999">Welkom <br> '.$_SESSION['email'].'</li>';
                //echo $Voornaam;
             }  
             else
             {  
                  echo '<li><a href="index.php?controller=Login">Inloggen</a></li>';
                  //header("location:pdo_login.php");  
             } 
            ?>
            
        </ul>
    </nav>
    <img src="img/menu.png" alt="" class="menu-icon" onclick="toggleManu()">
</div>
