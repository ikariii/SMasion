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
				<h1>Sensor List</h1>
		</div>
		
		<div class="listersensor">
			<ul >
				<?php foreach ($liste as $element) { ?>

				<li  class="listli" style="float:left">
					<table style="line-height:100%;">
						<tr><td>
							<?php
								switch ($element['SensorType']) {
									case 'smoke':
										?><a href="../index.php?c=callback&function=sensorscallback&sensorid=<?php echo $element['SensorId']; ?>"><img src="../vues/img/smoke.png" height="100px"></a><?
										break;

									case 'humidity':
										?><a href="../index.php?c=callback&function=sensorsinroom&sensorid=<?php echo $element['SensorId']; ?>"><img src="../vues/img/humidity.png" height="100px"></a><?
										break;

									case 'temperature':
										?><a href="../index.php?c=callback&function=sensorsinroom&sensorid=<?php echo $element['SensorId']; ?>"><img src="../vues/img/temperature.png" height="100px"></a><?
										break;

									default:
										?><a href="../index.php?c=callback&function=sensorsinroom&sensorid=<?php echo $element['SensorId']; ?>"><img src="../vues/img/smoke.png" height="100px"></a><?
										break;
								}
							?>
							</td></tr>
						<tr><td class="listtd"><?php echo $element['SensorName']; ?></td></tr>
					</table>
				</li>
				
				<?php } ?>
			</ul>
		</div>
		<br>

		<div class="sensorlist">
			<table border='1' id="table1">
					<thead>
						<tr>
							<th>Sensor Id</th>
							<th>User Id</th>
							<th>Sensor Type</th>
							<th>Room Id</th>
							<th>Sensor Name</th>
							
						</tr>
				</thead>
				<tbody id="table2">	
				
			    <?php foreach ($liste as $element) { ?>
			    
			        <tr>
			        		<td>
								<?php echo $element['SensorId']; ?>
			            	</td>
			        		<td>
			        			<?php echo $element['UserId']; ?>
			        		</td>
			        		<td>
			        			<?php echo $element['SensorType']; ?>
			        		</td>
			        		<td>
			        			<?php echo $element['RoomId']; ?>
			        		</td>
			        		<td>
			        			<?php echo $element['SensorName']; ?>
			        		</td>
			        	</tr>
			    
			    <?php } ?>

				</tbody>
			</table>
	</div>

	<div>
			<h2>Add Sensor</h2>
	        <form id="fomr1" name="fomr1" action="../index.php?c=sensors&function=ajout" method="post">
	            <table id="mytable" width="580" border="1" align="center" cellpadding="0" cellspacing="0" >
	                 <tr>
	                    <td width="150" class="td01">Sensor Id</td>
	                    <td width="150" class="td01">User Id</td> 
	                    <td width="150" class="td01">Sensor Type</td>
	                    <td width="150" class="td01">Room Id</td>
	                    <td width="150" class="td01">Sensor Name</td>

	                 </tr>
	                 <tr>
		                <td><input name="sensorid[]" type="text" size="12"></td>
		                <td><input name="userid[]" type="text" size="12"></td>
	                 	<td><input name="sensortype[]" type="text" size="12"></td>
	                 	<td><input name="roomid[]" type="text" size="12"></td>
	                 	<td><input name="sensorname[]" type="text" size="12"></td>
	                </tr>
	            </table>
	          	<input type="button" value="Add" onclick="add_new_data()"> <input type="button" value="Remove" onclick="remove_data()"><br />
	          	<input type="submit" value="Submit">
	        </form>
	 		<script type="text/javascript">
		
				function add_new_data() {
				 var num = document.getElementById("mytable").rows.length;
				 var Tr = document.getElementById("mytable").insertRow(num);
				 Td = Tr.insertCell(Tr.cells.length);
				 Td.innerHTML='<input name="sensorid[]" type="text" size="12">';
				 Td = Tr.insertCell(Tr.cells.length);
				 Td.innerHTML='<input name="userid[]" type="text" size="12">';
				 Td = Tr.insertCell(Tr.cells.length);
				 Td.innerHTML='<input name="sensortype[]" type="text" size="12">';
				 Td = Tr.insertCell(Tr.cells.length);
				 Td.innerHTML='<input name="roomid[]" type="text" size="12">';
				 Td = Tr.insertCell(Tr.cells.length);
				 Td.innerHTML='<input name="sensorname[]" type="text" size="12">';
				}

				function remove_data() {
				 var num = document.getElementById("mytable").rows.length;
				 if(num >2)
				 {
				  document.getElementById("mytable").deleteRow(-1);
				 }
				}
			</script>
		</div>


	<?php echo DisplayAlert($alerte); ?>

	<p>
		<a href="vues/frontpage.php">Return to frontpage</a>
	</p>
</div>
</body>