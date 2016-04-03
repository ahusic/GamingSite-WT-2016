var d = new Date();
		var mjesec = d.getMonth();
		var godina = d.getFullYear();
		var dan = d.getDate();
		var sati = d.getHours();
		var minute = d.getMinutes();
		function myFunction() {
			var x, text;
		    var x = document.getElementById("select").selectedIndex;
		    x = document.getElementsByTagName("option")[x].value;
		    if(x==1){
		    	document.getElementById("demo").innerHTML ="nesto";
		    }
		    	
		}
		function Ispisi(){
				prviDan = document.getElementById(3).value;
				if(document.getElementById(1).value==godina
				  && document.getElementById(2).value==mjesec+1
				  && document.getElementById(3).value==dan
				  && document.getElementById(4).value==sati
				  && document.getElementById(5).value==minute				 
				  ){
					document.getElementById("prviParagraph").innerHTML = "Novost objavljena prije par sekundi";

				}
				if(document.getElementById(6).value==godina
				  && document.getElementById(7).value==mjesec+1
				  && document.getElementById(8).value==dan
				  && document.getElementById(9).value==sati
				  && document.getElementById(10).value==minute				 
				  ){
					document.getElementById("drugiParagraph").innerHTML = "Novost objavljena prije par sekundi";

				}
				if(document.getElementById(11).value==godina
				  && document.getElementById(12).value==mjesec+1
				  && document.getElementById(13).value==dan
				  && document.getElementById(14).value==sati
				  && document.getElementById(15).value==minute				 
				  ){
					document.getElementById("treciParagraph").innerHTML = "Novost objavljena prije par sekundi";	

				}
				if(document.getElementById(16).value==godina
				  && document.getElementById(17).value==mjesec+1
				  && document.getElementById(18).value==dan
				  && document.getElementById(19).value==sati
				  && document.getElementById(20).value==minute				 
				  ){	
					document.getElementById("cetvrtiParagraph").innerHTML = "Novost objavljena prije par sekundi";
				}
				if(document.getElementById(21).value==godina
				  && document.getElementById(22).value==mjesec+1
				  && document.getElementById(23).value==dan
				  && document.getElementById(24).value==sati
				  && document.getElementById(25).value==minute				 
				  ){
					document.getElementById("petiParagraph").innerHTML = "Novost objavljena prije par sekundi";

				}
				if(document.getElementById(26).value==godina
				  && document.getElementById(27).value==mjesec+1
				  && document.getElementById(28).value==dan
				  && document.getElementById(29).value==sati
				  && document.getElementById(30).value==minute				 
				  ){
					document.getElementById("sestiParagraph").innerHTML = "Novost objavljena prije par sekundi";

				}
				if(document.getElementById(1).value==godina
				  && document.getElementById(2).value==mjesec+1
				  && document.getElementById(3).value==dan
				  && document.getElementById(4).value==sati
				  && document.getElementById(5).value!=minute				 
				  ){
				  	var kolikoMinuta=minute - document.getElementById(5).value;
					document.getElementById("prviParagraph").innerHTML = "Novost objavljena prije "+kolikoMinuta+" minuta";

				}
				if(document.getElementById(6).value==godina
				  && document.getElementById(7).value==mjesec+1
				  && document.getElementById(8).value==dan
				  && document.getElementById(9).value==sati
				  && document.getElementById(10).value!=minute				 
				  ){
					var kolikoMinuta=minute - document.getElementById(10).value;
					document.getElementById("drugiParagraph").innerHTML = "Novost objavljena prije "+kolikoMinuta+" minuta";
				}if(document.getElementById(11).value==godina
				  && document.getElementById(12).value==mjesec+1
				  && document.getElementById(13).value==dan
				  && document.getElementById(14).value==sati
				  && document.getElementById(15).value!=minute				 
				  ){
				  	var kolikoMinuta=minute - document.getElementById(15).value;
					document.getElementById("treciParagraph").innerHTML = "Novost objavljena prije "+kolikoMinuta+" minuta";	

				}if(document.getElementById(16).value==godina
				  && document.getElementById(17).value==mjesec+1
				  && document.getElementById(18).value==dan
				  && document.getElementById(19).value==sati
				  && document.getElementById(20).value!=minute				 
				  ){	
				  	var kolikoMinuta=minute - document.getElementById(20).value;
					document.getElementById("cetvrtiParagraph").innerHTML = "Novost objavljena prije "+kolikoMinuta+" minuta";
					
				}
				if(document.getElementById(21).value==godina
				  && document.getElementById(22).value==mjesec+1
				  && document.getElementById(23).value==dan
				  && document.getElementById(24).value==sati
				  && document.getElementById(25).value!=minute				 
				  ){
				  	var kolikoMinuta=minute - document.getElementById(25).value;
					document.getElementById("petiParagraph").innerHTML = "Novost objavljena prije "+kolikoMinuta+" minuta";
				}
				if(document.getElementById(26).value==godina
				  && document.getElementById(27).value==mjesec+1
				  && document.getElementById(28).value==dan
				  && document.getElementById(29).value==sati
				  && document.getElementById(30).value!=minute				 
				  ){
				  	var kolikoMinuta=minute - document.getElementById(30).value;
					document.getElementById("sestiParagraph").innerHTML = "Novost objavljena prije "+kolikoMinuta+" minuta";

				}


				if(document.getElementById(1).value==godina
				  && document.getElementById(2).value==mjesec+1
				  && document.getElementById(3).value==dan
				  && document.getElementById(4).value!=sati				 
				  ){
				  	var kolikoMinuta=minute - document.getElementById(4).value;
					document.getElementById("prviParagraph").innerHTML = "Novost objavljena prije "+kolikoMinuta+" sati";

				}
				if(document.getElementById(6).value==godina
				  && document.getElementById(7).value==mjesec+1
				  && document.getElementById(8).value==dan
				  && document.getElementById(9).value!=sati				 
				  ){
					var kolikoMinuta=minute - document.getElementById(9).value;
					document.getElementById("drugiParagraph").innerHTML = "Novost objavljena prije "+kolikoMinuta+" sati";
				}if(document.getElementById(11).value==godina
				  && document.getElementById(12).value==mjesec+1
				  && document.getElementById(13).value==dan
				  && document.getElementById(14).value!=sati				 
				  ){
				  	var kolikoMinuta=minute - document.getElementById(14).value;
					document.getElementById("treciParagraph").innerHTML = "Novost objavljena prije "+kolikoMinuta+" sati";	

				}if(document.getElementById(16).value==godina
				  && document.getElementById(17).value==mjesec+1
				  && document.getElementById(18).value==dan
				  && document.getElementById(19).value!=sati			 
				  ){	
				  	var kolikoMinuta=minute - document.getElementById(19).value;
					document.getElementById("cetvrtiParagraph").innerHTML = "Novost objavljena prije "+kolikoMinuta+" sati";
					
				}
				if(document.getElementById(21).value==godina
				  && document.getElementById(22).value==mjesec+1
				  && document.getElementById(23).value==dan
				  && document.getElementById(24).value!=sati			 
				  ){
				  	var kolikoMinuta=minute - document.getElementById(24).value;
					document.getElementById("petiParagraph").innerHTML = "Novost objavljena prije "+kolikoMinuta+" sati";
				}
				if(document.getElementById(26).value==godina
				  && document.getElementById(27).value==mjesec+1
				  && document.getElementById(28).value==dan
				  && document.getElementById(29).value!=sati			 
				  ){
				  	var kolikoMinuta=minute - document.getElementById(29).value;
					document.getElementById("sestiParagraph").innerHTML = "Novost objavljena prije "+kolikoMinuta+" sati";

				}

		}