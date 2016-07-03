<?php
include "session.php";
?>
<html>
    <head>
        <META HTTP-EQUIV="Refresh" Content="2">
        <meta charset="UTF-8">
        <link rel="stylesheet" id="mystyle" href="css/dayStyle.css" media="screen">
        <link rel="stylesheet" id="mystyle" href="css/mainStyle.css" media="screen">
        <link rel="stylesheet" href="css/chat.css">
        <script src="scripts/nightmode.js"></script>

    </head>

    <div>
        <table id="testiframe">
            <?php include 'chat_content.php' ?>
        </table>
    </div>

    <div id="footer"></div> 

    <script>     
        if (localStorage.getItem("smpchtautoscroll") == 1)
        {
            function scrollWin() {
                window.scrollBy(0, 10000);
            }
            window.onload = scrollWin;

        }
    </script>

</html>