<?php
$file = fopen('insertba.csv', 'a+');
if(isset($_POST['ajdi']) and isset($_POST['number'])){
	$array = array($_POST['ajdi'], $_POST['number']);
	fputcsv($file, $array);
}
