<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctico 01 - Laravel</title>
    <style>
        /* Estilos generales */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6;
            color: #333;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #2c3e50;
            color: white;
            text-align: center;
            padding: 2rem 1rem;
            margin-bottom: 2rem;
        }

        header h1 {
            margin: 0 0 0.5rem 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 0 1rem 3rem 1rem;
        }

        .card {
            background: white;
            border-radius: 8px;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        }

        h2 {
            color: #2c3e50;
            border-bottom: 2px solid #ecf0f1;
            padding-bottom: 0.5rem;
            margin-top: 0;
        }

        ul {
            line-height: 1.8;
        }

        /* Botones y formularios */
        button {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 0.6rem 1.2rem;
            font-size: 1rem;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.2s;
        }

        button:hover {
            background-color: #2980b9;
        }

        .btn-counter {
            font-size: 1.2rem;
            font-weight: bold;
            width: 40px;
            height: 40px;
        }

        .counter-box {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-top: 1rem;
        }

        #valorContador {
            font-size: 1.5rem;
            font-weight: bold;
            width: 30px;
            text-align: center;
        }

        input {
            width: 100%;
            padding: 0.5rem;
            margin: 0.5rem 0 1rem 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .mensaje-alerta {
            margin-top: 1rem;
            font-weight: bold;
            color: #27ae60;
        }
    </style>
</head>
<body>

    <header>
        <h1>Mi primer proyecto Laravel</h1>
        <p><strong>Estudiante:</strong> Jose Eduardo Vidaurre Vidaurre</p>
    </header>

    <div class="container">
        
        <!-- Sección de información del proyecto -->
        <section class="card">
            <h2>Descripción del Proyecto</h2>
            <p>Este es un desarrollo web inicial para verificar la instalación, configuración del entorno (Laragon, PHP, Composer, Git) y el uso de Blade junto con interacción dinámica en JavaScript.</p>
            
            <h2>Tecnologías utilizadas</h2>
            <ul>
                <li>Laravel</li>
                <li>Blade</li>
                <li>JavaScript</li>
                <li>HTML</li>
                <li>CSS</li>
            </ul>
        </section>

        <!-- Sección Interactiva: Saludo -->
        <section class="card">
            <h2>Interacción con JavaScript</h2>
            <button id="btnSaludar">Saludar</button>
            <p id="mensaje"></p>
        </section>

        <!-- Sección del Contador -->
        <section class="card">
            <h2>Contador Dinámico</h2>
            <div class="counter-box">
                <button id="btnRestar" class="btn-counter">-</button>
                <span id="valorContador">0</span>
                <button id="btnSumar" class="btn-counter">+</button>
            </div>
        </section>

        <!-- Reto Adicional: Formulario -->
        <section class="card">
            <h2>Contacto / Registro (Reto)</h2>
            <form id="formContacto">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" required placeholder="Tu nombre">

                <label for="correo">Correo:</label>
                <input type="email" id="correo" required placeholder="tu@correo.com">

                <button type="submit">Enviar</button>
            </form>
            <p id="mensajeFormulario" class="mensaje-alerta"></p>
        </section>

    </div>

    <script>
        // 1. Funcionalidad de Saludar
        const btnSaludar = document.getElementById('btnSaludar');
        const mensaje = document.getElementById('mensaje');

        btnSaludar.addEventListener('click', () => {
            mensaje.textContent = "¡Bienvenido a mi proyecto Laravel! La interacción con JavaScript funciona correctamente.";
            mensaje.classList.add('mensaje-alerta');
        });

        // 2. Funcionalidad del Contador
        let contador = 0;
        const valorContador = document.getElementById('valorContador');
        const btnSumar = document.getElementById('btnSumar');
        const btnRestar = document.getElementById('btnRestar');

        btnSumar.addEventListener('click', () => {
            contador++;
            valorContador.textContent = contador;
        });

        btnRestar.addEventListener('click', () => {
            if (contador > 0) {
                contador--;
                valorContador.textContent = contador;
            }
        });

        // 3. Funcionalidad del Formulario (Reto Adicional)
        const formContacto = document.getElementById('formContacto');
        const mensajeFormulario = document.getElementById('mensajeFormulario');

        formContacto.addEventListener('submit', (e) => {
            e.preventDefault();
            const nombre = document.getElementById('nombre').value;
            mensajeFormulario.textContent = `¡Gracias ${nombre}! Tus datos han sido recibidos con éxito.`;
            formContacto.reset();
        });
    </script>
</body>
</html>  