<?php

	//Diese Version speichert neuen Inhalt am Anfang der Datei

	$inhalt 	= $_POST['inputfield'];
	
	
	$datei = 	fopen("variablen/counter", "r")or exit("<br><p>Fehler beim oeffnen der Datei! #1</p><br>");
	$counter = 	fgets($datei);
				fclose($datei);
				
	$counter = 	$counter + 1;
	
	$datei = 	fopen("variablen/counter", "w")or exit("<br><p>Fehler beim oeffnen der Datei! #1</p><br>");
				fwrite($datei, $counter);
				fclose($datei);
				
	$dateiname 	= "chat_content.php";
	
	$full_string = "";
	$full_string = "<tr><td id='chat_entry'>".$counter."</td><td>".$inhalt."</td></tr>\n";
	$full_string .= file_get_contents($dateiname);
	file_put_contents ($dateiname, $full_string);
	
	
	header("Location: chat.php"); 
	exit();


?>