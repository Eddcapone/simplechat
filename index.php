<!DOCTYPE html>

<?php
    session_start();
?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <META HTTP-EQUIV="CACHE-CONTROL" 	CONTENT="NO-CACHE">
    <META HTTP-EQUIV="PRAGMA" 		CONTENT="NO-CACHE">

    <title>Login Page</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" media="screen">
    <script src="scripts/jquery.js"></script>
    <script src="scripts/funktionen.js"></script>
	<link rel="stylesheet" href="css/HauptStyle.css" media="screen">
	<link rel="stylesheet" id="mystyle" href="css/DayStyle.css" media="screen">
    <link rel="stylesheet" href="css/nightmodebutton.css">
	
</head>
<body id="dashboard">

    <div class="smpchtnightmode" id="smpchtnightmode">Nightmode</div>
    <a id="Impressum"Href="Impressum.html">Impressum</a>
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
	<script>
			function ale () { 
					alert("HI");
				}
			//document.getElementById("nightmode").onclick = ale;
	</script>
    <script src="scripts/jquery.js"></script>
	
    <script type='text/javascript'>
        var main = function()
        {
            
            $("button[name=login]").click
            (
                function()
                {
                    var name       = $("input[name=username]").val();
                    var passwort   = $("input[name=password]").val();

                    console.log("NAME = ", name);
                    console.log("PW = ", passwort);

                    if (name != "" && passwort != "")
                    {
                        $.ajax
                        (
                            {
                                url:    "ajax.php",
                                type:   "POST",
                                data:
                                {
                                    cmd:        "check_login",
                                    passwort:   passwort,
                                    name:       name
                                },
                                success: function (response)
                                {
                                    if (response === "Anmeldung erfolgreich!")
                                    {
                                        console.log("Anmeldung erfolgreich");
                                        $("div#login_error").css("display","none");
                                        window.location.replace("chat.php");
                                    }
                                    else
                                    {
                                        console.log("Anmeldung fehlgeschlagen");
                                        $("div#login_error").css("display","block");
                                    }
                                }
                            }
                        );
                    }
                }
            );
            
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
	<script>
		if(localStorage.getItem("smpchtnightmode")==1){
		 
			var x = document.getElementById("mystyle");
			x.href="css/NightStyle.css";
		}else{
			var x = document.getElementById("mystyle");
			x.href="css/DayStyle.css";
		}
	</script>

</body>
</html>