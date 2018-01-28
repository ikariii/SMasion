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
	<div class="menu_background"></div>
	<div class="menu">
		<ul>
			<li>User List</li>
		</ul>
	</div>
	<!-- content -->
	<div class="content_background"></div>
	<div class="content">
		<div class="listtitle">
				<h1>User List</h1>
		</div>
		
		<div class="userlist">
			

			<table border='1' id="table1">
					<thead>
						<tr>
								<th>UserId</th>
								<th>Usesrname</th>		
								<th>Mail</th>
								<th>AppNo</th>
								<th></th>
						</tr>
				</thead>
				<tbody id="table2">	
				
			    <?php foreach ($liste as $element) { ?>
			    
			        <tr>
			        		<td>
								<?php echo $element['UserId']; ?>
			            	</td>
			        		<td>
			        			<?php echo $element['Username']; ?>
			        		</td>
			        		<td>
			        			<?php echo $element['Mail']; ?>
			        		</td>
			        		<td>
			        			<?php echo $element['AppNo']; ?>
			        		</td>
			        		<td>
			        			<a href="../index.php?c=admin&function=deluser&userid=<?php echo $element['UserId']; ?>">delete</a>
			        		</td>
			        	</tr>
			    
			    <?php } ?>

				</tbody>
			</table>
	</div>


	<?php echo DisplayAlert($alerte); ?>

</div>
</body><h1>welcome admin!</h1>