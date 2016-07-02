<?php
    include "session.php";
?>
<html>
<head>
    <META HTTP-EQUIV="Refresh" Content="2">
    <meta charset="UTF-8">
    <link rel="stylesheet" id="mystyle" href="css/loginDay.css" media="screen">
    <link rel="stylesheet" href="css/chat.css">
    <script src="scripts/nightmode.js"></script>

</head>

<script>
</script>
    
    <div>
        <table id="testiframe">
            <?php include 'chat_content.php' ?>
        </table>
    </div>
    
    <div id="footer"></div> 
    
    
    <script>
    function scrollWin() {
        window.scrollBy(0, 10000);
    }
        window.onload=scrollWin;
    </script>
 
</html>