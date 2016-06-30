<!DOCTYPE html>
<?php 
    include "session.php";
?>

<html>
    <head>        
        <link rel="stylesheet" id="mystyle" href="css/loginDay.css" media="screen">
        <link rel="stylesheet" href="css/chat.css">
        
        <script src="scripts/jquery.js"></script>
        <script src="scripts/funktionen.js"></script>
        <script src="scripts/chat.js"></script>
        <script src="scripts/nightmode.js"></script>
        <script src="scripts/clock.js"></script>
    </head>
<body>

    <div id="clockbox"></div>

<!-- <?php include 'language.php';?> -->

    <div class="col-lg-6 col-lg-offset-3" id="main">

        <div class="logout" id="logout">Logout</div>
        
        <iframe src="chat_main.php" width="1500px">
            <?php include "chat_main.php"; ?>
        </iframe>

        <div>
            <input type="text" name="nachricht">
            <input type="submit" name="send">
        </div>
    </div>

    <button type="button" id="smpchtnightmode" onclick = "neuerstyle()">Toggle Nightmode</button>
</body>
</html>