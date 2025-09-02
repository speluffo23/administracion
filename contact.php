<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Contáctanos para obtener más información sobre nuestros servicios. Llámanos, envíanos un email o visita nuestra oficina en Buenos Aires.">
    <title>Contactos</title>
    <link rel="stylesheet" href="stylos/contact.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main-container">
        <main>
            <section class="contact-section hero">
                <div class="container centered-content">
                    <h1>Contacto</h1>
                    <p>Si tienes alguna pregunta o necesitas más información, no dudes en contactarnos a través de los siguientes medios:</p>
                </div>
            </section>

            <section class="contact-section details-section">
                <div class="container">
                    <div class="contact-grid">
                        <div class="contact-info-block">
                            <h2>Nuestra Información</h2>
                            <ul class="contact-list">
                                <li><i class="fas fa-envelope"></i> Email: jaquesus2016@gmail.com</li>
                                <li><i class="fas fa-phone"></i> Teléfono: (11) 54612133</li>
                                <li><i class="fas fa-id-card"></i> CUIT: 27-23087140-5</li>
                                <li><i class="fas fa-building"></i> RPA: 17313 // RPAC: 1475</li>
                                <li><i class="fas fa-map-marker-alt"></i> Dirección: Callao 2132, Ciudad Madero, Buenos Aires, Argentina</li>
                            </ul>
                            
                            <div class="social-links">
                                <a href="https://wa.me/+5491154612133" target="_blank" class="contact-link"><i class="fab fa-whatsapp"></i> WhatsApp</a>
                                <a href="#" class="contact-link"><i class="fas fa-id-card"></i> vCard</a>
                            </div>
                        </div>

                        <div class="contact-form-block">
                            <h2>Envíanos un Mensaje</h2>
                            
                            <form id="contactForm" action="https://formsubmit.co/ajax/jaquesus2016@gmail.com" method="POST">
                                <input type="text" name="name" placeholder="Tu Nombre" required>
                                <input type="email" name="email" placeholder="Tu Email" required>
                                <textarea name="message" placeholder="Tu Mensaje" rows="5" required></textarea>
                                <button type="submit" class="submit-btn">Enviar Mensaje</button>
                            </form>

                            <div id="thankYouMessage" style="display:none;">
                                <h2>¡Gracias por tu mensaje!</h2>
                                <p>Tu mensaje se ha enviado correctamente. Te responderemos pronto.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <section class="contact-section qr-section">
                <div class="container">
                    <h2>Escanea y Conecta</h2>
                    <div class="qr-container">
                        <div class="qr-item">
                            <img src="Imágenes/whatsapp.webp" alt="QR WhatsApp">
                            <p>WhatsApp</p>
                        </div>
                        <div class="qr-item">
                            <img src="Imágenes/vcard.webp" alt="QR VCard Contacto">
                            <p>Contacto (vCard)</p>
                        </div>
                        <div class="qr-item">
                            <img src="Imágenes/MAIL.webp" alt="QR Mail">
                            <p>Correo Electrónico</p>
                        </div>
                        <div class="qr-item">
                            <img src="Imágenes/Mapa.webp" alt="QR Mapa">
                            <p>Ubicación</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="map-section">
                <div class="container">
                    <h2>Encuéntranos en el Mapa</h2>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6560.437246171859!2d-58.50334659218785!3d-34.69966534833199!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcced016e5158b%3A0xb6a11a0231920d51!2sCallao%202132%2C%20B1768%20Villa%20Madero%2C%20Provincia%20de%20Buenos%20Aires%2C%20Argentina!5e0!3m2!1ses!2sus!4v1718498226303!5m2!1ses!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </section>
        </main>
        
    <footer>
        <div class="container">
            <div class="footer-info-container">
                <div class="footer-links">
                    <a href="terminos-y-condiciones.php">Términos y Condiciones</a>
                    <a href="politica-de-privacidad.php">Política de Privacidad</a>
                    <a href="contact.php">Contacto</a>
                </div>
                <p>&copy; 2025 Administración de Consorcio. Todos los derechos reservados.</p>
                <p>Teléfono: 1154612133 | Correo electrónico: jaquesus2016@gmail.com</p>
            </div>
        </div>
    </footer>
    </div>
    
    <script>
        const form = document.getElementById('contactForm');
        const thankYouMessage = document.getElementById('thankYouMessage');

        form.addEventListener('submit', function(event) {
            event.preventDefault(); // Evita el envío tradicional del formulario

            const formData = new FormData(form);

            fetch(form.action, {
                method: form.method,
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    form.style.display = 'none'; // Oculta el formulario
                    thankYouMessage.style.display = 'block'; // Muestra el mensaje de gracias
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Hubo un error al enviar el mensaje. Por favor, inténtalo de nuevo.');
            });
        });
    </script>
</body>
</html>