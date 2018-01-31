#!/usr/bin/php
<?PHP

//function totab($ttab, $z, $stri)
//{
//	$ttab[$z] = $stri;
//	$stri = strtok(" ");
//	$n++;
//}

$i = 1;
$c = 0;
$n = 0;
$o = 0;

while ($i < $argc)
{
	$ok = trim($argv[$i]);
	$str = strtok($ok, " ");
	while ($str !== false)
	{
		if (ctype_alpha($str))
		{
			$alp[$c] = $str;
			$str = strtok(" ");
			$c++;
		}
		else if (ctype_digit($str))
		{
			$dig[$n] = $str;
			$str = strtok(" ");
			$n++;
		}
		else
		{
			$oth[$o] = $str;
			$str = strtok(" ");
			$o++;
		}
	}
	$i++;
}

$save_c = $c;
$save_n = $n;
$save_o = $o;
$c = 0;
$n = 0;
$o = 0;

while ($c < $save_c)
{
	echo $alp[$c];
	$c++;
	echo "\n";
}

while ($n < $save_n)
{
	echo $dig[$n];
	$n++;
	echo "\n";
}

while ($o < $save_o)
{
	echo $oth[$o];
	$o++;
	echo "\n";
}

?>
