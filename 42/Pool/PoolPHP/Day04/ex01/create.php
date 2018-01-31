<?PHP

if ($_POST['login'] && $_POST['passwd'] && $_POST['submit'] && $_POST['submit'] === "OK")
{
	$new['login'] = $_POST['login'];
	$new['passwd'] = hash("whirlpool", $_POST['passwd']);

	if (!file_exists('../private'))
		mkdir('../private');
	if (!file_exists('../private/passwd'))
		file_put_contents('../private/passwd', null);

	$error = 0;
	$account = unserialize(file_get_contents('../private/passwd'));
	if ($account)
	{
		foreach ($account as $exist)
		{
			if ($exist['login'] === $_POST['login'])
			{
				echo "ERROR\n";
				$error = 1;
			}
		}
	}
	if ($error === 0)
	{
		$account[] = $new;
		file_put_contents('../private/passwd', serialize($account));
		echo "OK\n";
	}
}
else
{
	echo "ERROR\n";
}

?>
