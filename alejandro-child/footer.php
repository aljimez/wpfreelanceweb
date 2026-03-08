<?php
/**
 * The footer for our theme
 */
?>
    </div><!-- #content -->

    <footer class="site-footer section-pad bg-light border-top text-center">
        <div class="container">
            <p class="fw-bold mb-3">ALEJANDRO<span>.DEV</span></p>
            <div class="legal-links mb-4 d-flex justify-content-center gap-4 flex-wrap">
                <a href="<?php echo esc_url( home_url( '/aviso-legal' ) ); ?>" class="text-muted small">Aviso Legal</a>
                <a href="<?php echo esc_url( home_url( '/politica-de-privacidad' ) ); ?>" class="text-muted small">Política de Privacidad</a>
                <a href="<?php echo esc_url( home_url( '/politica-de-cookies' ) ); ?>" class="text-muted small">Política de Cookies</a>
            </div>
            <p class="text-muted small">&copy; <?php echo date('Y'); ?> Alejandro Freelancer. Todos los derechos reservados.</p>
        </div>
    </footer>

   

    <!-- Botón Flotante WhatsApp (Solo en Home) -->
    <?php if ( is_front_page() ) : ?>
    <!-- WhatsApp Bubble -->
    <div id="whatsapp-bubble" class="whatsapp-bubble">
        ¿Tienes dudas? ¡Pregúntame! 👋
    </div>
    <a href="https://wa.me/34664610640?text=Hola%20Alejandro,%20he%20visto%20tu%20web%20y%20me%20gustaría%20agendar%20un%20diagnóstico%20para%20mi%20academia." class="whatsapp-float" target="_blank" rel="noopener noreferrer">
        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
    </a>
    <?php endif; ?>

    <!-- Exit Intent Popup -->
   <!--  <div id="exit-popup" class="exit-popup">
        <div class="exit-popup-content">
            <span class="exit-popup-close">&times;</span>
            <h2>¡ESPERA UN MOMENTO! 🛑</h2>
            <p>Antes de irte, no pierdas la oportunidad de automatizar tu academia. He reservado 2 huecos esta semana para diagnósticos gratuitos.</p>
            <a href="<?php echo esc_url( home_url( '#contacto' ) ); ?>" id="exit-popup-cta" class="btn btn-primary">AGENDAR MI DIAGNÓSTICO AHORA</a>
            <p style="margin-top: 1.5rem; font-size: 0.8rem;">Solo tardas 30 segundos.</p>
        </div>
    </div> -->

    <!-- Cookie Banner -->
    <div id="cookie-banner" class="cookie-banner">
        <div class="container-cookie">
            <div class="cookie-content">
                <p class="small mb-0">Utilizamos cookies para mejorar tu experiencia. Al navegar, aceptas nuestra <a href="<?php echo esc_url( home_url( 'politica-de-cookies' ) ); ?>" class="text-primary fw-bold">política de cookies</a>.</p>
            </div>
            <div class="cookie-actions">
                <button id="accept-cookies" class="btn-cookie">Entendido</button>
            </div>
        </div>
    </div>

    <!-- Gemini AI Chatbot -->
    <!--
    <div id="aj-chatbot" class="aj-chatbot">
        <div class="chatbot-header">
            <span class="fw-bold">Alejandro AI</span>
            <span class="chatbot-close">&times;</span>
        </div>
        <div id="chatbot-messages" class="chatbot-messages">
            <div class="message ai">¡Hola! Soy el asistente de Alejandro. ¿En qué puedo ayudarte hoy con tu academia?</div>
        </div>
        <div class="chatbot-input">
            <input type="text" id="chat-input" placeholder="Escribe tu duda...">
            <button id="send-chat">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 12H19M19 12L13 6M19 12L13 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </button>
        </div>
    </div>

    <div id="chatbot-bubble" class="chatbot-bubble">
        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7 8H17M7 12H14M21 12C21 16.9706 16.9706 21 12 21C10.5113 21 9.10825 20.6375 7.87241 19.9936L3 21L4.15093 16.5964C3.41499 15.244 3 13.6701 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
    </div>
    -->

    <!-- Scripts de animación y funcionalidades -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // ... (keeping existing logic for cookies, aos, scroll, exit, whatsapp) ...
            
            // --- CHATBOT LOGIC (DISABLED) ---
            /*
            const chatBubble = document.getElementById('chatbot-bubble');
            const chatBox = document.getElementById('aj-chatbot');
            const closeChat = document.querySelector('.chatbot-close');
            const sendBtn = document.getElementById('send-chat');
            const chatInput = document.getElementById('chat-input');
            const messagesContainer = document.getElementById('chatbot-messages');

            if (chatBubble) {
                chatBubble.addEventListener('click', () => {
                    chatBox.classList.toggle('active');
                });
            }

            if (closeChat) {
                closeChat.addEventListener('click', () => {
                    chatBox.classList.remove('active');
                });
            }

            function addMessage(text, role) {
                const div = document.createElement('div');
                div.className = `message ${role}`;
                div.textContent = text;
                messagesContainer.appendChild(div);
                messagesContainer.scrollTop = messagesContainer.scrollHeight;
            }

            async function sendMessage() {
                const message = chatInput.value.trim();
                if (!message) return;

                addMessage(message, 'user');
                chatInput.value = '';
                
                const loadingDiv = document.createElement('div');
                loadingDiv.className = 'message ai thinking';
                loadingDiv.textContent = '...';
                messagesContainer.appendChild(loadingDiv);

                try {
                    const response = await fetch(aj_chat_config.ajax_url, {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                        body: new URLSearchParams({
                            action: 'aj_chat_message',
                            message: message,
                            nonce: aj_chat_config.nonce
                        })
                    });

                    const data = await response.json();
                    loadingDiv.remove();
                    
                    if (data.success) {
                        addMessage(data.data, 'ai');
                    } else {
                        const errorMsg = data.data || 'Error desconocido del servidor.';
                        addMessage('⚠️ ' + errorMsg, 'ai');
                    }
                } catch (error) {
                    loadingDiv.remove();
                    addMessage('❌ Error crítico al conectar con el servidor: ' + error.message, 'ai');
                }
            }

            if (sendBtn) sendBtn.addEventListener('click', sendMessage);
            if (chatInput) chatInput.addEventListener('keypress', (e) => {
                if (e.key === 'Enter') sendMessage();
            });
            */

            // Reutilizar lógica existente para otras cosas...
            // (Ya está incluido en el resto del archivo)
            // Gestión de Cookies
            const cookieBanner = document.getElementById('cookie-banner');
            const acceptBtn = document.getElementById('accept-cookies');

            if (cookieBanner && !localStorage.getItem('cookies-accepted')) {
                cookieBanner.classList.add('show');
            }

            if (acceptBtn) {
                acceptBtn.addEventListener('click', function() {
                    localStorage.setItem('cookies-accepted', 'true');
                    cookieBanner.classList.remove('show');
                });
            }

            // Inicializar animaciones de scroll (AOS)
            if (typeof AOS !== 'undefined') {
                AOS.init({
                    duration: 800,
                    once: true,
                    offset: 50,
                    easing: 'ease-out'
                });
            }

            // Scroll suave para todos los enlaces internos
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    const href = this.getAttribute('href');
                    if (href === '#') return;
                    
                    if (href.startsWith('#')) {
                        e.preventDefault();
                        const targetElement = document.querySelector(href);
                        if (targetElement) {
                            window.scrollTo({
                                top: targetElement.offsetTop - 80,
                                behavior: 'smooth'
                            });
                        }
                        
                        // Cerrar popup si se hace clic en el CTA
                        if (this.id === 'exit-popup-cta') {
                            document.getElementById('exit-popup').classList.remove('active');
                        }
                    }
                });
            });

            // --- EXIT INTENT POPUP ---
            let popupShown = false;
            let timeOnPage = 0;
            const exitPopup = document.getElementById('exit-popup');
            
            setInterval(() => { timeOnPage++; }, 1000);

            if (exitPopup) {
                document.addEventListener('mouseleave', function(e) {
                    if (e.clientY < 0 && !popupShown && !localStorage.getItem('popup-dismissed') && timeOnPage >= 15) {
                        exitPopup.classList.add('active');
                        popupShown = true;
                    }
                });

                const closePopup = document.querySelector('.exit-popup-close');
                if (closePopup) {
                    closePopup.addEventListener('click', function() {
                        exitPopup.classList.remove('active');
                        localStorage.setItem('popup-dismissed', 'true');
                    });
                }
            }

            // --- WHATSAPP DYNAMIC BUBBLE ---
            setTimeout(() => {
                const bubble = document.getElementById('whatsapp-bubble');
                if (bubble) bubble.style.display = 'block';
            }, 6000);

            // --- MOBILE MENU BEHAVIOR ---
            const navLinks = document.querySelectorAll('.navbar-nav .nav-link, .nav-cta');
            const menuCollapse = document.getElementById('navbarNav');

            navLinks.forEach(link => {
                link.addEventListener('click', function() {
                    if (menuCollapse && menuCollapse.classList.contains('show')) {
                        const bsCollapse = new bootstrap.Collapse(menuCollapse);
                        bsCollapse.hide();
                    }
                });
            });
        });
    </script>

<?php wp_footer(); ?>

</body>
</html>
