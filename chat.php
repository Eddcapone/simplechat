<!DOCTYPE html>
<?php 
    include "session.php";
?>

<html>
    <head>
        <script src="scripts/jquery.js"></script>
        <script src="scripts/funktionen.js"></script>
	<link rel="stylesheet" href="css/HauptStyle.css" media="screen">
	<link rel="stylesheet" id="mystyle" href="css/DayStyle.css" media="screen">
        <link rel="stylesheet" href="css/chat.css">
    </head>

	<script>
		if(localStorage.getItem("smpchtnightmode")==1){
		 
			var x = document.getElementById("mystyle");
			x.href="css/NightStyle.css";
		}else{
			var x = document.getElementById("mystyle");
			x.href="css/DayStyle.css";
		}
	</script>
	
<body>
    
    <a id="Impressum"Href="Impressum.html">Impressum</a>
		
    <script type="text/javascript">
        var tmonth=new Array("January","February","March","April","May","June","July","August","September","October","November","December");

        function GetClock()
        {
            var d=new Date();
            var nmonth=d.getMonth(), ndate=d.getDate(), nyear=d.getYear();
            if(nyear<1000) nyear+=1900;

            var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds();
            if(nmin<=9) nmin="0"+nmin
            if(nsec<=9) nsec="0"+nsec;

            document.getElementById('clockbox').innerHTML=""+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+":"+nsec+"";
        }

        window.onload=function()
        {
            GetClock();
            setInterval(GetClock,1000);
        }
    </script>
    <div id="clockbox"></div>


<!-- <?php include 'language.php';?> -->

    <div class="col-lg-6 col-lg-offset-3" id="main">

        <div class="smpchtnightmode" id="smpchtnightmode">Nightmode</div>
        <div class="logout" id="logout">Logout</div>
        <iframe src="chat_main.php#footer" width="500px">
            <?php include "chat_main.php"; ?>
        </iframe>

        <div>
            <input type="text" name="nachricht">
            <input type="submit" name="send">
        </div>
    </div> 
</body>
</html>