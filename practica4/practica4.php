<html>
<head>
    <title>PRACTICA 4</title>
<link rel="stylesheet" type="text/css" href="practica4.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:ital@1&family=Comfortaa:wght@700&family=Lobster&family=Monoton&display=swap" rel="stylesheet"> 
</head>
<body>
<h1>Nombre: Velazquez Rodriguez Tessa Airam 5AVP</h1><br>
    <form class="resul">
        <?php
echo "<h1>RESULTADOS:</h1> <br>";
$nombre = $_GET["nombre"];
echo "<h2>Nombre del alumno: ". $nombre . "<br>";
$calif = 0;
$p1 = $_GET["p1"];
if($p1 == "35 países"){
    $calif  ++;
    echo "<h2>1. CORRECTA <img src = 'correcto.webp' width=40px; height: 40px;/> &rarr;" . $p1 . "<br></h2>";
}else{
    echo "<h2>1. INCORRECTA <img src = 'incorrecto.webp' width=40px; height: 40px;/> &rarr; " . $p1 . "<br></h2>";
    echo "<h3>La respuesta correcta es: 35 países</h3><br>";
}
$p2 = $_GET["p2"];
if($p2 == "Océano Pacífico"){
    echo "<h2>2. CORRECTA <img src = 'correcto.webp' width=40px; height: 40px;/>  &rarr;" . $p2 . "<br></h2>";
    $calif  ++;

}else{
    echo "<h2>2. INCORRECTA  <img src = 'incorrecto.webp' width=40px; height: 40px;/>  &rarr;" . $p2."<br></h2>";
    echo "<h3>La respuesta correcta es: Oéano Pacífico</h3><br>"; 
}
$p3 = $_GET["p3"];
if($p3 == "206 huesos"){
    $calif  ++;
    echo "<h2>3. CORRECTA  <img src = 'correcto.webp' width=40px; height: 40px;/> &rarr;" . $p3 ."<br></h2>";
}else{
    echo "<h2>3. INCORRECTA  <img src = 'incorrecto.webp' width=40px; height: 40px;/> " . $p3 ."<br></h2>";
    echo "<h3>La respuesta correcta es: 206 huesos</h3><br>";
}
$p4 = $_GET["p4"];
if($p4 == "the beatles"){
    $calif  ++;
    echo "<h2>4. CORRECTA  <img src = 'correcto.webp' width=40px; height: 40px;/> &rarr;" . $p4 ."<br></h2>";
}
elseif($p4 == "The Beatles"){
    $calif  ++;
    echo "<h2>4. CORRECTA   <img src = 'correcto.webp' width=40px; height: 40px;/> &rarr;" . $p4 ."<br></h2>";
}
elseif($p4 == "The beatles"){
    $calif  ++;
    echo "<h2>4. CORRECTA  <img src = 'correcto.webp' width=40px; height: 40px;/> &rarr;" . $p4 ."<br></h2>";
}
elseif($p4 == "THE BEATLES"){
    $calif  ++;
    echo "<h2>4. CORRECTA  <img src = 'correcto.webp' width=40px; height: 40px;/> &rarr;" . $p4 ."<br></h2>";
}
else{
    echo "<h2>4. INCORRECTA  <img src = 'incorrecto.webp' width=40px; height: 40px;/>  &rarr;" . $p4 ."<br></h2>";
    echo "<h3>La respuesta correcta es: The Beatles</h3> <br>";
}

$p5 = $_GET["p5"];
if($p5 == "yen"){
    echo "<h2>5. CORRECTA  <img src = 'correcto.webp' width=40px; height: 40px;/>  &rarr;" . $p5 . "<br></h2>";
    $calif  ++;
}elseif($p5 == "YEN"){
    $calif  ++;
    echo "<h2>5. CORRECTA <img src = 'correcto.webp' width=40px; height: 40px;/>  &rarr;" . $p5 ."<br></h2>";
}elseif($p5 == "Yen"){
    $calif  ++;
    echo "<h2>5. CORRECTA   <img src = 'correcto.webp' width=40px; height: 40px;/>  &rarr;" . $p5 ."<br></h2>";
}
else{
    echo "<h2>5. INCORRECTA  <img src = 'incorrecto.webp' width=40px; height: 40px;/>  &rarr;" . $p5."<br></h2>";
    echo "<h3>La respuesta correcta es: Yen</h3><br>";
}

