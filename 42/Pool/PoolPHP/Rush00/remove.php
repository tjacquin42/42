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
		$title = "Effacer le compte";
		include('mods/html_start.php');
		include('mods/html_header.php');
		if ($_GET['a'] == "remove" && $_SESSION['auth'] != 1000)
		{
			$login = $_POST['login'];
			$passwd = $_POST['passwd'];
			$passwd = hash(md5, "steak" . $passwd . "hashed");
			if ($login == $_SESSION['login'])
			{
				$file = file_get_contents('private/usr/' .$login);
				$file = unserialize($file);
				if ($file[$login] == $passwd)
				{
					$_SESSION = array();
					unlink('private/usr/' .$login);
					echo "<p>Compte suprime.</p>";
				}
				else
				{
					echo "<p>mauvais mot de passe ou login</p>";
				}
			}
			else
			{
					echo "<p>mauvais mot de passe ou login</p>";
			}

		}
		else if ($_SESSION['auth'] != 1000)
		{
			echo "<h2>Effacer le compte</h2>";
			echo "<p>Vous etes sur le point d'effacer votre compte<br>
				si c'est ce aue vous souhaitez faire,
			remplissez le champ ci-dessous";
			echo "<form method=\"post\" action=\"?a=remove\">
				<input type=\"text\" name=\"login\" value=\"\"><br>
				<input type=\"password\" name=\"passwd\" value=\"\"><br>
				<input type=\"submit\" value=\"OK\">
				</form>";
		}
		else
		{
			echo "<p>Administrateur, 
				vous ne pouvez pas effacer votre compte 
				par mesure de securite";
		}
		include('mods/html_end.php');
	}
	else
	{
		ms_config_error();
	}
?>
