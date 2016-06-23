<!DOCTYPE html>
<?php 
    include "session.php";
?>

<html>
<head>
    <link rel="stylesheet" href="css/chat.css">
    <script src="scripts/jquery.js"></script>
    <script src="scripts/funktionen.js"></script>
</head>
<body>

<!-- <?php include 'language.php';?> -->


    <div class="col-lg-6 col-lg-offset-3" id="main">

        <div class="logout" id="logout">Logout</div>
        
        <iframe src="chat_main.php" id="mydiv_inhalt">
            <?php include "chat_main.php"; ?>
        </iframe>

        <div>
            <input type="text" name="nachricht">
            <input type="submit" name="send">
        </div>
    </div> 
</body>
</html>