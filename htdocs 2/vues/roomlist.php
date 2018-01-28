<?php 
/**
* Vue : liste of registered rooms
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
			<li>Room List</li>
			<li><a href="../index.php?c=sensors&function=listesensor">Sensor List</a></li>
			<li><a href="../index.php?c=aboutus">About Us</a></li>
			
		</ul>
	</div>
	
	<!-- content -->
	<div class="content_background"></div>
	<div class="content">
		<div class="listtitle">
				<h1>Room List</h1>
		</div>
		
		<div class="listeroom">
			<ul >
				<?php foreach ($liste as $element) { ?>

				<li  class="listli" style="float:left">
					<table style="line-height:10%;">
						<tr><td>
							<?php
								switch ($element['RoomType']) {
									case 'livingroom':
										?><a href="../index.php?c=sensors&function=sensorsinroom&roomid=<?php echo $element['RoomId']; ?>"><img src="../vues/img/livingroom.png" height="130px"></a><?
										break;

									case 'kitchen':
										?><a href="../index.php?c=sensors&function=sensorsinroom&roomid=<?php echo $element['RoomId']; ?>"><img src="../vues/img/kitchen.png" height="130px"></a><?
										break;
									
									case 'bedroom':
										?><a href="../index.php?c=sensors&function=sensorsinroom&roomid=<?php echo $element['RoomId']; ?>"><img src="../vues/img/bedroom.png" height="130px"></a><?
										break;

									case 'diningroom':
										?><a href="../index.php?c=sensors&function=sensorsinroom&roomid=<?php echo $element['RoomId']; ?>"><img src="../vues/img/diningroom.png" height="130px"></a><?
										break;

									case 'bathroom':
										?><a href="../index.php?c=sensors&function=sensorsinroom&roomid=<?php echo $element['RoomId']; ?>"><img src="../vues/img/bathroom.png" height="130px"></a><?
										break;

									default:
										?><a href="../index.php?c=sensors&function=sensorsinroom&roomid=<?php echo $element['RoomId']; ?>"><img src="../vues/img/livingroom.png" height="130px"></a><?
										break;
								}
							?>
							</td></tr>
						<tr><td class="listtd"><?php echo $element['RoomType']; ?></td></tr>
					</table>
				</li>
				
				<?php } ?>
			</ul>
		</div>
		<br>

		
		<div class="roomlist">
			

			<table border='1' id="table1">
					<thead>
						<tr>
								<th>Room Type</th>
								<th>Room Id</th>
								<th>Room Size</th>
											
								<th>User's Id</th>
								<th>App Id</th>
							
						</tr>
				</thead>
				<tbody id="table2">	
				
			    <?php foreach ($liste as $element) { ?>
			    
			        <tr>
			        		<td>
								<?php echo $element['RoomType']; ?>
			            	</td>
			        		<td>
			        			<?php echo $element['RoomId']; ?>
			        		</td>
			        		<td>
			        			<?php echo $element['RoomSize']; ?>
			        		</td>
			        		<td>
			        			<?php echo $element['UserId']; ?>
			        		</td>
			        		<td>
			        			<?php echo $element['AppId']; ?>
			        		</td>
			        	</tr>
			    
			    <?php } ?>

				</tbody>
			</table>
		</div>
		<?php echo DisplayAlert($alerte); ?>

		<!-- add room -->
		<div>
			<h2>Add Room</h2>
	        <form id="fomr1" name="fomr1" action="../index.php?c=rooms&function=ajout" method="post">
	            <table id="mytable" width="580" border="1" align="center" cellpadding="0" cellspacing="0" >
	                 <tr>
	                    <td width="150" class="td01">Room ID</td>
	                    <td width="150" class="td01">Room Size</td> 
	                    <td width="150" class="td01">Room Type</td>
	                    <td width="150" class="td01">User Id</td>
	                    <td width="150" class="td01">App Id</td>

	                 </tr>
	                 <tr>
		                <td><input name="roomid[]" type="text" size="12"></td>
		                <td><input name="roomsize[]" type="text" size="12"></td>
	                 	<td><input name="roomtype[]" type="text" size="12"></td>
	                 	<td><input name="userid[]" type="text" size="12"></td>
	                 	<td><input name="appid[]" type="text" size="12"></td>
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
				 Td.innerHTML='<input name="roomid[]" type="text" size="12">';
				 Td = Tr.insertCell(Tr.cells.length);
				 Td.innerHTML='<input name="roomsize[]" type="text" size="12">';
				 Td = Tr.insertCell(Tr.cells.length);
				 Td.innerHTML='<input name="roomtype[]" type="text" size="12">';
				 Td = Tr.insertCell(Tr.cells.length);
				 Td.innerHTML='<input name="userid[]" type="text" size="12">';
				 Td = Tr.insertCell(Tr.cells.length);
				 Td.innerHTML='<input name="appid[]" type="text" size="12">';
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
		<p>
		<a href="vues/frontpage.php">Return to frontpage</a>
		</p>
	</div>
	
</div>
</body>