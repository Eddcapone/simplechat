
<!DOCTYPE html>
<?php 
    include "session.php";
?>

<html>
    <head>        
        <link rel="stylesheet" id="mystyle" href="css/dayStyle.css" media="screen">
        <link rel="stylesheet" id="mystyle" href="css/mainStyle.css" media="screen">
        <link rel="stylesheet" href="css/chat.css">
        
        <script src="scripts/jquery.js"></script>
        <script src="scripts/funktionen.js"></script>
        <script src="scripts/chat.js"></script>
        <script src="scripts/nightmode.js"></script>
        <script src="scripts/clock.js"></script>
        <script src="scripts/autocroll.js"></script>
        <script src="scripts/errorbutton.js"></script>
    </head>
<body>
    
    <div id="clockbox"></div>
    

<!-- <?php include 'language.php';?> -->

    <div class="col-lg-6 col-lg-offset-3" id="main">

        <div class="smpchtautoscroll" id="smpchtautoscroll">Autoscroll</div>
        <div class="smpchtnightmode" id="smpchtnightmode">Nightmode</div>
        
        <div class="logout" id="logout">Logout</div>

        <iframe src="chat_main.php" width="1500px" height="800px" id="frame"></iframe>

        <div>
            <input type="text" name="nachricht">
            <input type="submit" name="send">
        </div>        
    </div> 

    <div id="login_error" style="width: 1502px">
        <div class="alert alert-block alert-error fade in">
            <div class="smpchterrorbutton" id="smpchterrorbutton">x</div>
            <h4 class="alert-heading">Leere Nachricht!</h4>
        </div>
    </div>

</body>
</html>