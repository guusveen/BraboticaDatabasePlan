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
             if (isset($_SESSION['rol']) == 'Beheer')              
             {  
                echo '<li><a href="index.php?controller=Login&action=logout">Uitloggen</a></li>';
                echo '<li><a href="index.php?controller=Beheer">Beheer</a></li>';
                echo '<li style="font-size: 12px; text-align: left; color: #669999">Welkom <br> '.$_SESSION['email'].'</li>';
                
             }
             elseif (isset($_SESSION['email']))              
                 {  
                    echo '<li><a href="index.php?controller=Login&action=logout">Uitloggen</a></li>';
                    
                    echo '<li style="font-size: 12px; text-align: left; color: #669999">Welkom <br> '.$_SESSION['email'].'</li>';
                }
                else       
                 {  
                      echo '<li><a href="index.php?controller=Login">Inloggen</a></li>';
                 } 
             
            ?>
            
        </ul>
    </nav>
    <img src="img/menu.png" alt="" class="menu-icon" onclick="toggleManu()">
</div>
