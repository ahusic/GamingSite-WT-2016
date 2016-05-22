<?php require_once 'getSession.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Naslovna</title>
	<link rel="stylesheet" type="text/css" href="css/contact.css">
	<script type="text/javascript">
		function validacijaForme() {
			 var surname = document.forms["forma"]["surname"].value;
			 var name = document.forms["forma"]["name"].value;
			 var mail = document.forms["forma"]["mail"].value;
			 var phone = document.forms["forma"]["phone"].value;
			 if(mail != ""){
			 	var phone = document.getElementById("telefon");
				 phone.style.background = "rgba(0,0,0,0.25)";
				 return true;
			 }
			 if(phone!=""){
			 	var mail = document.getElementById("mail");
				 mail.style.background = "rgba(0,0,0,0.25)";
				 return true;
			 }
			 if (name == null || name == "" || surname == "" || mail=="" || phone=="") {
				 var surname = document.getElementById("surname");
				 surname.style.background = "red";
				 var name = document.getElementById("name");
				 name.style.background = "red";
				 var phone = document.getElementById("telefon");
				 phone.style.background = "red";
				 var mail = document.getElementById("mail");
				 mail.style.background = "red";
				 return false;
			 }
		}
	</script>
</head>
<body>
<img id="background" src="ios7.jpg">
<?php include 'menu.php'; ?>
<section class="contact_form">
	<form form name="forma" onsubmit="return validacijaForme()" method="post">>
		<table align="center">
			<tr>
				<td class="header" colspan="2">Kontaktirajte nas</td>
			</tr>
			<tr><td></td></tr>
			<tr>
				<td class="first"><label for="name">Ime : </label></td>
				<td><input type="text" name="name" id="name" placeholder="Ime.." autocomplete="off"><br></td>
			</tr>
			<tr><td></td></tr>
			<tr>
				<td class="first"><label for="surname">Prezime : </label></td>
				<td><input type="text" name="surname" id="surname" placeholder="Prezime.." autocomplete="off"><br></td>
			</tr>
			<tr><td></td></tr>
			<tr>
				<td class="first"><label for="mail">Email : </label></td>
				<td><input type="text" name="mail" id="mail" placeholder="e-Mail" autocomplete="off"><br></td>
			</tr>
			<tr><td></td></tr>
			<tr>
				<td class="first"><label for="telefon">Telefon : </label></td>
				<td><input type="text" id="telefon" name="phone" placeholder="telefon" autocomplete="off"><br></td>
			</tr>
			<tr><td></td></tr>
			<tr>
				<td colspan="2"><input id="submit" type="submit" value="Pošaljite"></td>
			</tr>
		</table>
	</form>
</section>
<table class="footer" cellpadding="0" cellspacing="0" style="position: absolute; bottom: 0px;">
	<tr>
		<td class="firstOne">Pridruzite se</td>
		<td class="firstOne">Reviews</td>
		<td class="firstOne">Novosti</td>
		<td class="firstOne">Stranice</td>
	</tr>
	<tr>
		<td class="secondOne">Instagram</td>
		<td class="secondOne">PC</td>
		<td class="secondOne">PC</td>
		<td class="secondOne">gamerankings.com</td>
	</tr>
	<tr>
		<td class="thirdOne">Twitter</td>
		<td class="thirdOne">PS4</td>
		<td class="thirdOne">Zadnje</td>
		<td class="thirdOne">metacritic.com</td>
	</tr>
	<tr>
		<td class="secondOne">Google+</td>
		<td class="secondOne">xBoxOne</td>
		<td class="secondOne">PS4</td>
		<td class="secondOne">giantbomb.com</td>
	</tr>
	<tr>
		<td class="thirdOne">Facebook</td>
		<td class="thirdOne">Android</td>
		<td class="thirdOne">Android</td>
		<td class="thirdOne">gamefaqs.com</td>
	</tr>
</table>
</body>
</html>