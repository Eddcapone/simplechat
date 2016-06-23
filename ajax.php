<?php

include 'session.php';

//session_start();

$cmd            = filter_input(INPUT_POST, "cmd");
$post_username  = filter_input(INPUT_POST, "name");
$post_passwort  = filter_input(INPUT_POST, "passwort");



//Später realisiere ich es eventuell mit Datenbanken
$zugangsdaten = array   
(
    "d"     =>  "d",
    "Eddy"  =>  "MeinPW",
    "Joel"  =>  "Joel123"
);

switch($cmd)
{
  case 'check_login':
  {
      echo check_login();
      break;
  }
  case 'create_entry':
  {
      echo create_entry();
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
    $err_string = "";
    
    $eingeloggt     = filter_var($_SESSION['eingeloggt']);
    $username       = filter_var($_SESSION['username']);
    
    foreach ($zugangsdaten as $name => $passwort)
    {       
        if ($post_username == $name)
        {
            if ($post_passwort == $passwort)
            {
                $eingeloggt = '1';
                $username   = $name;
                
                return "Anmeldung erfolgreich!";
            }
            else
            {
                $eingeloggt = '0';
                return "Anmeldung fehlgeschlagen, Passwort inkorrekt!";
            }
        }
        else
        {
            //$err_string.= "Der Benutzer $post_username ist nicht in der Datenbank vorhanden!";
        }
    }
}

function create_entry()
{
    //Diese Version speichert neuen Inhalt am Anfang der Datei
    $nachricht      = filter_input(INPUT_POST, "message");
    $name           = filter_var($_SESSION['username']);

//    $datei      = fopen("variablen/counter", "r") or exit("<br><p>Fehler beim oeffnen der Datei! #1</p><br>");
//    $counter    = fgets($datei);
//    fclose($datei);
//    $counter    = $counter + 1;
//    $datei      = fopen("variablen/counter", "w") or exit("<br><p>Fehler beim oeffnen der Datei! #1</p><br>");
//    fwrite($datei, $counter);
//    fclose($datei);

    $dateiname      = "chat_content.php";

    $full_string    = "";
    $full_string    = "<tr><td id='chat_entry'><strong>".$name.":&nbsp;</strong></td><td class='inhalt'>".$nachricht."</td></tr>\n";
    $full_string    .= file_get_contents($dateiname);
    
    file_put_contents ($dateiname, $full_string);
}