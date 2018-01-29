<?php 
/**
* Vue : liste of registered sensors
*/
?>

<!--<h1><?= $title; ?></h1>

<p><?= $entete; ?></p> -->

<link type="text/css" rel="stylesheet" href="../vues/css/css_default.css">
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
			<li>Sensor List</li>
			<li><a href="../index.php?c=aboutus">About Us</a></li>
			<li><a href="../index.php?c=users&function=userinfo">User Info</a>
		</ul>
	</div>
	
	<!-- content -->
	<div class="content_background"></div>
	<div class="content">
		<div class="listtitle">
				<h1>Callback</h1>
		</div>
		
		
		<br>

		<div class="sensorlist">
			<table border='1' id="table1">
					<thead>
						<tr>
							<th>Callback Id</th>
							<th>Data</th>
							<th>Callback Time</th>
							<th>Sensor Id</th>
							<th>Sensor Status</th>
							
						</tr>
				</thead>
				<tbody id="table2">	
				
			    <?php foreach ($liste as $element) { ?>
			    
			        <tr>
			        		<td>
								<?php echo $element['CallbackId']; ?>
			            	</td>
			        		<td>
			        			<?php echo $element['Data']; ?>
			        		</td>
			        		<td>
			        			<?php echo $element['Time']; ?>
			        		</td>
			        		<td>
			        			<?php echo $element['SensorId']; ?>
			        		</td>
			        		<td>
			        			<?php echo $element['Status']; ?>
			        		</td>
			        	</tr>
			    
			    <?php } ?>

				</tbody>
			</table>
	</div>


	<?php echo DisplayAlert($alerte); ?>

	<p>
		<a href="vues/frontpage.php">Return to frontpage</a>
	</p>
</div>
</body>