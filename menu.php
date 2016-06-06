<?php 
if(isset($_POST['username']) && isset($_POST['password'])){
	$user->login($_POST['username'], $_POST['password']);
}
?>

<link rel="stylesheet" type="text/css" href="css/menu.css">
<meta charset="UTF-8">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
		$(document).ready(function(){
			setInterval(function(){
				$("#justNotifiMe").load("numofNot.php");
			},50);
		});
		function deleteNotification(){
			document.getElementById('notifikacije').style.display='block';
			$("#notifikacije").load("displayall.php");
		}
	</script>
<div id="navBar">
	<div id="search">
		<form>
			<!--<input type="text" placeholder="Pretražite.."> -->
		</form>
	</div>
	<a id="userProfileLink" href="profile.php?user=<?php $user->username(); ?>">
		<?php $user->username(); ?>
	</a>
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
		if($user->isLoggedIn()){ ?>
			<li class="login"><a href="newpost.php">Novi post</a></li>
		<?php 
			if($user->isAdmin()){ ?>
				<li class="login"><a href="listusers.php">Svi useri</a></li>
		<?php	}

		} ?>
		
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
	<div id="logout">
		<a href="logout.php">Odjavite se</a>
	</div>
</div>
<span onclick="deleteNotification();" id="justNotifiMe">0</span>
<div id="notifikacije">

</div>
<div id="shadow"></div>
<div class="loginForm" id="loginForm">
	<div id="header">
		<h4>Prijavite se</h4>
		<p onclick="hideLoginForm();">X</p>
	</div><br>
	<form method="post" action="">
		<input type="text" name="username" placeholder="username.."><br><br>
		<input type="password" name="password" placeholder="password.."><br><br><br>
		<input id="login" type="submit" value="Prijavite se">
	</form>
</div>