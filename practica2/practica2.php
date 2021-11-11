<html>
<head>
    <title>Practica 2</title>
</head>
<body>

<?php
$numero = rand(1,4);
$color = ["#ffc1e1", "#bdfcff","#e1bdff","#c49361"];
$numcolor = rand(0,3);

echo "numero generado = ".$numero;
echo "<div style='color:".$color[$numcolor]."'>Color generado</div>";

if($numero == 1){
?>
<h1 style="color: <?php echo $color[$numcolor]; ?>">Titulo de la pagina 1</h1>

<?php } elseif ($numero == 2) { ?>
<h2 style="color: <?php echo $color[$numcolor]; ?>">Titulo de la pagina 2</h1>

<?php } elseif ($numero == 3) { ?>
<h2 style="color: <?php echo $color[$numcolor]; ?>">Titulo de la pagina 3</h1>

<?php } elseif ($numero == 4) { ?>
<h2 style="color: <?php echo $color[$numcolor]; ?>">Titulo de la pagina 4</h1>

<?php } ?>
</body>
</html>