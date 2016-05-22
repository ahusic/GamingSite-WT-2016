<link rel="stylesheet" type="text/css" href="css/menu.css">
<meta charset="UTF-8">
<div id="navBar">
	<div id="sort">
		<form action="" method="POST">
			<select name="filter">
				<option value="today">Današnje novosti</option>
				<option value="thisweek">Novosti ove sedmice</option>
				<option value="thismonth">Novosti ovog mjeseca</option>
				<option value="allnews">Sve novosti</option>
				<option value="abecedno">Prikaži abecedno</option>
			</select> 
			<input type="submit" value="Filtriraj">
		</form>
	</div>
	<div id="search">
		<form>
			<input type="text" placeholder="Pretražite..">
		</form>
	</div>
</div>
<div id="menu">
	<ul>
		<li class="header"><h4>MENU</h4></li>
		<li class="liItem"><a href="index.php">Home</a></li>
		<li class="liItem"><a href="pc.php">PC</a></li>
		<li class="liItem"><a href="ps.php">PS4</a></li>
		<li class="liItem"><a href="android.php">Android</a></li>
		<li class="liItem lastMenuItem"><a href="contact.php">Kontakt</a></li>
		<li class="login"><a onclick="showLoginForm();" href="#">Prijavite se</a></li>
		<?php 
			if(loggedIN()){ ?>
				<li class="login"><a href="newpost.php">Novi post</a></li>
				<li class="login"><a href="try.php">Ajax glupost</a></li>
		<?php	}
		?>
	</ul>
	<!-- U slučaju za social networks icons
	<div id="menuIcons">
		<ul>
			<li><img src=""></li>
			<li><img src=""></li>
			<li><img src=""></li>
			<li><img src=""></li>
		</ul>
	</div>
	-->
	<?php if(loggedIN()){ ?>
		<div id="logout">
			<a href="logout.php">Odjavite se</a>
		</div>
	<?php	} ?>
</div>