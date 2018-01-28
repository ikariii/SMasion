<?php 
/**
* Vue : liste of registered users
*/
?>

<h1><?= $title; ?></h1>

<p><?= $entete; ?></p>


<table>
	<thead>
		<tr>

			<th>Name</th>
			<th>Password</th>
		</tr>
	</thead>
	<tbody>	
	
    <?php foreach ($liste as $element) { ?>
    
        <tr>
        		<td>
				<?php echo $element['username']; ?>
            	</td>
        		<td>
        			<?php echo $element['password']; ?>
        		</td>
        	</tr>
    
    <?php } ?>

	</tbody>
</table>


<?php echo DisplayAlert($alerte); ?>

<p>
	<a href="index.php">Return</a>
</p>