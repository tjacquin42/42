<?php
	$config_ret = 0;
	if (file_exists('config.php') == TRUE)
	{
		include('config.php');
		$config_ret = ms_config();
	}
?>
<?php
	if ($config_ret === 1)
	{
		$title = "Home";
		include('mods/html_start.php');
		include('mods/html_header.php');
		echo "<h2>Presentation:</h2>";
		echo "<p>Bienvenue sur notre site e-commerce.<br>
		vous pouvez faire vos courses ici, <br>
		mais pour cela il vous faudra passer de terribles epreuves comme;<br>
		vous enrregistrer, vous connecter, ajouter des articles a votre 
		panier,<br>
		MAIS SURTOUT : <b><i>faire crier la carte bancaire a l'achat !</i></b></p>";
		include('mods/html_end.php');
	}
	else
	{
		ms_config_error();
	}
?>
