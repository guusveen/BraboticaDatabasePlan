<?php 
if(isset($_SESSION['taal']))
{
    if($_SESSION['taal'] === "EN")
    {
        require_once ( __DIR__ . '\..\..\taal\EN.php' );
    } else
    {
        require_once ( __DIR__ . '\..\..\taal\NL.php' );
    }
} else
{
    require_once ( __DIR__ . '\..\..\taal\NL.php' );
}
?>
<div class="navbar">
    <a href="index.php"><img src="img/logo1.png" alt="logo" class="logo"></a>
    <nav>
        <ul id="menuList">
            <li><a href="index.php?controller=OverOns"><?php echo OVERONS; ?></a></li>
            <li><a href="index.php?controller=Portfolio"><?php echo PORTFOLIO; ?></a></li>
            <li><a href="index.php?controller=Producten"><?php echo PRODUCTEN; ?></a></li>
            <li><a href="index.php?controller=Downloads"><?php echo DOWNLOADS; ?></a></li>
            <li><a href="index.php?controller=Contact"><?php echo CONTACT; ?></a></li>
            <?php
             if (isset($_SESSION['rol']) == 'Beheer')              
             {  
                echo '<li><a href="index.php?controller=Login&action=logout">' . UITLOGGEN . '</a></li>';
                echo '<li><a href="index.php?controller=Beheer">' . BEHEER . '</a></li>';
                echo '<li style="font-size: 12px; text-align: left; color: #669999">Welkom <br> '.$_SESSION['email'].'</li>';
                
             }
             elseif (isset($_SESSION['email']))              
                 {  
                    echo '<li><a href="index.php?controller=Winkelwagen">' . WINKELWAGEN . '</a></li>';
                    echo '<li><a href="index.php?controller=Login&action=logout">' . UITLOGGEN . '</a></li>';
                    
                    echo '<li style="font-size: 12px; text-align: left; color: #669999">' . WELKOM . ' <br> '.$_SESSION['email'].'</li>';
                }
                else       
                 {  
                      echo '<li><a href="index.php?controller=Login">' . INLOGGEN . '</a></li>';
                 } 
             
            ?>
            
        </ul>
    </nav>
    <img src="img/menu.png" alt="" class="menu-icon" onclick="toggleManu()">
</div>
