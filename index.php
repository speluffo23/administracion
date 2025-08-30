<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración de Consorcio</title>
    <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" href="index-specific.css"> </head>
<body>
    <div class="main-container">
        <header>
            <div class="container">
                <div class="logo">
                    <a href="index.html">
                        <img src="Imágenes/logo2.png" alt="Logo">
                    </a>
                </div>
                <div class="menu-container">
                    <nav>
                        <ul>
                            <li><a href="index.php">Inicio</a></li>
                            <li><a href="administracion.php">Administración</a></li>
                            <li><a href="mandatario.php">Mandatario</a></li>
                            <li><a href="contact.php">Contactos</a></li>
                            <li><a href="legales.php">Legales</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>

        <main>
            <section class="hero">
                <div class="container">
                    <h1>Bienvenidos</h1>
                    <p>Ofrecemos una gestión eficaz y transparente para su comunidad. Brindamos soluciones profesionales, garantizando un sistema financiero ordenado y accesible para todos.</p>
                    <a href="administracion.html" class="cta-button">Conoce nuestros servicios</a>
                </div>
            </section>

            <section class="services">
                <div class="container">
                    <h2>Nuestros Servicios</h2>
                    <div class="services-grid">
                        <div class="service-item">
                            <h3>Gestión Integral</h3>
                            <p>Mantenemos su consorcio en perfecto estado, con una gestión completa de áreas comunes y mantenimiento preventivo.</p>
                            <img src="Imágenes/Contactos/gestion.png" alt="Gestión Integral del consorcio">
                        </div>
                        
                        <div class="service-item">
                            <h3>Finanzas Transparentes</h3>
                            <p>Garantizamos una administración clara y honesta de los recursos económicos del consorcio.</p>
                            <img src="Imágenes/Contactos/finanzas.png" alt="Finanzas Transparentes, alcancía de cristal">
                        </div>

                        <div class="service-item">
                            <h3>Comunicación Efectiva</h3>
                            <p>Fomentamos el diálogo abierto y constante entre la administración y los copropietarios.</p>
                            <img src="Imágenes/Contactos/comunicacion.png" alt="Comunicación Efectiva, personas dialogando">
                        </div>
                    </div>
                </div>
            </section>

            <section class="payment-methods">
                <div class="container">
                    <h2>Métodos de Pago</h2>
                    <div class="payment-options">
                        
                        <div class="payment-item">
                            <a href="URL_DEL_DEBITO_AUTOMATICO">
                                <img src="Imágenes/Pagos/Debito.png" alt="Débito Automático">
                            </a>
                            <p>Débito Automático</p>
                        </div>

                        <div class="payment-item">
                            <a href="URL_DEL_DEPOSITO">
                                <img src="Imágenes/Pagos/Deposito.png" alt="Depósito">
                            </a>
                            <p>Depósito</p>
                        </div>

                        <div class="payment-item">
                            <a href="URL_DE_PAGO_FACIL">
                                <img src="Imágenes/Pagos/pagofacil.png" alt="Pago Fácil">
                            </a>
                            <p>Pago Fácil</p>
                        </div>

                        <div class="payment-item">
                            <a href="URL_DE_RAPI_PAGO">
                                <img src="Imágenes/Pagos/rapipago.png" alt="Rapi Pago">
                            </a>
                            <p>Rapi Pago</p>
                        </div>

                        <div class="payment-item">
                            <a href="URL_DE_MERCADO_PAGO">
                                <img src="Imágenes/Pagos/mercadopago.png" alt="Mercado Pago">
                            </a>
                            <p>Mercado Pago</p>
                        </div>

                        <div class="payment-item">
                            <a href="URL_DE_PAGOMISCUENTAS">
                                <img src="Imágenes/Pagos/pagosmiscuentas.png" alt="PagoMisCuentas">
                            </a>
                            <p>PagoMisCuentas</p>
                        </div>

                        <div class="payment-item">
                            <a href="URL_DE_TRANSFERENCIA">
                                <img src="Imágenes/Pagos/transferencia.png" alt="Transferencia">
                            </a>
                            <p>Transferencia</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <footer>
        <div class="container">
            <p>© 2025 Administración de Consorcio. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>