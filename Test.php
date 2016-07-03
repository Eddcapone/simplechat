<?php
function smplTest()
{
    $datei = 'chat_content.php';
    $dat_ar = file($datei);                  # Daten in Array lesen
    $dat_ar = array_splice($dat_ar, 1, 1);   # 1. Element löschen
    $fp = fopen($datei, 'w');                # Neue Datei mit gleichem Namen erstellen
    foreach($dat_ar as $zeile)
    {
        fputs($fp, $zeile . "\n");           # Verbleibende Zeilen schreiben              
    }
    fclos($fp);

}