<?php 
$user = new User();
if(isset($_POST['username']) && isset($_POST['password'])){
	$user->login($_POST['username'], $_POST['password']);
}
if($user->isLoggedIn()){
	echo "string";
}
?>

