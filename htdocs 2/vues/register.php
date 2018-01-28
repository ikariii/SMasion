<?php 
/**
* Vue : register a new user
*/
?>

<h1><?= $title; ?></h1>

<?php echo DisplayAlert($alerte); ?>

<form method="POST" action="">
	
	<label>Pseudo :</label>
	<input type="text"  name="username" />
	
	<label>Password :</label>
	<input type="password"  name="password"  />

    <button type="submit" name="submit">Register</button>

</form>

<p><a href="index.php">Return</a></p>