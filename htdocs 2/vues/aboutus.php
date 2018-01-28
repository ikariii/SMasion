<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>home</title>
</head>
<link type="text/css" rel="stylesheet" href="../vues/css/css_aboutus.css">
<body>
	<!-- logo -->
	<div class="logo"></div>
	<hr />
	<!-- menu -->
	<div class="menu_background"></div>
	<div class="menu">
		<ul>
			<li><a href="vues/frontpage.php">Home</a></li>
			<li><a href="../index.php?c=rooms&function=listeroom">Room List</a></li>
			<li><a href="../index.php?c=sensors&function=listesensor">Sensor List</a></li>
			<li>About Us</li>
		</ul>
	</div>

	<!-- session:username !-->
	<div class="sessionname" >
	<?php 
		session_start();  
		$userid = $_SESSION['userid'];
		$username = $_SESSION['username'];
		echo "<p style=color:black>Welcome dear client <em>".$username."</em></p>";
		echo '<a href="../controleurs/logout.php?action=logout">disconnect</a><br />';
		//echo "$userid";
		//echo "$username"; 
	?>
	</div>

	<!-- read time !-->
	<div class="realtime"><p id="time1"></p>
	<script>
    	function mytime(){
        	var a = new Date();
        	var b = a.toLocaleTimeString();
        	var c = a.toLocaleDateString();
        	document.getElementById("time1").innerHTML = c+"&nbsp"+b;
        }
    	setInterval(function() {mytime()},1000);
	</script></div>

	<!-- content -->
	<div class="content_background"></div>
	<div class="content">
			
			<div class="content_tit"><h2>We get in touch !</h2></div>

				<?php
					if (isset($_REQUEST['email']))
					//if "email" is filled out, send email
					  {
					  //send email
					  $name = $_REQUEST['name'] ; 
					  $email = $_REQUEST['email'] ; 
					  $telephone = $_REQUEST['telephone'] ; 
					  $subject = $_REQUEST['subject'] ;
					  $message = $_REQUEST['message'] ;
					  mail( "someone@example.com", "Subject: $subject",
					  $message, "From: $email" );
					  echo "Thank you for using our mail form";
					  }
					else
					//if "email" is not filled out, display the form
					  {
				?>

				<div class="form_control">
					<form name="emailfrom" method="post" action="https://formspree.io/krad1969@gmail.com" class="emailform">
						<h2>Please write your...</h2>
						<table class="email_table">
							<tr>
		 						<td id="name">Name</td>
								<td><input type="text" name="name" class="form_control" id="name_input"></td>
							</tr>
							<tr>
		 						<td id="email">Email Address</td>
		 						<td><input type="text" name="email" class="form_control" id="email_input"></td>
							</tr>
							<tr>
		 						<td id="telephone">Telephone Number</td>
		 						<td><input type="text" name="telephone" class="form_control" id="telephone_input"></td>
							</tr>

							<tr>
		 						<td id="message">Message</td>
		 						<td><textarea name="message" maxlength="1000" cols="25" rows="6" class="form_control" id="message_input"></textarea></td>
							</tr>

							<tr>
								<td colspan="2">
								<input type="submit" name="submit" value="Send Email" class="form_control_btn" /> </td><td></td>
							</tr>
		    			</table>
			        </form>
			    </div>
					  <?php
					  }
					?>


	<?php  
		include'footer.php';
	?>
</body>
</html>