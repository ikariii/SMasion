<?php 
/**
 * Vue : Search for sensors by type
 */
?>


<h1><?= $title; ?></h1>

<p><?= $entete; ?></p>

<form method="POST" action="">
	
	<label>Type de sensor :</label>
	<input type="text"  name="type" />

    <button type="submit" name="submit">Search</button>

</form>

<?php  if(!empty($liste)) { ?>
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
<?php } ?>


<?php echo DisplayAlert($alerte); ?>


<p><a href="index.php?cible=sensors">Return</a> | <a href="index.php">Home Page</a></p>
