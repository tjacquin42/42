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
		if ($_SESSION['auth'] == 1000)
		{
			$title = "administration";
			include('mods/html_start.php');
			include('mods/html_header.php');
			{
				echo "<div id=\"body\">
					<p> Ajouter un nouvel article</p>
					<form method=\"post\" action=\"shop.php?a=add\">
					<input type=\"text\" name=\"name\" placeholder=\"NOM\" value=\"\"><br>
					<input type=\"text\" name=\"cat\" placeholder=\"CATEGORIE\" value=\"\"><br>
					<input type=\"text\" name=\"img\" placeholder=\"LIEN IMAGE\" value=\"\"><br>
<textarea type=\"text\" name=\"desc\" placeholder=\"DESCRIPTION\"value=\"\"></textarea>
					<br><input type=\"text\" name=\"price\" placeholder=\"PRICE\" value=\"\">
					<br><input type=\"submit\" name=\"submit\" value=\"OK\">
					</form>
					</div>";
			}
			include('mods/html_end.php');
		}
		else
		{
			echo "<h1>Not Found</h1>";
			echo "<p>The requested URL /rush00/admi2n.php was not found on this server.</p>";
		}
	}
?>
