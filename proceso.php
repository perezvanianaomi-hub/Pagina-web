<?php
$nombre      = $_POST["nombre"] ?? "";
$apellido    = $_POST["apellido"] ?? "";
$edad        = $_POST["edad"] ?? "";
$correo      = $_POST["correo"] ?? "";
$nivel       = $_POST["nivel"] ?? "";
$gusta       = $_POST["gusta"] ?? "No respondió";
$temas       = isset($_POST["temas"]) ? implode(", ", $_POST["temas"]) : "Ninguno";
$color       = $_POST["color"] ?? "";
$comentarios = $_POST["comentarios"] ?? "";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos recibidos</title>
    <style>
        body { background-color: #e3f2fd; font-family: Arial, sans-serif; margin: 20px; }
        h1 { color: #0d47a1; }
        a { color: #1565c0; }
    </style>
</head>
<body>

    <h1> Datos recibidos </h1>
    <p>Nombre: <b><?php echo htmlspecialchars($nombre); ?></b></p>
    <p>Apellido: <b><?php echo htmlspecialchars($apellido); ?></b></p>
    <p>Edad: <b><?php echo htmlspecialchars($edad); ?></b></p>
    <p>Correo: <b><?php echo htmlspecialchars($correo); ?></b></p>
    <p>Nivel de inglés: <b><?php echo htmlspecialchars($nivel); ?></b></p>
    <p>¿Le gusta el inglés?: <b><?php echo htmlspecialchars($gusta); ?></b></p>
    <p>Temas a practicar: <b><?php echo htmlspecialchars($temas); ?></b></p>
    <p>Color favorito: <b style="color: <?php echo htmlspecialchars($color); ?>;"><?php echo htmlspecialchars($color); ?></b></p>
    <p>Comentarios: <b><?php echo htmlspecialchars($comentarios); ?></b></p>
    <br>
    <a href="formulario.html">Volver al formulario</a> |
    <a href="index.html">Volver al inicio</a>

</body>
</html>
