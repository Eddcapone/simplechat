<!--Skript, das sicherstellt, dass nur User die eingeloggt sind auf Seiten zugreifen können.-->
<?php

include "session.php";
session_destroy();

header("Location: index.php");
exit();