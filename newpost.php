<?php
include 'db.php';
$user = new User();
if(isset($_POST['header']) && isset($_POST['content'])){
	if($_POST['glupost'] != 1){
		//dozvoli
		$user->insertStatus($_POST['header'],$_POST['content']);
	}else{
		echo $glupost = 1;
		$user->insertStatus($_POST['header'],$_POST['content'], $glupost);
	}
	//$user->insertStatus($_POST['header'],$_POST['content']);
	Redirect::to('index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		input{
			width: 300px;
		}
	</style>
</head>
<body>
<form method="post" enctype="multipart/form-data">
	<input type="text" name="header" id="header" placeholder="Naslov.."><br><br>
	<textarea rows="10" cols="40" name="content" placeholder="Sadržaj.."> </textarea><br><br>
	<input type="text" name="glupost" placeholder="Za zabranu komentara unesite 1"><br><br>
	<input type="submit" value="Unesi">
</form>
</body>
</html>