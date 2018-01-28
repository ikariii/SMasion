<?php
/**
* View : Add a sensor
*/
?>

<h1><?= $title; ?></h1>

<?php echo DisplayAlert($alerte); ?>

<form method="POST" action="">
	
	<label>Name :</label>
	<input type="text"  name="name" />
	
	<label>Type :</label>
	<input type="text"  name="type" />

    <button type="submit" name="submit">Add</button>

</form>

<p><a href="index.php?cible=sensors">Return</a> | <a href="index.php">Home page</a></p>