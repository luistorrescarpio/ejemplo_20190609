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
		var series = [70685226,17324525,17273647,29384736,87736465];

		$(document).ready(function() {
			generarTicket();
		});
		function generarTicket(){
			var ticket, ticket2;
			for( var i=0;i<series.length;i++ ){

				ticket = '<div style="background-color: #FFFFFF; width: 300px;box-shadow: 2px 2px 2px #000;">'
						+'	<p style="margin:0px;padding: 0px;">JOSE LUIS PELARES</p>'
						+'	<div id="ticket_'+i+'"></div>'
						+'	<p style="margin-top: -2px">CUARTO - C</p>'
						+'</div>';

				$("#barcode_content").append(ticket);
				// console.log(series[i]);
				$("#ticket_"+i).barcode(""+series[i],"code128",{ 
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