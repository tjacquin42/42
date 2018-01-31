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
		$passwd = trim($_POST['password']);
		if ($login != "" && $passwd != "" && file_exists('private/usr/' . $login) == TRUE)
		{
			$file = file_get_contents('private/usr/' . $login);
			$file = unserialize($file);
			$passwd = hash(md5, "steak" . $passwd . "hashed");
			if ($file[$login] == $passwd)
			{
				$_SESSION['login'] = $login;
				$_SESSION['auth'] = $file['auth'];
			}
		}
	}
	else
	{
		ms_config_error();
	}
?>
<meta http-equiv="refresh" content="0;index.php">
