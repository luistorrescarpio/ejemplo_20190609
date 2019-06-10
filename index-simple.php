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
		<div id="barcode"></div>
		<h4>Generado de QR</h4>
		<div id="code_qr"></div>
	</div>
	<script>
		
		$(document).ready(function() {

			$("#code_qr").qrcode({
				width: 200
				,height: 200
				,text: "Prueba 1"
			});

			$("#barcode").barcode("70134973","code128",{
				barWidth: 4
				,barHeight: 90
				,text:"test"
			});
		});
	</script>
</body>
</html>