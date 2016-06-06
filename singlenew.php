<?php
include 'class.php';
$user = new User();
if(isset($_POST['comment'])){
	$user->commentStatus($_POST['comment'], Input::get('id'));
}
if(isset($_POST['commentComment'])){
	$user->comentComent($_POST['commentComment'], $_POST['idOFComent']);
}
if(isset($_POST['delete'])){
	$user->deleteStatus($_POST['delete']);
}
if(isset($_POST['nemaime'])){
	$user->deleteComent($_POST['nemaime'], Input::get('id'));

}
if(isset($_POST['zabrani'])){
	$user->zabrani(Input::get('id'));
}
?>
<link rel="stylesheet" type="text/css" href="css/single.css">
<?php include 'menu.php';?>
<table>
	<tr>
		<?php $user->ispisiPosebnuVijest(Input::get('id')); ?>
	</tr>
</table>