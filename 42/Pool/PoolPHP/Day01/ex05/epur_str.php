#!/usr/bin/php
<?PHP

if ($argc == 2)
{
	$i = 0;
	$aff = strtok($argv[1], " ");
	while ($aff !== false)
	{
		$tab[$i] = $aff;
		$aff = strtok(" ");
		$i++;
	}
}

$save = $i;
$i = 0;
while ($i < $save)
{
	echo $tab[$i];
	if ($i < $save - 1)
		echo " ";
	$i++;
}
echo "\n";

?>
