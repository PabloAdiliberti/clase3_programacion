<html>
<head>
	<title></title>
</head>
<body>
<form method="POST">

<input type="text" name="elprimero">
<input type="text" name="elsegundo">
<input type="text" name="eltercero">
<input type="submit" value="calcular" name="calular">



</form>
<?php 

$primero = $_POST['elprimero'];
$segundo = $_POST['elsegundo'];
$tercero = $_POST['eltercero'];
$mayor;

if($primero >= $segundo && $primero >= $tercero)
{
		$mayor=$primero;
}else if ($segundo > $primero && $segundo >  $tercero)
{
		$mayor=$segundo;
}else
{
		$mayor=$tercero;
}

echo $mayor;





 ?>


</body>
</html>