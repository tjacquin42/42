#!/usr/bin/php
<?PHP

if ($argc < 2)
	exit;
$i = 0;
$ok = $argv[1];
$tab = trim($ok);
preg_match_all("/[!-}][ ]?/", $tab, $ret);
$a = count($ret[0]);

while ($i < $a)
{
	echo $ret[0][$i];
	$i++;
}
echo "\n";

?>
