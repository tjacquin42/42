#!/usr/bin/php
<?PHP

$i = 1;
$t = 0;
while ($i < $argc)
{
	$ok = trim($argv[$i]);
	$str = strtok($ok, " ");
	while ($str !== false)
	{
		$tab[$t] = $str;
		$str = strtok(" ");
		$t++;
	}
	$i++;
}
sort($tab);
$save = $t;
$t = 0;
while ($t < $save)
{
	echo $tab[$t];
	$t++;
	echo "\n";
}

?>
