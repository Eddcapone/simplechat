<?php 
	include "session.php";
    $this_page = basename(__FILE__);
    setcookie("last_page", $this_page);
?>

<!DOCTYPE html>
<html>
<head>

    <style>
        #chat_entry
        {
            padding-right:20px;
        }
    </style>
	<link rel="stylesheet" id="mystyle" href="css/loginDay.css" media="screen">
	
</head>
<body>

<p hidden='true' id='page'><?php echo $this_page ?></p>
<!-- <?php include 'language.php';?> -->


<form method="post" action="create_content.php" name="config_form">
    <div class="col-lg-6 col-lg-offset-3" id="main">

        <iframe src="chat_main.php" id="mydiv_inhalt">
            <?php include "chat_main.php"; ?>
        </iframe>

        <div id="mydiv_buttons">
            <input type="text" name="inputfield">
            <input type="submit">
        </div>
    </div> 
</form>
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