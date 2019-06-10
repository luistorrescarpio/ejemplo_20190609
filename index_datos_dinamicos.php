<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="js/jquery-1.9.1.min.js"></script>
	<script src="lib/Simple-jQuery-Based-Barcode-Generator-Barcode/jquery/jquery-barcode.min.js"></script>
	<script src="lib/jquery-qrcode/jquery.qrcode.min.js"></script>
</head>
<body>
	<div align="center">
		<h4>Generador de Barras</h4>
		<div id="barcode_content"></div>
		<h4>Generado de QR</h4>
		<div id="code_content"></div>
	</div>
	<script>
		var series = [{
			est_dni: 70685226
			,est_name: "Jose Perales"
			,est_grado: "Tercero"
			,est_seccion: "C"
		},{
			est_dni: 70685126
			,est_name: "Luis Manrrique"
			,est_grado: "Tercero"
			,est_seccion: "A"
		},{
			est_dni: 70625226
			,est_name: "Gustavo Vilca"
			,est_grado: "Primero"
			,est_seccion: "C"
		}];

		$(document).ready(function() {
			generarTicket();
		});
		function generarTicket(){
			var ticket, ticket2;
			for( var i=0;i<series.length;i++ ){

				ticket = '<div style="background-color: #FFFFFF; width: 300px;box-shadow: 2px 2px 2px #000;">'
						+'	<p style="margin:0px;padding: 0px;">'+series[i].est_name+'</p>'
						+'	<div id="ticket_'+i+'"></div>'
						+'	<p style="margin-top: -2px">'+series[i].est_grado+' - '+series[i].est_seccion+'</p>'
						+'</div>';

				$("#barcode_content").append(ticket);
				// console.log(series[i]);
				$("#ticket_"+i).barcode(""+series[i].est_dni,"code128",{ 
					barWidth: 3
					,barHeight: 30
				});
				/////////////////////////////////////////

				ticket2 = '<div style="float:left;margin:10px;">'
							+'<div id="ticketqr_'+i+'"></div>'
						+'</div>';
				$("#code_content").append(ticket2);

				$("#ticketqr_"+i).qrcode({
					width: 100
					,height: 100
					,text: series[i]
				})
			}
		}
	</script>
</body>
</html>