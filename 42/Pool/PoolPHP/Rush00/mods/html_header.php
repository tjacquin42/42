<?php
function	ms_header_logged()
{
	echo "<b>Bonjour " . $_SESSION['login'] . "</b><br>\n";
	if ($_SESSION['auth'] == 1000)
	{
		echo "<a href=\"admin.php\">Administration</a><br>
		<a href=\"logout.php\">Deconnection</a>";
	}
	else
	{
		echo "<a href=\"panier.php\">Panier</a><br>
		<a href=\"remove.php\">Efffacer compte</a><br>
		<a href=\"logout.php\">Deconnection</a>";
	}
}

function	ms_header_not_logged()
{
	echo "<form method=\"post\" action=\"login.php\">
		<input type=\"text\" name=\"login\" placeholder=\"login\" value=\"\"><br>
		<input type=\"password\" name=\"password\" placeholder=\"password\" value=\"\">
		<input type=\"submit\" value=\"OK\"><br>
		<span>Pas encore inscrit ?</span><br>
		<a href=\"register.php\">inscrivez-vous !</a></form>";
}
?>
<div id="header">
<div class="menu">
	<h3>articles</h3>
	<a href="shop.php">FILMS</a>
</div>
<div class="header"><a href="index.php">Minishop</a></div>
<div class="module">
<?php
	if ($_SESSION['login'] != NULL)
		ms_header_logged();
	else
		ms_header_not_logged();
?>
</div>
</div>
<div id="body">
