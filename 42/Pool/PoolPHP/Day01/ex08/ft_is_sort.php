#!/usr/bin/php
<?PHP

function ft_is_sort($tab)
{
	$origin = $tab;
	sort($origin);
	$t = 0;
	while ($tab !== $origin)
	{
		if ($origin[$t] != $draw[$t])
		{
			return (false);
			exit;
		}
		echo $tab[$t];
		$t++;
	}
	return (true);
}
?>
