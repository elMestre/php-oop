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

    </main>
</html>
