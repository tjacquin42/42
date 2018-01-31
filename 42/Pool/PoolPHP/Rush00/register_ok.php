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
		$login = trim($_POST['login']);
		$passwd = trim($_POST['passwd']);
		$submit = $_POST['submit'];

		if ($login != "" && $passwd != "" && $submit == "s'inscrire")
		{
			if (file_exists('private/usr/' . $login) == TRUE)
			{
				$_SESSION['msg'] = "ce nom est deja pris";
			}
			else
			{
				$file = unserialize(NULL);
				$file[$login] = hash(md5, "steak" . $passwd . "hashed");
				$file['panier'] = NULL;
				$file['auth'] = NULL;
				$file['cost'] = NULL;
				$file['facture'] = NULL;
				$file = serialize($file);
				file_put_contents('private/usr/' .$login, $file);
				$_SESSION['msg'] = "inscription reussie";
				$_SESSION['login'] = $login;
			}
		}
		else
		{
			$_SESSION['msg'] = "Veuillez remplir les champs";
		}
	}
	else
	{
		ms_config_error();
	}
?>
<meta http-equiv="refresh" content="0;register.php">
