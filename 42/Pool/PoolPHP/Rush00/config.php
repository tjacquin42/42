<?php
	function	ms_config()
	{
		session_start();
		if (file_exists('private/install') == FALSE)
		{
			if (file_exists('install.php') == TRUE)
			{
				require_once('install.php');
				ms_install();
			}
			else
			{
				return (0);
			}
		}
		if (file_exists('mods/html_start.php') == FALSE)
			return (0);
		if (file_exists('mods/html_header.php') == FALSE)
			return (0);
		if (file_exists('mods/html_end.php') == FALSE)
			return (0);
		if (file_exists('admin.php') == FALSE)
			return (0);
		if (file_exists('login.php') == FALSE)
			return (0);
		if (file_exists('register.php') == FALSE)
			return (0);
		if (file_exists('register_ok.php') == FALSE)
			return (0);
		if (file_exists('logout.php') == FALSE)
			return (0);
		if (file_exists('shop.php') == FALSE)
			return (0);
		return (1);
	}
?>
<?php
	function	ms_config_error()
	{
		echo "<h1>CONFIG ERROR</h1>";
		echo "<p>Le fichier de config a rencontre une erreure.</p>";
	}
?>
