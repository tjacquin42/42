<?PHP

switch ($_GET['action'])
{
case ("set"):
	if ($GET['name'] && $_GET['value']);
		setcookie($_GET['name'], $_GET['value'], 0);
		break;
case ("get"):
	if (($_GET['name'] && $_COOKIE[$_GET['name']]) && !$_GET['value'])
		echo $_COOKIE[$_GET['name']],"\n";
		break;
case ("del"):
	if ($_GET['name'] && !$_GET['value'])
		setcookie($_GET['name'], "", 42);
		break;
}

?>
