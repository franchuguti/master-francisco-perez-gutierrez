<?php
// Bloquea acceso directo
if (!defined('ABSPATH')) exit;

// Banner de cookies en el footer
function fh_cookie_banner_html() {
    ?>
    <div id="cookie-banner" class="cookie-banner" style="display: none;">
        <p>
            Utilizamos cookies para mejorar tu experiencia. 
            <a href="/politica-de-cookies" target="_blank">Leer más</a>
        </p>
        <div class="cookie-buttons">
            <button id="reject-cookies">Rechazar</button>
            <button id="accept-cookies">Aceptar</button>  
        </div>
    </div>

    <style>
    .cookie-banner {
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        background: #FEF5E4;
        color: #fff;
        text-align: center;
        padding: 15px;
        font-size: 14px;
        z-index: 9999;
    }
    .cookie-banner a {
        color: #0bf;
        text-decoration: underline;
        margin-left: 5px;
    }
    .cookie-buttons {
        margin-top: 10px;
    }
    .cookie-buttons button {
        background: #0bf;
        border: none;
        padding: 8px 16px;
        margin: 5px;
        cursor: pointer;
        color: white;
        border-radius: 4px;
        font-size: 14px;
    }
    .cookie-buttons #reject-cookies {
        background: #888;
    }
    </style>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        var banner = document.getElementById('cookie-banner');

        function setCookie(name, value, days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            document.cookie = name + "=" + value + "; expires=" + date.toUTCString() + "; path=/";
        }

        if (!document.cookie.includes('fh_cookie_consent=')) {
            banner.style.display = 'block';
        }

        document.getElementById('accept-cookies').addEventListener('click', function () {
            setCookie('fh_cookie_consent', 'accepted', 30);
            location.reload();
        });

        document.getElementById('reject-cookies').addEventListener('click', function () {
            setCookie('fh_cookie_consent', 'rejected', 30);
            banner.style.display = 'none';
        });
    });
    </script>
    <?php
}
add_action('wp_footer', 'fh_cookie_banner_html');

// Google Analytics si hay consentimiento
function fh_google_analytics_script() {
    if (isset($_COOKIE['fh_cookie_consent']) && $_COOKIE['fh_cookie_consent'] === 'accepted') {
        ?>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-XXXXXXXXXX');
        </script>
        <?php
    }
}
add_action('wp_head', 'fh_google_analytics_script');