$p6 = $_GET["p6"];
if($p6 == "Biblia"){
    echo "<h2>6. CORRECTA  <img src = 'correcto.webp' width=40px; height: 40px;/> &rarr;" . $p6 . "<br></h2>";
    $calif  ++;
}elseif($p6 == "BIBLIA"){
    $calif  ++;
    echo "<h2>6. CORRECTA   <img src = 'correcto.webp' width=40px; height: 40px;/>  &rarr;" . $p6 ."<br></h2>";
}elseif($p6 == "biblia"){
    $calif  ++;
    echo "<h2>6. CORRECTA  <img src = 'correcto.webp' width=40px; height: 40px;/>  &rarr; " . $p6 ."<br></h2>";
}
else{
    echo "<h2>6. INCORRECTA  <img src = 'incorrecto.webp' width=40px; height: 40px;/>  &rarr;" . $p6."<br></h2>";
    echo "<h3>La respuesta correcta es: Biblia</h3> <br>";
}
$p7 = $_GET["p7"];
for ($i=0; $i < count ($p7); $i++){
    if($i==0){
        $respuesta7 = $p7[$i].',';
    }elseif ($i == count($p7)-1){
        $respuesta7 = $respuesta7.$p7[$i];
    }else {
        $respuesta7 = $respuesta7 . $p7[$i];
    }
}if($respuesta7 == "Azul,Amarillo"){
    $estado7 = "correcto";
}else{
    $estado7 = "incorrecto";
}
if($estado7 == "correcto"){
   
    echo "<h2>7. CORRECTA <img src = 'correcto.webp' width=40px; height: 40px;/>  &rarr; ". $respuesta7 . "<br></h2>";
$calif++;
}else{
    echo "<h2>7.INCORRECTA <img src = 'incorrecto.webp' width=40px; height: 40px;/>  &rarr;" . $respuesta7."<br></h2>";
    echo "<h3>La respuesta correcta es: Azul, Amarillo</h3> <br>";
}
$p8 = $_GET["p8"];
for ($i=0; $i < count ($p8); $i++){
    if($i==0){
        $respuesta8 = $p8[$i].',';
    }elseif ($i == count($p8)-1){
        $respuesta8 = $respuesta8.$p8[$i];
    }else {
        $respuesta8 = $respuesta8 . $p8[$i];
    }
}if($respuesta8 == "Machu Picchu,Coliseo de Roma"){
    $estado8 = "correcto";
}else{
    $estado8 = "incorrecto";
}
if($estado8 == "correcto"){
    echo "<h2>8. CORRECTA <img src = 'correcto.webp' width=40px; height: 40px;/>  &rarr; ". $respuesta8 . "<br></h2>";
    $calif ++;
}else{
    echo "<h2>8.INCORRECTA <img src = 'incorrecto.webp' width=40px; height: 40px;/>  &rarr;" . $respuesta8."<br></h2>";
    echo "<h3>La respuesta correcta es: Machu Picchu, Coliseo de Roma</h3> <br>";

}
$p9 = $_GET["p9"];
for ($i=0; $i < count ($p9); $i++){
    if($i==0){
        $respuesta9 = $p9[$i].',';
    }elseif ($i == count($p9)-1){
        $respuesta9 = $respuesta9.$p9[$i];
    }else {
        $respuesta9 = $respuesta9 . $p9[$i];
    }
}if($respuesta9 == "Neutrones,Electrones"){
    $estado9 = "correcto";
}else{
    $estado9 = "incorrecto";
}
if($estado9 == "correcto"){
    echo "<h2>9. CORRECTA <img src = 'correcto.webp' width=40px; height: 40px;/>&rarr; ". $respuesta9 . "<br></h2>";
    $calif ++;
}else{
    echo "<h2>9. INCORRECTA <img src = 'incorrecto.webp' width=40px; height: 40px;/>&rarr;" . $respuesta9."<br></h2>";
    echo "<h3>La respuesta correcta es: Neutrones, Electrones</h3> <br>";

}

$p10 = $_GET["p10"];
if($p10 == "murcielago"){
    $calif  ++;
    echo "<h2>10. CORRECTA &rarr; <img src = 'correcto.webp' width=40px; height: 40px;/> &rarr;" . $p10 ."<br></h2>";
}
elseif($p10 == "murciélago"){
    $calif  ++;
    echo "<h2>10. CORRECTA   <img src = 'correcto.webp' width=40px; height: 40px;/>  &rarr;" . $p10 ."<br></h2>";
}
elseif($p10 == "Murciélago"){
    $calif  ++;
    echo "<h2>10. CORRECTA   <img src = 'correcto.webp' width=40px; height: 40px;/>  &rarr;" . $p10 ."<br></h2>";
}
elseif($p10 == "MURCIELAGO"){
    $calif  ++;
    echo "<h2>10. CORRECTA   <img src = 'correcto.webp' width=40px; height: 40px;/>  &rarr;" . $p10 ."<br></h2>";
}
elseif($p10 == "MURCIÉLAGO"){
    $calif  ++;
    echo "<h2>10. CORRECTA   <img src = 'correcto.webp' width=40px; height: 40px;/> &rarr;" . $p10 ."<br></h2>";
}
elseif($p10 == "Murcielago"){
    $calif  ++;
    echo "<h2>10. CORRECTA <img src = 'correcto.webp' width=40px; height: 40px;/>  &rarr;" . $p10 ."<br></h2>";
}
else{
    echo "<h2>10. INCORRECTA <img src = 'incorrecto.webp' width=40px; height: 40px;/>&rarr;  " . $p10 ."<br></h2>";
    echo "<h3>La respuesta correcta es: Murciélago</h3><br>";
}

echo "<br><h1>CALIFICACIÓN:" . $calif . "/10</h1>";
if($calif >= 6){
    echo "<h3>¡Aprobaste!:)</h3>";
}else{
    echo"<h3>Oooouh, suerte la próxima vez, no aprobaste el exámen, te falta conocer más sobre cultura general:(</h3>";
}
?>
</body>
</form>
</html>