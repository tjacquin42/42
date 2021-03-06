#!/usr/bin/php
<?PHP

if ($argc < 2)
	exit;

$jour = Array(1=>"lundi", 2=>"mardi", 3=>"mercredi", 4=>"jeudi", 5=>"vendredi", 6=>"samedi", 7=>"dimanche");
$semaine = Array(1=>"janvier", 2=>"février", 3=>"mars", 4=>"avril", 5=>"mai", 6=>"juin", 7=>"juillet", 8=>"aout", 9=>"septembre", 10=>"octobre", 11=>"novembre", 12=>"décembre");

$date = explode(" ", $argv[1]);
if (count($date) != 5 ||
	preg_match("/^[1-9]$|^0[1-9]$|^[1-2][0-9]$|^3[0-1]$/", $date[1], $date[1]) === 0 ||
	preg_match("/^[0-9]{4}$/", $date[3], $date[3]) === 0 ||
	preg_match("/^([0-1][0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$/", $date[4], $date[4]) === 0)
{
	echo "Wrong Format","\n";
	exit;
}

$date[0] = array_search(lcfirst($date[0]), $jour);
if ($date[0] == false)
{
	echo "Wrong Format","\n";
	exit;
}

$date[2] = array_search(lcfirst($date[2]), $semaine);
if ($date[2] == false)
{
	echo "Wrong Format","\n";
	exit;
}

date_default_timezone_set('Europe/Paris');
$epoch = mktime($date[4][1], $date[4][2], $date[4][3], $date[2], $date[1][0], $date[3][0]);

if (date("N", $epoch) == $date[0])
	echo $epoch, "\n";
else
{
	echo "Wrong Format","\n";
	exit;
}

?>
