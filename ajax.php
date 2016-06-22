<?php
session_start();

$cmd           = filter_input(INPUT_POST, "cmd");
$post_username = filter_input(INPUT_POST, "name");
$post_passwort = filter_input(INPUT_POST, "passwort");

//Später realisiere ich es eventuell mit Datenbanken
$zugangsdaten = array   
(
    "d"=>"d",
    "Eddy"=>"MeinPW",
    "Joel"=>"Joel123"
);


switch($cmd)
{
  case 'check_login':
  {
      echo check_login();
      break;
  }
  default:
  {
      echo 'Switch Statement Fail';
      break;
  }
}

function check_login()
{
    global $zugangsdaten, $post_username, $post_passwort;
    
    foreach ($zugangsdaten as $name => $passwort)
    {       
        if ($post_username == $name)
        {
            if ($post_passwort == $passwort)
            {
                $_SESSION['eingeloggt'] = '1';
                $_SESSION["username"]   = $name;
                
                return "Anmeldung erfolgreich!";
            }
            else
            {
                $_SESSION['eingeloggt'] = '0';
                return "Anmeldung fehlgeschlagen, Passwort inkorrekt!";
            }
        }
        else
        {
            return "Der Benutzer $post_username ist nicht in der Datenbank vorhanden!";
        }
    } 
}

