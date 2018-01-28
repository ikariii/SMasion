<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
</head>
<link type="text/css" rel="stylesheet" href="../vues/css/css_login.css">
<body>
	<div class="form_control">
		<form name="loginForm" method="post" action="../index.php?c=users&function=login" class="loginform" onSubmit="return InputCheck(this)">
			<table class="login_table">
				<tr><div class="login_table_logo">
				</div></tr>

				<tr>
					<td id="account">Account</td>
					<td><input type="text" name="username" class="form_control" id="account_input"></td>
				</tr>

				<tr>
					<td id="password">Password</td>
					<td><input type="Password" name="pwd" class="form_control" id="password_input"></td>
				</tr>

				<tr>
					<td colspan="2">
					<input type="Reset" class="form_control_btn"></td><td></td>
				</tr>
				<tr>
					<td colspan="2">
					<input type="submit" name="submit" value="LOGIN" class="form_control_btn" /> </td><td></td>
				</tr>

			</table>
		</form>
	</div>
</body>
</html>