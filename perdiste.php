<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Perdiste</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Lo sentimos...</h1>
        <p>Has perdido la partida. La palabra secreta era: <strong><?php echo $_SESSION['palabra']; ?></strong>.</p>
        <a href="index.php">
            <button>Jugar de nuevo</button>
        </a>
    </div>
</body>
</html>
