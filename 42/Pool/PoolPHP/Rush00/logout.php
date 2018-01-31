<?php
	$config_ret = 0;
	if (file_exists('config.php') == TRUE)
	{
		include('config.php');
		$config_ret = ms_config();
	}
?>
<?php
	$_SESSION = array()
?>
<meta http-equiv="refresh" content="0;index.php">
