<?php
$paginaActual = basename($_SERVER['PHP_SELF']);
?>

<header>
    <div class="container">
        <div class="logo">
            <a href="index.php">
                <img src="Imágenes/logo2.png" alt="Logo">
            </a>
        </div>
        <div class="menu-container">
            <nav>
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
                    <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
                        <li><a href="panel.php">Perfil</a></li>
                        <li><a href="logout.php">Cerrar Sesión</a></li>
                    <?php else: ?>
                        <li><a href="login.html">Iniciar Sesión</a></li>
                        <li><a href="registro.html">Registrarse</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </div>
</header>