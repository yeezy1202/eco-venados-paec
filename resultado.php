<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eco-Venados en Acción - Resultado</title>
    <link rel="stylesheet" href="css/formulario.css">
</head>
<body>

    <header>
        <div class="header-info">
            <img src="img/logo-cbtis.png" alt="Logo CBTis" class="logo">
            <div>
                <h1>♻️ Eco-Venados en Acción ♻️</h1>
                <p class="subtitulo">PAEC: Transformando el Entorno</p>
            </div>
        </div>
        <nav>
         <a href="index.html">Inicio</a>
            <a href="reciclaje.html">¿Qué es?</a>
            <a href="tipos-residuos.html" class="active">Tipos de Residuos</a>
            <a href="tres-r.html">Las 3R</a>
            <a href="problema-ambiental.html">Problema Ambiental</a>
            <a href="escuela.html">En Nuestra Escuela</a>
            <a href="comunidad.html">En la Comunidad</a>
            <a href="formulario.php">Mi Compromiso</a>
    </header>

    <main>
        <section class="contenido resultado-card">
            <h2>Resultado de tu Registro 🌿</h2>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Capturar datos de forma segura
                $nombre = htmlspecialchars($_POST['nombre']);
                $edad = htmlspecialchars($_POST['edad']);
                $grupo = htmlspecialchars($_POST['grupo']);
                $residuo = htmlspecialchars($_POST['residuo']);
                $separa = htmlspecialchars($_POST['separa']);
                $accion = htmlspecialchars($_POST['accion']);
                $compromiso = htmlspecialchars($_POST['compromiso']);
                $comentario = htmlspecialchars($_POST['comentario']);
                $botellas = isset($_POST['botellas']) ? intval($_POST['botellas']) : 0;

                // Lógica del reto especial (Cálculo de impacto estimado)
                $anualBotellas = $botellas * 52;
                $co2Ahorrado = round($anualBotellas * 0.082, 2); // Factor estimado de kg de CO2 por envase PET

                echo "<div class='mensaje-personalizado'>";
                echo "<p class='saludo'>¡Muchas gracias por participar, <strong>$nombre</strong>!</p>";
                echo "<p>Hemos registrado correctamente tu información como estudiante del grupo <strong>$grupo</strong> (Edad: $edad años).</p>";
                
                echo "<div class='resumen-datos'>";
                echo "<p><strong>Residuo más frecuente:</strong> $residuo</p>";
                echo "<p><strong>¿Separás tus residuos?:</strong> $separa</p>";
                echo "<p><strong>Tu acción actual:</strong> \"$accion\"</p>";
                echo "<p class='compromiso-resaltado'><strong>Tu compromiso seleccionado:</strong> $compromiso</p>";
                if (!empty($comentario)) {
                    echo "<p><strong>Tu propuesta:</strong> \"$comentario\"</p>";
                }
                echo "</div>";

                // Despliegue del Reto Especial
                echo "<div class='reto-output'>";
                echo "<h3>📊 Resultados de tu Reto Especial de Impacto</h3>";
                echo "<p>Si controlas o evitas el consumo de <strong>$botellas botellas</strong> a la semana, al año estarás evitando el manejo inadecuado de aproximadamente <strong>$anualBotellas envases</strong>.</p>";
                echo "<p>Esto equivale a un ahorro estimado de <strong>$co2Ahorrado kg de CO₂</strong> al año. ¡Tu aportación al PAEC y al CBTis 269 marca la diferencia!</p>";
                echo "</div>";

                echo "</div>";
            } else {
                echo "<p>No se han recibido datos directamente. Por favor, llena el formulario primero.</p>";
            }
            ?>

            <div class="acciones-footer" style="text-align: center; margin-top: 25px;">
                <a href="formulario.php" class="btn-volver">Registrar otro compromiso</a>
            </div>
        </section>
    </main>

    <footer>
        <p>CBTis 269 &copy; 2026 - Proyecto de Reciclaje PAEC</p>
    </footer>

</body>
</html>