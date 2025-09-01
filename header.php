<?php
$paginaActual = basename($_SERVER['PHP_SELF']);
?>

<header>
    <div class="container header-container">
        <div class="logo">
            <a href="index.php">
                <img src="Imágenes/logos/logo5.png" alt="Logo">
            </a>
        </div>
        <div class="auth-links">
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
                <a href="panel.php">Perfil</a>
                <a href="logout.php">Cerrar Sesión</a>
            <?php else: ?>
                <a href="login.html">Iniciar Sesión</a>
                <a href="registro.html">Registrarse</a>
            <?php endif; ?>
        </div>
    </div>
    <div class="container nav-container">
        <nav class="main-nav">
            <ul>
                <li class="<?php echo ($paginaActual == 'index.php') ? 'active' : ''; ?>">
                    <a href="index.php">Inicio</a>
                </li>
                <li class="<?php echo ($paginaActual == 'administracion.php') ? 'active' : ''; ?>">
                    <a href="administracion.php">Administración</a>
                </li>
                <li class="<?php echo ($paginaActual == 'mandatario.php') ? 'active' : ''; ?>">
                    <a href="mandatario.php">Mandatario</a>
                </li>
                <li class="<?php echo ($paginaActual == 'contact.php') ? 'active' : ''; ?>">
                    <a href="contact.php">Contactos</a>
                </li>
                <li class="<?php echo ($paginaActual == 'legales.php') ? 'active' : ''; ?>">
                    <a href="legales.php">Legales</a>
                </li>
            </ul>
        </nav>
    </div>
</header>