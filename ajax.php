<?php
    
session_start();

$cmd            = filter_input(INPUT_POST, "cmd");
$post_username  = filter_input(INPUT_POST, "name");
$post_passwort  = filter_input(INPUT_POST, "passwort");

$zugangsdaten = array                                                           //Logindaten
(
    "d"     =>  "d",
    "Eddy"  =>  "a",
    "Joel"  =>  "Joel123",
    "Alex"  =>  "1337",
    "Moritz" => "mo",
    "Christoph" => "chris"
);

switch($cmd)                                                                    //Für die Ajax Requests
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

function check_login()                                                          //Funktion für das Einloggen
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

function create_entry()                                                         //Funktion für das erstellen einer Nachricht.
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

    if (isset($nachricht))
    {

        $nachricht       = convert_to_smiley($nachricht);
        $dateiname      = "chat_content.php";

        $full_string    = "<tr>";
        $full_string    .= "</td><td>&nbsp;".$uhrzeit."&nbsp;</td>";
        $full_string    .= "<td id='chat_entry'><strong>".$name."&nbsp;:</strong>";
        $full_string    .= "<td class='inhalt'>".$nachricht."</td>";
        $full_string    .= "</tr>\n";

        file_put_contents ($dateiname, $full_string, FILE_APPEND);              //Die Nachrichten werden hier in der chat_content.php gespeichert.
    }
    else
    {
        echo "POST Variable 'message' nicht gesetzt!";
    }
}

function convert_to_smiley($nachricht)                                          //Funktion für die Smilies
{
    //schule ist heute mal wieder voll geil kappa, kunst ist das beste fach kappaross
		
	//Kappaross muss an erster Stelle stehen
	$neue_nachricht = preg_replace("/ kappaross/"," <img style='width:24px'class='emoticon' src='img/kappaross.png'>", $nachricht);
	$neue_nachricht = preg_replace("/ kappa/"," <img style='width:20px' class='emoticon' src='img/kappa.png'>", $neue_nachricht);
   
	
	//schule ist heute mal wieder voll geil (KAPPA EMOT), kunst ist das beste fach kappaross
	
	
    if ($nachricht != $neue_nachricht)
    {
        return $neue_nachricht;
    }
    else
    {
        return $nachricht;
    }
    
    
}