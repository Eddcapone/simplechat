<?php

session_set_cookie_params(1);		//1 = 1 Stunde      // each client should remember their session id for EXACTLY 1 hour
session_start();


if (isset($_SESSION['eingeloggt']) && $_SESSION['eingeloggt'] == '1')
{
    $user = $_SESSION['username'];
}
else
{
    header("Location: index.php"); 
    exit();
}