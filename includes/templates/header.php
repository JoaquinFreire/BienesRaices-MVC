<?php  

    if(!isset($_SESSION)) {
        session_start();
    }

        $auth = $_SESSION['login'] ?? null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="/JoaquinF/bienesraices/build/css/app.css">
</head>

<body>
    <header class="header <?php echo $inicio ? 'inicio' : '' ?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/JoaquinF/bienesraices/">
                    <img src="/JoaquinF/bienesraices/build/img/logo.svg" alt="Logotipo de bienes Raices">
                </a>
                <div class="mobile-menu">
                    <img src="/JoaquinF/bienesraices/build/img/barras.svg" alt="icono menú responsive">
                </div>

                <div class="derecha">
                    <img src="/JoaquinF/bienesraices/build/img/dark-mode.svg" alt="boton dark mode" class="dark-mode-boton">
                    <nav class="navegacion">
                        <a href="/JoaquinF/bienesraices/nosotros.php">Nosotros</a>
                        <a href="/JoaquinF/bienesraices/anuncios.php">Anuncios</a>
                        <a href="/JoaquinF/bienesraices/blog.php">Blog</a>
                        <a href="/JoaquinF/bienesraices/contacto.php">Contacto</a>
                        <?php if($auth):?>
                            <a href="/JoaquinF/bienesraices/cerrar-sesion.php">Cerrar Sesión</a> 
                        <?php endif ?>
                    </nav>
                </div>
            </div>
            <!-- fin barra -->
            <?php echo $inicio ? '<h1>Venta de Casas y Departamentos Exclusivos de Lujo</h1>' : '' ?>
        </div>
    </header>