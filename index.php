<?php
    session_start();
?>

<!DOCTYPE html>
<!-- Diese Datei in "index.php" umbenennen damit es wieder funzt -->
<html lang="en">
<head>
    <meta charset="utf-8">
    <META HTTP-EQUIV="CACHE-CONTROL" 	CONTENT="NO-CACHE">
    <META HTTP-EQUIV="PRAGMA" 		CONTENT="NO-CACHE">

    <title>Login Page</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="css/loginNightly.css" media="screen">
	
</head>
<body id="dashboard">
    <div class="col-lg-4 col-lg-offset-4" id="main">
        <div id="überschrift">
            <h1> Login </h1>
        </div>

        <div id="login_box">
            <div id="login_box_p1">
                <h4> Login </h4>
            </div>	

            <div id="login_box_p2">
                <div id="login">
                    <form method="POST" name="login_form" action="index.php">

                        <input type="text" name="username" value="" placeholder="username" class="input_text"></input>
                        <input type="password" name="password" value="" placeholder="password" class="input_text"></input>
                        <button type="submit" class="btn"> Go </button>
                    </form>
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

    <script src="scripts/jquery.js"></script>

    <?php 
        

    
        if (isset($_POST['username'] ) && isset($_POST['password']))
        {
            $username 	= $_POST['username'];
            $password 	= $_POST['password'];

            $pw 	= "admin";
            $user	= "admin";

            if ($username == $user && $password == $pw)
            {	
                $_SESSION['eingeloggt'] = 'logged in';
                $_SESSION['username'] = $username;

                header("Location: chat.php");
                exit();
            } 
            else 
            {
                $_SESSION['eingeloggt'] = 'not logged in';

                if ($username != '' || $password  != '')
                {
                    echo "<script type='text/javascript'>\n";
                    echo "jQuery('#login_error').css('display','block');\n";
                    echo "</script>\n";
                }
            }
        }
    ?>
	
    <script type='text/javascript'>
        var main = function()
        {
            $('.close').click
            (
                function()
                {
                    $('#login_error').css('display', 'none');
                }
            );	
        };
        $(document).ready(main);	
    </script>
</body>
</html>