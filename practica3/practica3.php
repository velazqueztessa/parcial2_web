<html>
    <head>
        <title>PRACTICA 3</title>
</head>
<body>
<h1>Nombre: Velazquez Rodriguez Tessa Airam 5AVP</h1>
<?php
$nombre = $_GET['nombre'];
echo "El nombre del cliente es: <br> " . $nombre;
$edad = $_GET['edad'];
echo " <br><br>La edad del cliente es:<br>" . $edad;
$correo = $_GET['correo'];
echo "<br><br>El correo del cliente es:<br> " . $correo;
$fecha_nacimiento = $_GET['fecha_nacimiento'];
echo "<br><br>La fecha de nacimiento del cliente es:<br> " . $fecha_nacimiento;
$sexo = $_GET["sexo"];
echo "<br><br> El sexo del cliente es:<br>" . $sexo;
echo "<br><br> Las &aacute;reas de preferencia del cliente son: <br>";
$area1 = " ";
$area2 = " ";
$area3 = " ";
$area4 = " ";

if(isset($_GET['area1'])){
    $area1 = $_GET['area1'];
    echo " Tecnolog&iacute;a<br>";
}else{
    echo " ";
}
if(isset($_GET['area2'])){
    $area2 = $_GET['area2'];
    echo "Belleza<br>";
}else{
    echo " ";
}
if(isset($_GET['area3'])){
    $area3 = $_GET['area3'];
    echo "Automoviles<br>";
}else{
    echo " ";
}
if(isset($_GET['area4'])){
    $area4 = $_GET['area4'];
    echo "Salud<br>";
}
else{
    echo " ";
}
?>
</body>
</html>