<?php
    include "session.php";

    //Diese Version speichert neuen Inhalt am Anfang der Datei

    $inhalt         = $_POST['inputfield'];
    $name           = $_SESSION["username"];


//    $datei      = fopen("variablen/counter", "r") or exit("<br><p>Fehler beim oeffnen der Datei! #1</p><br>");
//    $counter    = fgets($datei);
//    fclose($datei);

//    $counter    = $counter + 1;

//    $datei      = fopen("variablen/counter", "w") or exit("<br><p>Fehler beim oeffnen der Datei! #1</p><br>");
//    fwrite($datei, $counter);
//    fclose($datei);

    $dateiname      = "chat_content.php";

    $full_string    = "";
    $full_string    = "<tr><td id='chat_entry'><strong>".$name.":&nbsp;</strong></td><td class='inhalt'>".$inhalt."</td></tr>\n";
    
//    $full_string    .= file_get_contents($dateiname);
    file_put_contents ($dateiname, $full_string,FILE_APPEND);


    header("Location: chat.php"); 
    exit();