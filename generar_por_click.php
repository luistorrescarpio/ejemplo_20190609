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
	<div>
		<input type="text" id="codigo_value" onclick="this.select();">
		<button onclick="generar()">Generar</button>
	</div>
	<div align="center">
		<h4>Generador de Barras</h4>
		<div id="barcode"></div>
		<h4>Generado de QR</h4>
		<div id="code_qr"></div>
	</div>
	<script>
		
		$(document).ready(function() {

			
		});

		function generar(){
			var codigo_value = $("#codigo_value").val();

			$("#code_qr").qrcode({
				width: 100
				,height: 100
				,text: codigo_value
			});

			$("#barcode").barcode(codigo_value,"code128",{
				barWidth: 3
				,barHeight: 50
			});
		}
	</script>
</body>
</html>