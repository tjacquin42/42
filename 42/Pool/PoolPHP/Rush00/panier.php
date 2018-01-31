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
		$title = "Panier";
		include('mods/html_start.php');
		include('mods/html_header.php');
		if ($_SESSION['login'] != "" && $_SESSION['auth'] != 1000 && $_GET['a'] != "")
		{
			$item = $_GET['a'];
			$file = file_get_contents('private/film');
			$file = unserialize($file);
			if ($file[$item] != "")
			{
				$file = preg_split("/\@/", $file[$item]);
				$user = file_get_contents('private/usr/' . $_SESSION['login']);
				$user = unserialize($user);
				$user['panier'] .= $item . "@";
				$user['cost'] += $file[4];
				$user = serialize($user);
				file_put_contents('private/usr/' . $_SESSION['login'], $user);
			}
		}
		else
		{
			$file = file_get_contents('private/film');
			$file = unserialize($file);
			$user = file_get_contents('private/usr/' . $_SESSION['login']);
			$user = unserialize($user);
			$user = preg_split("/\@/", $user['panier']);
			
			$i = 0;
			while($user[$i] != NULL)
			{
				$v = preg_split("/\@/", $file[$i]);
				echo "<table><tr><td>
					<td style=\"width: 150px;\">" .$v[0] . "</td><td><img style=\"width: 150px; height:60px;\" src=\"".$v[2]."\"></td>"; echo "</td><td style=\"width: 150px;\">prix: " .$v[4] . " $</td>
						</tr>
					</table>";
				$i++;
			}
			echo "<a href=\"panier.php?a=buy\" title=\"Acheter\">Acheter</a>";	
		}
		include('mods/html_end.php');
	}
	else
	{
		ms_config_error();
	}
?>
