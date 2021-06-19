<?php   
 session_start();  

unset($_SESSION['user_id']);
unset($_SESSION['voornaam']);
unset($_SESSION['rol']);
unset($_SESSION['email']);
unset($_SESSION['wachtwoord']);
unset($_SESSION['login']);
unset($_SESSION['beheer']);

 $_SESSION = array();
 session_destroy();  

//setcookie("o2qrjo4c1pmjsr0jshm2d4spm1","", time()-3600, $cookiePath);
//unset ($_COOKIE['o2qrjo4c1pmjsr0jshm2d4spm1']);
setcookie("o2qrjo4c1pmjsr0jshm2d4spm1", "", time() - 3600);
setcookie("u7pupc2r7fq2pn510v3hmqrl4j", "", time() - 3600);
unset ($_COOKIE['o2qrjo4c1pmjsr0jshm2d4spm1']);
unset ($_COOKIE['u7pupc2r7fq2pn510v3hmqrl4j']);

session_abort();


	header("location:index.php?controller=Login&action=logout");
 ?> 