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
		<div id="barcode_content"></div>
	</div>
	<script>
		$(document).ready(function() {
			// generarTicket();
			getDataDB();
		});
		function generarTicket(series){
			var ticket;
			for( var i=0;i<series.length;i++ ){

				ticket = '<div style="background-color: #FFFFFF; width: 300px;box-shadow: 2px 2px 2px #000;float:left;margin:5px;">'
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
			}
		}
		function getDataDB(){
			$.post("consulta.php",{
				action: "todos_los_datos"
			},function(res){
				console.log(res);
				generarTicket(res);
			},"json");
		}
	</script>
</body>
</html>