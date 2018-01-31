<?php
	function	ms_install()
	{
		mkdir('private');
		mkdir('private/usr');
		file_put_contents('private/usr/super_admin', 'a:3:{s:11:"super_admin";s:32:"ab12327881aaf12a0204f6fa50cabc13";s:6:"panier";N;s:4:"auth";i:1000;}');
		file_put_contents('private/film', 'a:3:{i:0;s:115:"Wow@fiction@http://static.mnium.org/images/contenu/actus/wow/film/wow_film_warcraft_verdict_01.jpg@wow, en film.@15";i:1;s:98:"My little pony@fun@http://i.ytimg.com/vi/cTor8gJj3s8/maxresdefault.jpg@My little pony (le film)@15";i:2;s:157:"CA@horreur@http://static.pix-geeks.com/2017/03/ca-le-premier-trailer-annonce-un-film-terrifiant-29857-600x315.jpeg@Un film qui fait peur, avec des clowns.@15";}');
		file_put_contents('private/install', "");
	}
?>
