<div id="shadow"></div>
<div class="loginForm" id="loginForm">
	<div id="header">
		<h4>Prijavite se</h4>
		<p onclick="hideLoginForm();">X</p>
	</div><br>
	<form method="post" action="getSession.php">
		<input type="text" name="mail" placeholder="Mail.."><br><br>
		<input type="password" name="password" placeholder="Šifra.."><br><br><br>
		<input id="login" type="submit" value="Prijavite se">
	</form>
</div>