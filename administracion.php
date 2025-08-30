<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Administración</title>

    <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" href="stylos/administracion.css">
</head>
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
                            <li><a href="index.html">Inicio</a></li>
                            <li><a href="administracion.html">Administración</a></li>
                            <li><a href="mandatario.html">Mandatario</a></li>
                            <li><a href="contact.html">Contactos</a></li>
                            <li><a href="legales.html">Legales</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>

        <main>
            <section class="hero">
                <div class="container">
                    <h1>Bienvenidos a la Administración de Consorcio</h1>
                    <p>RPA: 17313 // RPAC: 1475</p>
                    <p>En respuesta al acelerado ritmo de vida y a los constantes cambios, nuestra misión es ofrecer una gestión administrativa eficaz.</p>
                    <p>Proporcionamos un servicio profesional dirigido a todos los copropietarios, brindando soluciones efectivas a los diversos problemas que puedan surgir.</p>
                    <p>Nos esforzamos diariamente por ofrecer mejores y más variadas vías de comunicación, fomentando un vínculo constante entre los consorcista y la administración.</p>
                    <p>Nuestro servicio se fundamenta en un sistema financiero ordenado y transparente, accesible a todos los copropietarios.</p>
            </section>

            <section class="services-section">
                <div class="container">
                    <h2>Nuestros Servicios</h2>
                    <div class="services-grid">
                        <div class="service-item">
                            <img src="Imágenes/consorcio/liquidacion.png" alt="Liquidación de expensas">
                            <strong>Liquidación de expensas</strong>
                            <button class="open-modal-btn" data-modal-target="#modal-expensas">Ver más</button>
                        </div>
                        <div class="service-item">
                            <img src="Imágenes/consorcio/mantenimiento.png" alt="Mantenimiento preventivo">
                            <strong>Mantenimiento preventivo</strong>
                            <button class="open-modal-btn" data-modal-target="#modal-mantenimiento">Ver más</button>
                        </div>
                        <div class="service-item">
                            <img src="Imágenes/consorcio/legal.png" alt="Asesoramiento legal">
                            <strong>Asesoramiento legal</strong>
                            <button class="open-modal-btn" data-modal-target="#modal-legal">Ver más</button>
                        </div>
                        <div class="service-item">
                            <img src="Imágenes/consorcio/deudores.png" alt="Tratamiento de deudores">
                            <strong>Tratamiento de deudores</strong>
                            <button class="open-modal-btn" data-modal-target="#modal-deudores">Ver más</button>
                        </div>
                        <div class="service-item">
                            <img src="Imágenes/consorcio/mas.png" alt="Y más...">
                            <strong>Y más...</strong>
                            <button class="open-modal-btn" data-modal-target="#modal-mas">Ver más</button>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        
        <div id="modal-expensas" class="modal">
            <div class="modal-content">
                <span class="close-btn">&times;</span>
                <h3>Liquidación de expensas</h3>
                <ul>
                    <li>Elaboración de presupuestos: Creamos presupuestos detallados y transparentes para la correcta distribución de las expensas.</li>
                    <li>Reparto equitativo: Aseguramos que las expensas se distribuyan de manera justa entre los copropietarios.</li>
                   <li>Informe mensual: Proveemos informes mensuales detallados sobre el estado de las expensas y el uso de los fondos, adjuntando la documentación que respalda dichos gastos, e incluso extractos bancarios.</li>
                </ul>
            </div>
        </div>

        <div id="modal-mantenimiento" class="modal">
            <div class="modal-content">
                <span class="close-btn">&times;</span>
                <h3>Mantenimiento preventivo</h3>
                <ul>
                    <li><strong>Relevamiento y estado del edificio:</strong> Nos encargamos del monitoreo constante de las partes comunes y privadas para asegurar el correcto funcionamiento del consorcio.</li>
                    <li><strong>Inspección y mantenimiento de ascensores:</strong> Verificamos su funcionamiento seguro y eficiente para cumplir con las normativas.</li>
                    <li><strong>Limpieza y control de plagas:</strong> Mantenemos un ambiente saludable y agradable en todas las áreas compartidas.</li>
                    <li><strong>Cumplimiento de ordenanzas:</strong> Garantizamos que el edificio esté al día con todas las normativas y ordenanzas vigentes.</li>
                </ul>
            </div>
        </div>

        <div id="modal-legal" class="modal">
            <div class="modal-content">
                <span class="close-btn">&times;</span>
                <h3>Asesoramiento legal y Control de Libros</h3>
                <ul>
                <li><strong>Asesoramiento legal:</strong> Contamos con un equipo de expertos que interviene únicamente cuando es necesario, garantizando una solución eficiente y la reducción de costos.</li>
                <li><strong>Control de libros:</strong> Nos encargamos de la gestión completa y actualizada de todos los libros obligatorios del consorcio, asegurando el cumplimiento de las ordenanzas y normativas vigentes.</li>
                </ul>
            </div>
        </div>
        
        <div id="modal-deudores" class="modal">
            <div class="modal-content">
                <span class="close-btn">&times;</span>
                <h3>Tratamiento de deudores</h3>
                <ul>
                    <li>Gestión de cobros: Implementamos estrategias eficaces para la recuperación de deudas.</li>
                    <li>Negociación y acuerdos: Facilitamos acuerdos de pago con deudores para evitar conflictos legales.</li>
                    <li>Acciones legales: En caso necesario, iniciamos procedimientos legales para asegurar el cumplimiento de las obligaciones de pago.</li>
                </ul>
            </div>
        </div>

        <div id="modal-mas" class="modal">
            <div class="modal-content">
                <span class="close-btn">&times;</span>
                <h3>Y más...</h3>
                <ul>
                    <li>Servicios de contabilidad: Llevamos un control exhaustivo de las finanzas del consorcio.</li>
                    <li>Asistencia técnica: Proveemos soporte técnico para la resolución de problemas en las instalaciones.</li>
                    <li>Organización de reuniones: Facilitamos la organización de reuniones y asambleas de copropietarios.</li>
                    <li>Atención personalizada: Ofrecemos atención personalizada para resolver cualquier inquietud de los copropietarios.</li>
                </ul>
            </div>
        </div>

        <footer>
            <div class="container">
                <p>&copy; 2025 Administración de Consorcio. Todos los derechos reservados.</p>
            </div>
        </footer>
    </div>
    <script src="JS/script.js"></script>
</body>
</html>