<?php
    include "session.php";
?>
<html>
<head>
    <meta http-equiv="refresh" content="2">
	<link rel="stylesheet" href="css/HauptStyle.css" media="screen">
	<link rel="stylesheet" id="mystyle" href="css/DayStyle.css" media="screen">
</head>
<body>
    <table>
        <?php include 'chat_content.php' ?>
    </table>
	<script>
		if(localStorage.getItem("smpchtnightmode")==1){
		 
			var x = document.getElementById("mystyle");
			x.href="css/NightStyle.css";
		}else{
			var x = document.getElementById("mystyle");
			x.href="css/DayStyle.css";
		}
	</script>
	
	<div id="footer"></div> 
	
</body>
</html>