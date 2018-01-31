#!/usr/bin/php
<?PHP

$i = 0;
$str = strtok($argv[1], " ");
while ($str !== false)
{
	$tab[$i] = $str;
	$str = strtok(" ");
	$i++;
}

$save = $i;
$i = 1;
while ($i < $save)
{
	echo $tab[$i];
	echo " ";
	$i++;
}
echo $tab[0],"\n";

?>
