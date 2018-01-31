<?PHP

if ($_POST['login'] && $_POST['oldpw'] && $_POST['newpw'] && $_POST['submit'] && $_POST['submit'] === "OK")
{
	$account = unserialize(file_get_contents('../private/passwd'));
	if ($account)
	{
		$exist = 0;
		foreach ($account as $ok => $verif)
		{
			if ($verif['login'] === $_POST['login'] && $verif['passwd'] === hash('whirlpool', $_POST['oldpw']))
			{
				$account[$ok]['passwd'] =  hash('whirlpool', $_POST['newpw']);
				$exist = 1;
			}
		}
		if ($exist === 1)
		{
			file_put_contents('../private/passwd', serialize($account));
			echo "OK\n";
		} 
		else
		{
			echo "ERROR\n";
		}
	} 
	else 
	{
		echo "ERROR\n";
	}
} 
else 
{
	echo "ERROR\n";
}

?>
