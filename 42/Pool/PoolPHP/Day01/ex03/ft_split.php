#!/usr/bin/php
<?PHP

function ft_split($str)
{
	$i = 0;
	$ok = strtok($str, " ");
	while ($ok !== false)
	{
		$tab[$i] = $ok;
		$ok = strtok(" ");
		$i++;
	}
	sort($tab);
	return ($tab);
}

?>
