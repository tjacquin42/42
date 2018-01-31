#!/usr/bin/PHP
<?PHP

while (true)
{
	echo "Entrez un nombre: ";
	$val = fgets(STDIN);
	if ($val == false)
	{
		echo "\n";
		exit;
	}
	$val2 = trim($val, " \n\t\r");
	if (is_numeric($val2))
	{
		$num = intval($val2);
		if ($num % 2 == 0)
		{
			echo "Le chiffre $num est Pair\n";
		}
		if ($num % 2 == 1 || $num % 2 == -1)
		{
			echo "Le chiffre $num est Impair\n";
		}
	}
	else
	{
		echo "'$val2' n'est pas un chiffre\n";
	}
}

?>
