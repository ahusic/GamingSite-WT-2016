<?php
include 'db.php';
$user = new User();
if(isset($_POST['updateName'])){
	$user->updateUser($_POST['updateId'],$_POST['updateName'],$_POST['updateSurname']);
}
include 'menu.php';
?>

<div style="position:absolute; top:100px; left:350px;">
	Lista usera :<br>
	<?php $user->writeUsers(); ?>
</div>