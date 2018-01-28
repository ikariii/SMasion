<?php 
/**
* Vue : list of registered sensors
*/
?>

<h1><?= $title; ?></h1>

<p><?= $entete; ?></p>


<table>
	<thead>
		<tr>

			<th>Name</th>
			<th>Type</th>
		</tr>
	</thead>
	<tbody>	
	
    <?php foreach ($liste as $element) { ?>
    
        <tr>
        		<td>
				<?php echo $element['name']; ?>
            	</td>
        		<td>
        			<?php echo $element['type']; ?>
        		</td>
        	</tr>
    
    <?php } ?>

	</tbody>
</table>


<?php echo DisplayAlert($alerte); ?>


<p><a href="index.php?cible=sensors&fonction=ajout">Add a sensor</a> | <a href="index.php?cible=sensors&fonction=search">Search for a sensor</a> | <a href="index.php">Home Page</a></p>
