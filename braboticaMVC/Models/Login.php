<?php

require_once ( 'Model.php' );

class Login extends Model
{
  private $Voornaam;
  private $Email;
  private $Wachtwoord;

  public function LoginModel($Voornaam) {
    $this->Voornaam = $Voornaam;
    $this->Email = $Email;
    $this->Wachtwoord = $Wachtwoord;
  }

  public function Get_voornaam() {
    return $this->Voornaam;
  }

  public function Set_voornaam() {
    $this->Voornaam = $Voornaam;
  }   

/*
  public function uitvoeren()
  {
    $pdo = DB::connect();

    $Email=$_POST['Email'];
    $Wachtwoord=md5($_POST['Wachtwoord']);
    
    $stmt = $pdo->prepare("SELECT * FROM gebruikers WHERE Email = :Email AND Wachtwoord = :Wachtwoord");
    //$res= $this->db->select("SELECT * FROM `gebruikers` WHERE Email = '".$Email."' AND Wachtwoord = '".$Wachtwoord."'");
    //$count = count($res);
    $product = $stmt->fetch();

    //if($stmt->rowCount() === 1)
    if($stmt->rowCount() > 0)
    {
    
    //if ($count > 0) {
      
      Session::init();
      Session::set('role', "user");
      Session::set('loggedIn', true);
      Session::set('Email', $Email);
      Session::set('Wachtwoord', $res[0]['Wachtwoord']);
      header('location: '.URL.'login/index');
    } 
       else {
      Session::set('loggedIn', false);
      header('location: '.URL);
    }
  }
  */

}
?>