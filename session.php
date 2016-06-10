<?php

// each client should remember their session id for EXACTLY 1 hour
session_set_cookie_params(1);		//1 = 1 Stunde

session_start();

//echo $_SESSION["eingeloggt"];

if (isset($_SESSION['eingeloggt']) && $_SESSION['eingeloggt'] == 'logged in')
{
    $user = $_SESSION['username'];
}
else
{
    header("Location: index.php"); 
    exit();
}
