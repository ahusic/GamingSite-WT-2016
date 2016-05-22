<?php require_once 'getSession.php'; 
$array = [];
$array1 = [];
$file = fopen('novosti.csv', 'r+');
$nesto = '';
$x=0; $y=0; $z=0; $e=0; $f=0;
while(!feof($file)){
	$text = fgetcsv($file);
	$y=0; $f=0;
	$array[$x][$y++] = $text[0];
	$array[$x][$y++] = $text[1];
	$array[$x][$y++] = $text[2];
	$array[$x++][$y] = $text[3];
	$array1[$e][$f++] = $text[0];
	$array1[$e][$f++] = $text[1];
	$array1[$e][$f++] = $text[2];
	$array1[$e++][$f] = $text[3];
	$z++;
}
if(isset($_POST['filter'])) $nesto = $_POST['filter'];
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
<?php include 'menu.php'; include 'login.php';?>

<section>
<table>
	<?php
	if(failed()){ ?>
		<script type="text/javascript">
			alert("Zao nam je, pogresni podaci.");
		</script>
	<?php }
	if($nesto == 'abecedno'){
		for($i = 0; $i<$z-1; $i++){
			for($j = 0; $j<$z-$i-1;$j++){
				if($array1[$j][0] > $array1[$j+1][0]){
					$temp = $array1[$j][0];
					$array1[$j][0] = $array1[$j+1][0];
					$array1[$j+1][0] = $temp;
					
					
				}
			}
		}
		for($i = $z-2; $i >=0; $i--){ 
			$time = time();
			$timeOf = (int)$array1[$i][3]; 
			$sec = $time - $timeOf;
			$hours = $sec/3600;
			$hours = (int)$hours;
			$minutes = ($sec - ($hours * 3600))/60;
			$minutes = (int)$minutes;
			?>
				<tr>
				<td class="picture">
					<img src="img/<?php echo $array1[$i][2]; ?>">
				</td>
				<td>
					<h4><?php echo $array1[$i][0].'   '; ?><span>
					<?php
					if($minutes == 0 && $hours == 0){
						echo "Novost je objavljena prije nekoliko sekundi.";
					}else if($hours == 0 && $minutes != 0){
						if($minutes==1) {
							echo "Novost je objavljena prije jedne minute";
							//continue;
						}else if($minutes>1 && $minutes < 6){
							echo "Novost je objavljena prije ".(int)$minutes." minute";
						}else echo "Novost je objavljena prije ".(int)$minutes." minuta";
					}else if($hours != 0 && $hours < 23){
						if($hours == 1){
							echo "Novost je objavljena prije jednog sata";
						}else if($hours == 2) echo "Novost je objavljena prije 2 sata";
						else echo "Novost je objavljena prije ".(int)$hours." sati";
					}else if($hours > 23 && $hours < 168){
						if($hours < 48) echo "Novost je objavljena prije jednog dana";
						else echo "Novost je objavljena prije".((int)$hours*24)." dana";
					}else if($hours < 672){
						if($hours < 168) echo "Novost je objavljena prije jedne sedmice";
						else if($hours < 336) echo "Novost je objavljena prije 2 sedmice";
						else if($hours < 504) echo "Novost je objavljena prije 3 sedmice";
						else echo "Novost je objavljena prije 4 sedmice";
					}else echo $array1[$i][4]; 
					?></span></h4>
					<p><?php echo $array1[$i][1]; ?></p>
				</td>
			</tr> <?php
		}
	}else{
		for($i = $z-2; $i >=0; $i--){ 
			$time = time();
			$timeOf = (int)$array[$i][3]; 
			$sec = $time - $timeOf;
			$hours = $sec/3600;
			$hours = (int)$hours;
			$minutes = ($sec - ($hours * 3600))/60;
			$minutes = (int)$minutes;
			//today  thisweek thismonth allnews
			if($nesto == 'today' && $hours>23) break; 
			if($nesto = 'thisweek' && $hours >168) break;
			if($nesto = 'thismonth' && $hours > 1800) break;
			?>
				<tr>
				<td class="picture">
					<img src="img/<?php echo $array[$i][2]; ?>">
				</td>
				<td>
					<h4><?php echo $array[$i][0].'   '; ?><span>
					<?php
					if($minutes == 0 && $hours == 0){
						echo "Novost je objavljena prije nekoliko sekundi.";
					}else if($hours == 0 && $minutes != 0){
						if($minutes==1) {
							echo "Novost je objavljena prije jedne minute";
							//continue;
						}else if($minutes>1 && $minutes < 6){
							echo "Novost je objavljena prije ".(int)$minutes." minute";
						}else echo "Novost je objavljena prije ".(int)$minutes." minuta";
					}else if($hours != 0 && $hours < 23){
						if($hours == 1){
							echo "Novost je objavljena prije jednog sata";
						}else if($hours == 2) echo "Novost je objavljena prije 2 sata";
						else echo "Novost je objavljena prije ".(int)$hours." sati";
					}else if($hours > 23 && $hours < 168){
						if($hours < 48) echo "Novost je objavljena prije jednog dana";
						else echo "Novost je objavljena prije".((int)$hours*24)." dana";
					}else if($hours < 672){
						if($hours < 168) echo "Novost je objavljena prije jedne sedmice";
						else if($hours < 336) echo "Novost je objavljena prije 2 sedmice";
						else if($hours < 504) echo "Novost je objavljena prije 3 sedmice";
						else echo "Novost je objavljena prije 4 sedmice";
					}else echo $array[$i][4]; 
					?></span></h4>
					<p><?php echo $array[$i][1]; ?></p>
				</td>
			</tr> <?php
		}
	}	
 ?>
</table>
</section>

</body>
</html>