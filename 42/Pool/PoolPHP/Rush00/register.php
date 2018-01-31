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
		$title = "S'inscrire";
		include('mods/html_start.php');
		include('mods/html_header.php');
		if ($_SESSION['login'] == NULL && $_SESSION['msg'] == "")
		{
			echo "<p>Bienvenue sur notre petit sie e-commerce,
				remplissez les champs suivants pour vous inscrire.</p><br/>
					
				<form method=\"post\" action=\"register_ok.php\">
				<input type=\"text\" name=\"login\" placeholder=\"LOGIN\" value=\"\"><br>
				<input type=\"password\" name=\"passwd\" placeholder=\"PASSWORD\" value=\"\"><br>
				<input type=\"submit\" name=\"submit\" value=\"s'inscrire\"></form>";
		}
		else
		{
			echo $_SESSION['msg'] ."<br><a href=\"index.php\">retour a l'acceuil</a>";
			$_SESSION['msg'] = "";
		}
		include('mods/html_end.php');
	}
	else
	{
		ms_config_error();
	}
?>
