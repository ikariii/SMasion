<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>home</title>
</head>
<link type="text/css" rel="stylesheet" href="../vues/css/css_default.css">
<body>
	<!-- logo -->
	<div class="logo"></div>
	<hr />
	<!-- menu -->
	<div class="menu_background"></div>
	<div class="menu">
		<ul>
			<li>Home</li>
			<li><a href="../index.php?c=rooms&function=listeroom">Room List</a></li>
			<li><a href="../index.php?c=sensors&function=listesensor">Sensor List</a></li>
			<li><a href="../index.php?c=aboutus">About Us</a></li>
			<li><a href="../index.php?c=users&function=userinfo">User Info</a>
		</ul>
	</div>

	<!-- session:username !-->
	<div class="sessionname" >
	<?php 
		session_start();  
		$userid = $_SESSION['userid'];
		$username = $_POST['username'];
		//$username = "isep1";
		echo "<p style=color:black>Welcome dear client <em>".$username."</em></p>";
		echo '<a href="../vues/login.php">disconnect</a><br />';
		//echo "$userid";
		
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
		<div class="content_tit">
			<h1>Sensors Status Overview</h1>
		</div>
		<div class="home_tem">
			<div class="home_tem_img" align="center">
				<img src="../vues/img/home_tem.png" height="70px">
			</div>
			<h3 id="tem_tit">Lowest Temperature</h3>
			<h2 id="tem_con">5 &#8451;</h2>
		</div>
		<div class="home_hum">
			<div class="home_hum_img" align="center">
				<img src="../vues/img/home_hum.png" height="70px">
			</div>
			<h3 id="hum_tit">Highest Humidity</h3>
			<h2 id="hum_con">40%</h2>
		</div>
		<div class="home_smo">
			<div class="home_smo_img" align="center">
				<img src="../vues/img/home_smo.png" height="70px">
			</div>
			<h3 id="smo_tit">Smoke Sensor Status</h3>
			<h2 id="smo_con">Normal</h2>
		</div>

	</div>

	
	<?php  
		include'footer.php';
	?>
</body>
</html>