<!--Skript, das den Nutzer ausloggt.-->
<?php

include "session.php";
session_destroy();

header("Location: index.php");
exit();