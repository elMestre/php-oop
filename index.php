<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>HTML Starter — oop</title>
    <link rel="stylesheet" href="css/style.css" />
    <script defer src="js/script.js"></script>
    <style>
        footer {
            background-color: red;
            position: absolute;
            bottom: 0;
            width: 100%;
            text-align: center;
        }
    </style>
</head>
<body>
    <header class="site-header">
        <div class="container">
            <h1>HTML Starter</h1>
            <div class="actions">
                <button id="toggleTheme">Toggle theme</button>
            </div>
        </div>
    </header>

    <main class="container">
        <?php
            // echo(dirname(__FILE__));
            include 'main.php';
        ?>

        <form action="#" method="post">

            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            <br><br>

            <label for="cantidad">Cantidad:</label>
            <input type="number" id="cantidad" name="cantidad" min="0" required>
            <br><br>

            <span>¿Activo?</span><br>
            <input type="radio" id="si" name="activo" value="si" required>
            <label for="si">Sí</label>

            <input type="radio" id="no" name="activo" value="no">
            <label for="no">No</label>
            <br><br>

            <button type="submit">Enviar</button>

        </form>


    </main>
</html>
