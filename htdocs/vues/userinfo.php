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
			<li><a href="../vues/frontpage.php">Home</a></li>
			<li><a href="../index.php?c=rooms&function=listeroom">Room List</a></li>
			<li><a href="../index.php?c=sensors&function=listesensor">Sensor List</a></li>
			<li><a href="../index.php?c=aboutus">About Us</a></li>
			<li>User Info</li>
		</ul>
	</div>

	

	<!-- content -->
	<div class="content_background"></div>
	<div class="content">
			
			<div class="content_tit"><h2>Your Information</h2></div>

				<div class="form_control">
					<form name="emailfrom" method="post" action="../index.php?c=users&function=update" class="emailform">
						
						<table class="email_table">
							<tr>
								<td id="account">ID</td>
								<td>1</td>
							</tr>
							<tr>
								<td id="account">Username</td>
								<td><input type="text" name="name" value="isep1" class="form_control" id="account_input"></td>
							</tr>

							<tr>
								<td id="password">Password</td>
								<td><input type="Password" name="pwd" class="form_control" id="password_input"></td>
							</tr>

							<tr>
								<td id="cpassword">Confirm password</td>
								<td><input type="Password" name="cpwd" class="form_control" id="password_confirm"></td>
							</tr>
							
							<tr>
								<td id="e-mail">E-mail</td>
								<td><input type="e-mail" name="email" value="isep1@isep1.fr" class="form_control" id="e-mail"></td>
							</tr>
							
							<tr>
								<td colspan="2">
								<input type="submit" name="submit" value="UPDATE" class="form_control_btn" /> </td><td></td>
							</tr>
					    </table>
					</form>
				</div>
			</div>

</body>
</html>