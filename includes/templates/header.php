<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="/mobiliaria/build/css/app.css">
    <link rel="stylesheet" href="/mobiliaria/src/app.css">
    <link rel="stylesheet" href="/mobiliaria/src/js/app.css">
    
</head>
<body>
    <header class="header <?php echo $inicio ? 'inicio': ''; ?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="index.php">
                    <img  src="/mobiliaria/build/img/logo.svg" alt="Logo Tipo de Bienes Raices">
                </a>

                <div class="mobile-menu">
                    <img src="/mobiliaria/build/img/barras.svg" alt="icono de menu responcivo">

                </div>
                <div class="derecha">
                    <img class="dark-mode-boton" src="/mobiliaria/build/img/dark-mode.svg" alt="dark">
                    <nav class="navegacion">
                        <a href="nosotros.php">Nosotros</a>
                        <a href="anuncios.php">Anuncios</a>
                        <a href="blog.php">Blog</a>
                        <a href="contacto.php">Contacto</a>
                    </nav>
                </div>
                
            </div>
            <!-- cierrer de la barra -->
            <?php if($inicio) { ?>
            <h1>Venta de Casas y Departamentos Exclucivos de Lujo</h1>
            <?php } ?>
        </div>

    </header>

    <script>src="mobiliaria/src/js/app.js"</script>
</body>