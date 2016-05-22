<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript">
		function fun(){
			var ajdi = $("#ajdi").val();
			var number = $("#number").val();
			$.ajax({
				type:'POST',
				url:'insertba.php',
				data:{ajdi:ajdi, number:number},
				success:function(){
					alert("DONE :D");
				}
			});
		}
		// ovo je hard kodirano , za više "brojevnih gluposti" se koristi niz :D 
		//u kojem će se svejedno unijeti gluposti ove :D
		$(document).ready(function(){
			$("#ajdi").keyup(function(e){
				var ajdi = $("#ajdi").val();
				if(ajdi == 'ba'){
					document.getElementById("number").value  = "+387";
				}
			});
			$("#number").keyup(function(e){
				var ajdi = $("#number").val();
				if(ajdi == '+387'){
					document.getElementById("ajdi").value  = "ba";
				}
			});

		});
	</script>
</head>
<body>
<form onsubmit="fun();">
	<input type="text" name="ajdi" id="ajdi" placeholder="AJDI :D"><br><br>
	<input type="text" name="number" id="number" placeholder="Broj telefona"><br><br>
	<input type="submit" value="Unesi">
</form>
</body>
</html>