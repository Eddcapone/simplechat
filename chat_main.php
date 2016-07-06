<!--Seite zum Steuern des Chatverlaufs-->
<?php include "session.php"; ?>                                                 <!--Verhindert Zugriff ohne eingeloggt zu sein.-->
<html>
    <head>
        <META HTTP-EQUIV="Refresh" Content="2">                                 <!--Seitenrefresh-->
        <meta charset="UTF-8">
        <link rel="stylesheet" id="mystyle" href="css/dayStyle.css" media="screen">
        <link rel="stylesheet" id="mystyle" href="css/mainStyle.css" media="screen">
        <link rel="stylesheet" href="css/chat.css">
        <script src="scripts/nightmode.js"></script>

    </head>

    <div>                                                                       <!--Einbindung des Chat-Inhalts-->
        <table>
            <?php include 'chat_content.php' ?>
        </table>
    </div>

    <script>                                                                    //Skript für das automatische Scrollen des Chat-Inhalts
        if (localStorage.getItem("smpchtautoscroll") == 1)
        {
            function scrollWin() {
                window.scrollBy(0, 10000);
            }
            window.onload = scrollWin;

        }
    </script>

</html>