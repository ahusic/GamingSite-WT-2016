<?php
function loggedIN(){
	if(isset($_SESSION['mail'])){
		return true;
	}return false;
}
function failed(){
	if(isset($_SESSION['fail'])){
		if($_SESSION['fail'] == 'Sorry') return true;
	}
	return false;
}
function numRows(){
	if(isset($_SESSION['rows'])) return $_SESSION['rows'];
	return 0;
}
error_reporting(0);
session_start();
if(!empty($_POST['mail']) && !empty($_POST['password'])){
	//Nije mi bilo jasno oko \n i space-a, neće da prođe if($mail == $newMail){setSession..}
	//Pa sam morao ovako, na malo duži način :D but it works :D
	$mail = $_POST['mail'];
	$password = md5($_POST['password']);
	$file = fopen("user.txt", "r") or die("Neuspjelo otvaranje datoteke user.txt");
	$i=0;
	$newMail='';
	$newPass='';
	while(!feof($file)){
		$k=0; $f=0;
		if($i % 2 ===0){
			$newMail = fgets($file);
		}else $newPass = fgets($file);
		for($j = 0; $j < strlen($mail); $j++){
			if($mail[$j] == $newMail[$j]) $k++;
		}
		if(!empty($newPass)){
			for($j = 0; $j < strlen($password); $j++){
				if($password[$j] == $newPass[$j]) $f++;
			}
		}
		if($password == $newPass) echo "string";
		if($k == strlen($mail) && $f == strlen($password)){
			$_SESSION['mail'] = $mail;
			$_SESSION['fail'] = '';
			header('Location: index.php');
			exit();
		}
		$i++; 
	}
	$_SESSION['fail'] = 'Sorry';
	header('Location: index.php');
	exit();
}