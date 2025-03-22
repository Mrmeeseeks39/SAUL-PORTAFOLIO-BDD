<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparativa de Controles: PS5 vs Xbox</title>
    <style>
        :root {
            --ps-color: #0070cc;
            --xbox-color: #107C10;
            --bg-color: #f0f0f0;
            --text-color: #333;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: var(--bg-color);
            color: var(--text-color);
            line-height: 1.6;
        }
        header, footer {
            background: linear-gradient(135deg, var(--ps-color), var(--xbox-color));
            color: white;
            text-align: center;
            padding: 2rem;
            position: relative;
        }
        header h1 {
            margin: 0;
            font-size: 3.5rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }
        header h1 span:first-child {
            color: white;
        }
        header h1 span:last-child {
            font-size: 1.8rem;
            color: #f0f0f0;
            display: block;
            margin-top: 0.5rem;
        }
        .marca {
            position: absolute;
            bottom: 10px;
            right: 10px;
            font-size: 0.9rem;
            opacity: 0.8;
        }
        .container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 20px;
        }
        .comparativa {
            display: flex;
            justify-content: space-between;
            gap: 2rem;
            margin-bottom: 2rem;
        }
        .section {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        .section:hover {
            transform: translateY(-5px);
        }
        .section h2 {
            color: var(--ps-color);
            border-bottom: 2px solid var(--ps-color);
            padding-bottom: 0.5rem;
        }
        .section:nth-child(2) h2 {
            color: var(--xbox-color);
            border-color: var(--xbox-color);
        }
        img {
            width: 100%;
            max-width: 400px;
            border-radius: 10px;
            margin: 1rem 0;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        iframe {
            width: 100%;
            max-width: 560px;
            height: 315px;
            border-radius: 10px;
            margin-top: 1rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        .control {
            padding: 1.5rem;
            border-radius: 10px;
            color: white;
            flex: 1;
        }
        .control h3 {
            margin-top: 0;
        }
        .control.dualsense { background: var(--ps-color); }
        .control.xbox { background: var(--xbox-color); }
        .control ul {
            list-style-type: none;
            padding: 0;
        }
        .control li {
            margin-bottom: 0.5rem;
        }
        .control li::before {
            content: '✔';
            margin-right: 0.5rem;
        }
        .control li.negative::before {
            content: '✖';
        }
        .form-consulta {
            display: grid;
            gap: 1rem;
            margin-bottom: 2rem;
        }
        .form-consulta input, 
        .form-consulta textarea {
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 8px;
            width: 100%;
        }
        .btn-form {
            background: var(--ps-color);
            color: white;
            padding: 0.8rem 1.5rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: opacity 0.3s;
        }
        .btn-form:hover {
            opacity: 0.9;
        }
        .notas-container {
            margin-top: 2rem;
        }
        .nota {
            background: white;
            padding: 1.5rem;
            border-radius: 10px;
            margin-bottom: 1rem;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .nota h3 {
            color: var(--xbox-color);
            margin: 0 0 0.5rem;
        }
        .nota small {
            color: #666;
            font-size: 0.9rem;
        }
        @media (max-width: 768px) {
            .comparativa {
                flex-direction: column;
            }
            header h1 {
                font-size: 2.5rem;
            }
            header h1 span:last-child {
                font-size: 1.4rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>
            <span>¿Qué control es mejor?</span>
            <span>PS5 vs Xbox: La batalla de los controles</span>
        </h1>
        <span class="marca">Hecho por Saul Martinez ¨Big Boss¨</span>
    </header>
    
    <div class="container">
        <div class="comparativa">
            <div class="section">
                <h2>Control de PlayStation 5</h2>
                <p>El DualSense de PS5 ofrece una experiencia de juego revolucionaria con sus características únicas.</p>
                <img src="HPNG2.jpg" alt="Control de PS5">
                <iframe src="https://www.youtube.com/embed/7Xs8zuApv4M" allowfullscreen></iframe>
            </div>
            
            <div class="section">
                <h2>Control de Xbox</h2>
                <p>El control de Xbox combina comodidad y rendimiento para una experiencia de juego óptima.</p>
                <img src="Microsoft-Xbox-Wireless-Controller-Carbon-Black_fe68c095-7c16-4838-adaa-d4c5e34bb09b.8a20623dcc1e93efedcbe37497075d5a.webp" alt="Control de Xbox">
                <iframe src="https://www.youtube.com/embed/V65i4PHlGPs" allowfullscreen></iframe>
            </div>
        </div>
        
        <div class="section">
            <h2>Comparativa</h2>
            <div class="comparativa">
                <div class="control dualsense">
                    <h3>DualSense</h3>
                    <ul>
                        <li>Innovación en vibración y respuesta táctil</li>
                        <li>Gatillos adaptativos para mayor inmersión</li>
                        <li class="negative">Menor compatibilidad en PC</li>
                    </ul>
                </div>
                <div class="control xbox">
                    <h3>Xbox</h3>
                    <ul>
                        <li>Ergonomía mejorada y mayor comodidad</li>
                        <li>Alta compatibilidad con PC y móviles</li>
                        <li class="negative">Sin respuesta háptica avanzada</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Sección de Comentarios -->
        <div class="section">
            <h2>Comentarios/Notas</h2>
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form-consulta">
                <input type="text" name="nombreyapellido" placeholder="Nombre y Apellido" required>
                <input type="text" name="usuario" placeholder="Nombre de Usuario" required>
                <input type="email" name="email" placeholder="Correo electrónico" required>
                <textarea name="nota" placeholder="Escribe tu nota..." required></textarea>
                <button type="submit" class="btn-form">Enviar</button>
            </form>

            <div class="notas-container">
                <?php
                // Configuración de la base de datos
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "portafolio";

                // Crear conexión
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Verificar conexión
                if ($conn->connect_error) {
                    die("Error de conexión: " . $conn->connect_error);
                }

                // Insertar nueva nota
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $nombre = $conn->real_escape_string($_POST['nombreyapellido']);
                    $usuario = $conn->real_escape_string($_POST['usuario']);
                    $email = $conn->real_escape_string($_POST['email']);
                    $nota = $conn->real_escape_string($_POST['nota']);
                    $fecha = date('Y-m-d H:i:s');

                    $sql = "INSERT INTO notas (nombreyapellido, usuario, email, nota, fechanota)
                            VALUES ('$nombre', '$usuario', '$email', '$nota', '$fecha')";

                    if ($conn->query($sql) !== TRUE) {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                }

                // Mostrar notas existentes
                $sql = "SELECT * FROM notas ORDER BY fechanota DESC";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo '<div class="nota">';
                        echo '<h3>' . htmlspecialchars($row['nombreyapellido']) . ' (@' . htmlspecialchars($row['usuario']) . ')</h3>';
                        echo '<p>' . htmlspecialchars($row['nota']) . '</p>';
                        echo '<small>' . date('d/m/Y H:i', strtotime($row['fechanota'])) . '</small>';
                        echo '</div>';
                    }
                } else {
                    echo '<p>No hay notas aún. ¡Sé el primero en comentar!</p>';
                }
                $conn->close();
                ?>
            </div>
        </div>
    </div>
    
    <footer>
        <p>&copy; 2025 Comparativa de Controles | Hecho por un usuario de los 2 mandos.</p>
    </footer>
</body>
</html>
