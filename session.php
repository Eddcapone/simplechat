<!--Skript, das sicherstellt, dass nur User die eingeloggt sind auf Seiten zugreifen können.-->
<?php

session_set_cookie_params(1);                                                   //Speichert 1 Stunde, dass ein Nutzer eingeloggt ist.
session_start();


if (isset($_SESSION['eingeloggt']) && $_SESSION['eingeloggt'] == '1')
{
    $user = $_SESSION['username'];
}
else                                                                            //Wenn der Nutzer nicht eingeloggt ist, wird er zur Startseite geführt.
{
    header("Location: index.php"); 
    exit();
}