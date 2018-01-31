<?php
	$config_ret = 0;
	if (file_exists('config.php') == TRUE)
	{
		include('config.php');
		$config_ret = ms_config();
	}
?>
<?php
	function	ms_body_film($v)
	{
		$path = "?c=" . $v[1];
		echo "<table>
			</th><b>" . $v[0] . "</b></th>
			<tr>
			<td><img src=\"" . $v[2] . "\" alt=\"image de " . $v[0] . "\"></td>
			<td class=\"module\">
			<p>" . $v[3] . "</p><br>";
			if ($_SESSION['login'] != ""  && $_SESSION['auth'] != 1000)
				echo "<a href=\"panier.php?a=".$v[0]."\">[ajouter au panier] </a>";
			echo "<a href=\"$path\"> [plus]</a>
			</td>
			<tr/>
			</table><hr>";
	}
?>
<?php
	if ($config_ret === 1)
	{
		$title = "Shop";
		include('mods/html_start.php');
		include('mods/html_header.php');
		{
			if ($_GET['c'] == "")
				$cat = "tout";
			else
				$cat = $_GET['c'];
			echo "<h2>Liste des films</h2>";
			echo "<p>categorie: " . $cat . "</p>\n";
			if ($_GET['a'] == "add")
			{
				$name = trim($_POST['name']);
				$cat = trim($_POST['cat']);
				$img = trim($_POST['img']);
				$desc = trim($_POST['desc']);
				$price = trim($_POST['price']);
				if ($name != "" && $cat != "" && $img != "" && $desc !="" && $price != "")
				{
					if (file_exists('private/film') == TRUE)
						$file = file_get_contents('private/film');
					$file = unserialize($file);
					$name .= "@" . $cat . "@" . $img . "@" . $desc . "@" . $price;
					$file[] = $name;
					$file = serialize($file);
					file_put_contents('private/film', $file);
				}
			}
			else
			{
				$file = file_get_contents('private/film');
				$file = unserialize($file);
				foreach ($file as $key => $value)
				{
					if ($value != "")
					{
						$v = preg_split("/\@/", $value);
						if ($_GET['c'] != "" && $v[1] == $_GET['c'])
						{
							ms_body_film($v);
						}
						else if($_GET['c'] == "")
						{
							ms_body_film($v);
						}
					}	
				}
			}
		}
		include('mods/html_end.php');
	}
	else
	{
		ms_config_error();
	}
?>
