<?php 
include 'class.php';
$user = new User();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<script type="text/javascript" src="js/app.js"></script>
</head>
<body>
<?php include 'menu.php';?>

<section>
<table>
	<?php 
		$user->ispisiSveVijestiALI(Input::get('user'));
	?>
</table>
</section>

</body>
</html>