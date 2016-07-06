<!--Startseite des Chats, hier kann man sich einloggen.-->
<!DOCTYPE html>

<?php
    session_start();
?>

<html lang="en">
<head>
    <title>Login Page</title>
    
    <meta charset="utf-8">
    <META HTTP-EQUIV="CACHE-CONTROL" 	CONTENT="NO-CACHE">
    <META HTTP-EQUIV="PRAGMA" 		CONTENT="NO-CACHE">

    <link rel="stylesheet" href="css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" id="mystyle" href="css/dayStyle.css" media="screen">
    <link rel="stylesheet" id="mystyle" href="css/mainStyle.css" media="screen">
    <link rel="stylesheet" href="css/nightmodebutton.css">
    
    <script src="scripts/jquery.js"></script>
    <script src="scripts/funktionen.js"></script>
    <script src="scripts/login.js"></script>
    <script src="scripts/nightmode.js"></script>
	
</head>
<body id="dashboard">

    <div class="smpchtnightmode" id="smpchtnightmode" onclick="">Nightmode</div>
    <div class="col-lg-4 col-lg-offset-4" id="main">
        <div id="ueberschrift">
            <h1> Login </h1>
        </div>
        <div id="login_box">
            <div id="login_box_p1">
                <h4> Login </h4>
            </div>

            <div id="login_box_p2">
                <div id="login">
                    <input type="text" name="username" value="" placeholder="username" class="input_text"></input>
                    <input type="password" name="password" value="" placeholder="password" class="input_text"></input>
                    <button type="submit" name="login" class="btn"> Go </button>
                </div>
            </div>
        </div>

        <div id="login_error">
            <div class="alert alert-block alert-error fade in">
                <button class="close" data-dismiss="alert" type="button">×</button>
                <h4 class="alert-heading">Login Error</h4>
                Username or Password are not correct.<br>
                Benutzername oder Kennwort sind nicht korrekt.
            </div>
        </div>
    </div>
</body>
</html>