<?php
require_once 'getSession.php';
$location = 'img/'; 
$file = fopen('novosti.csv', 'a+');
$file_name=$_FILES['picture']['name'];
$time = time();
$file_temp=$_FILES['picture']['name'];
$extension = explode('.', $file_name);
$extension = strtolower(end($extension));
$file_temp = $_FILES['picture']['tmp_name'];
$fileEnc = md5_file($file_temp) . time(). '.'.$extension;
move_uploaded_file($file_temp, $location.$fileEnc);
$array = array($_POST['header'], $_POST['content'], $fileEnc, $time);
fputcsv($file, $array);
header('Location: index.php');
exit();
/*?>
<?php
	require_once 'getSession.php';
	$location = 'img/'; 
	$file = fopen('novosti.csv', 'a+');
	if(!empty($_POST['header']) and !empty($_POST['content']) and !empty($_FILES['picture']['name'])){
		$file_name=$_FILES['picture']['name'];
		$time = time();
		$file_temp=$_FILES['picture']['name'];
		$extension = explode('.', $file_name);
		$extension = strtolower(end($extension));
		$file_temp = $_FILES['picture']['tmp_name'];
		$fileEnc = md5_file($file_temp) . time(). '.'.$extension;
		move_uploaded_file($file_temp, $location.$fileEnc);
		$array = array($_POST['header'], $_POST['content'], $fileEnc, $time);
		fputcsv($file, $array);
		header('Location: index.php');
		exit();
	}
?>*/