<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eco-Venados en Acción - Mi Compromiso</title>
    <link rel="stylesheet" href="css/formulario.css">
</head>
<body>

    <header>
        <div class="header-info">
            <img src="logo-cbtis.jpg" alt="Logo CBTis" class="logo">
            <div class="header-textos">
                <h1> Eco-Venados en Acción </h1>
                <p class="subtitulo">PAEC: Transformando el Entorno</p>
            </div>
        </div>
        <nav>
            <a href="index.html">Inicio</a>
            <a href="reciclaje.html">¿Qué es?</a>
            <a href="tipos-residuos.html">Tipos de Residuos</a>
            <a href="tres-r.html">Las 3R</a>
            <a href="problema-ambiental.html">Problema Ambiental</a>
            <a href="escuela.html">En Nuestra Escuela</a>
            <a href="comunidad.html">En la Comunidad</a>
            <a href="formulario.php" class="active">Mi Compromiso</a>
        </nav>
    </header>

    <main>
        <section class="contenido">
            <h2>Formulario: "Mi compromiso con el reciclaje"</h2>
            <p>Completa los siguientes campos para registrar tus datos, evaluar tus hábitos ecológicos y asumir un compromiso con el plantel y la comunidad.</p>
            
            <form action="resultado.php" method="POST" class="eco-form">
                
                <div class="form-group">
                    <label for="nombre">1. Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required placeholder="Escribe tu nombre completo">
                </div>

                <div class="form-group">
                    <label for="edad">2. Edad:</label>
                    <input type="number" id="edad" name="edad" required min="12" max="100" placeholder="Ej. 16">
                </div>

                <div class="form-group">
                    <label for="grupo">3. Grupo:</label>
                    <input type="text" id="grupo" name="grupo" required placeholder="Ej. 5° Programación">
                </div>

                <div class="form-group">
                    <label for="residuo">4. Residuo que genera con mayor frecuencia:</label>
                    <select id="residuo" name="residuo" required>
                        <option value="">Selecciona una opción</option>
                        <option value="Plástico (botellas y envases)">Plástico (botellas y envases)</option>
                        <option value="Papel y cartón">Papel y cartón</option>
                        <option value="Residuos orgánicos">Residuos orgánicos</option>
                        <option value="Metal y latas">Metal y latas</option>
                        <option value="Vidrio">Vidrio</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>5. ¿Separas tus residuos?</label>
                    <div class="radio-group">
                        <label><input type="radio" name="separa" value="Sí" required> Sí</label>
                        <label><input type="radio" name="separa" value="No"> No</label>
                        <label><input type="radio" name="separa" value="Algunas veces"> Algunas veces</label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="accion">6. ¿Qué acción realizas para cuidar el ambiente?</label>
                    <textarea id="accion" name="accion" rows="3" required placeholder="Describe brevemente qué haces en tu día a día..."></textarea>
                </div>

                <div class="form-group">
                    <label for="compromiso">7. Seleccionar un compromiso:</label>
                    <select id="compromiso" name="compromiso" required>
                        <option value="">Elige tu compromiso principal</option>
                        <option value="Reducir el uso de plástico">Reducir el uso de plástico</option>
                        <option value="Separar residuos">Separar residuos</option>
                        <option value="Reutilizar materiales">Reutilizar materiales</option>
                        <option value="Participar en campañas">Participar en campañas</option>
                        <option value="Reciclar aparatos electrónicos">Reciclar aparatos electrónicos</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="comentario">8. Comentario o propuesta:</label>
                    <textarea id="comentario" name="comentario" rows="3" placeholder="¿Tienes alguna propuesta para mejorar el plantel?"></textarea>
                </div>

                <!-- Reto especial integrado: Calculadora de impacto ambiental -->
                <div class="form-group reto-especial">
                    <h3> Reto Especial: Calculadora de Impacto de Plástico</h3>
                    <p>Estima cuántas botellas o envases de plástico usas o evitas a la semana para calcular tu ahorro anual de CO₂:</p>
                    <input type="number" id="botellas" name="botellas" min="0" value="5" placeholder="Cantidad por semana">
                </div>

                <button type="submit" class="btn-enviar">9. Enviar compromiso</button>
            </form>
        </section>
    </main>

    <footer>
        <p>CBTis 269 &copy; 2026 - Proyecto de Reciclaje PAEC</p>
    </footer>

</body>
</html>