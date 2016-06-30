<?php

session_start();

$cmd            = filter_input(INPUT_POST, "cmd");
$post_username  = filter_input(INPUT_POST, "name");
$post_passwort  = filter_input(INPUT_POST, "passwort");

//Später realisiere ich es eventuell mit Datenbanken
$zugangsdaten = array   
(
    "d"     =>  "d",
    "Eddy"  =>  "a",
    "Joel"  =>  "Joel123",
    "Alex"  =>  "1337",
    "Moritz" => "mo",
    "Christoph" => "chris"
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
   
    foreach ($zugangsdaten as $name => $passwort)
    {       
        if ($post_username == $name)
        {
            if ($post_passwort == $passwort)
            {
                $_SESSION['eingeloggt'] = '1';
				$_SESSION['username'] 	= $name;
                $username   			= $name;
                
                return "Anmeldung erfolgreich!";
            }
            else
            {
                $_SESSION['eingeloggt'] = '0';
                return "Anmeldung fehlgeschlagen, Passwort inkorrekt!";
            }
        }
    }
}

function create_entry()
{
    //Diese Version speichert neuen Inhalt am Anfang der Datei
    $nachricht  = filter_input(INPUT_POST, "message");
    $nachricht  = strip_tags($nachricht);
    $name	= $_SESSION['username'];

    $uhrzeit 	= date('h:i:s', time());


    if (!isset($name))
    {
        $name = "Anonymous";
    }

//    $datei      = fopen("variablen/counter", "r") or exit("<br><p>Fehler beim oeffnen der Datei! #1</p><br>");
//    $counter    = fgets($datei);
//    fclose($datei);
//    $counter    = $counter + 1;
//    $datei      = fopen("variablen/counter", "w") or exit("<br><p>Fehler beim oeffnen der Datei! #1</p><br>");
//    fwrite($datei, $counter);
//    fclose($datei);

    if (isset($nachricht))
    {
        $nachricht       = convert_to_smiley($nachricht);
        $dateiname      = "chat_content.php";

        $full_string    = "<tr>";
        $full_string    .= "</td><td>&nbsp;".$uhrzeit."&nbsp;</td>";
        $full_string    .= "<td id='chat_entry'><strong>".$name."&nbsp;:</strong>";
        $full_string    .= "<td class='inhalt'>".$nachricht."</td>";
        $full_string    .= "</tr>\n";

        file_put_contents ($dateiname, $full_string, FILE_APPEND);
    }
    else
    {
        echo "POST Variable 'message' nicht gesetzt!";
    }
}

function convert_to_smiley($nachricht)
{
    
    $neue_nachricht = preg_replace("/ Kappa/"," <img class='emoticon' src='img/kappa.png'>", $nachricht);
    
    if ($nachricht != $neue_nachricht)
    {
        return $neue_nachricht;
    }
    else
    {
        return $nachricht;
    }
    
    
}