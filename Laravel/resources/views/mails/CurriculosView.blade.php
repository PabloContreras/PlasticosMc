<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<h3>Se han recibido información de reclutamiento.</h3>
	<h4>Nombre: {{ $curriculo->nombre }}</h4>
	<h4>Área de interés {{ getAreaInteres($curriculo->area_interes) }}</h4>
	<br>
	<p><a href="https://mcplasticos.com/admin/login">Inicia sesión</a> para ver detalles.</p>
</body>
</html>