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
		<div style="background-color: #FFFFFF; width: 300px;box-shadow: 2px 2px 2px #000;">
			<p style="margin:0px;padding: 0px;">JOSE LUIS PELARES</p>
			<div id="barcode"></div>
			<p style="margin-top: -2px">CUARTO - C</p>
		</div>
	</div>
	<script>

		$(document).ready(function() {

			$("#barcode").barcode("70134973","code128",{
				barWidth: 3
				,barHeight: 30
				,text:"test"
			});
		});
	</script>
</body>
</html>