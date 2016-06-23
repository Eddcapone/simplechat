<!DOCTYPE html>
<?php 
    include "session.php";
?>

<html>
<head>
    <script src="scripts/jquery.js"></script>
    <script src="scripts/funktionen.js"></script>
	<link rel="stylesheet" id="mystyle" href="css/loginDay.css" media="screen">
    <link rel="stylesheet" href="css/chat.css">
</head>
<body>

<!-- <?php include 'language.php';?> -->


    <div class="col-lg-6 col-lg-offset-3" id="main">

        <div class="logout" id="logout">Logout</div>
        <iframe src="chat_main.php#footer" id="mydiv_inhalt">
            <?php include "chat_main.php"; ?>
        </iframe>

        <div>
            <input type="text" name="nachricht">
            <input type="submit" name="send">
        </div>
    </div> 
	<script>
		if(localStorage.getItem("smpchtnightmode")==1){
		 
			var x = document.getElementById("mystyle");
			x.href="css/loginNightly.css";
		}else{
			var x = document.getElementById("mystyle");
			x.href="css/loginDay.css";
		}
	</script>
	<button type="button" id="smpchtnightmode" onclick = "neuerstyle()">Toggle Nightmode</button>
	
	<script>
		function neuerstyle() {
		 if(localStorage.getItem("smpchtnightmode")==1){
				localStorage.setItem("smpchtnightmode", "0");				
				var x = document.getElementById("mystyle");
				x.href="css/loginDay.css";
			}else{
				localStorage.setItem("smpchtnightmode", "1");
				var x = document.getElementById("mystyle");
				x.href="css/loginNightly.css";
			}
		}
	</script>
</body>
</html>