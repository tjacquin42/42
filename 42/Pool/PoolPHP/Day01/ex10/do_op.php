#!/usr/bin/php
<?PHP

if ($argc == 4)
{
	if (trim($argv[2]) == "+")
	{
		$result = (trim($argv[1]) + trim($argv[3]));
		echo $result,"\n";
	}
	else if (trim($argv[2]) == "-")
	{
		$result = (trim($argv[1]) - trim($argv[3]));
		echo $result,"\n";
	}
	else if (trim($argv[2]) == "*")
	{
		$result = (trim($argv[1]) * trim($argv[3]));
		echo $result,"\n";
	}
	else if (trim($argv[2]) == "/")
	{
		$result = (trim($argv[1]) / trim($argv[3]));
		echo $result,"\n";
	}
	else if ($argv[2] == "%")
	{
		$result = (trim($argv[1]) % trim($argv[3]));
		echo $result,"\n";
	}
}
else
{
	echo "Incorrect Parameters\n";
}

?>
