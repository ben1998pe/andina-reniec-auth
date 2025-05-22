<?php
if (!defined('ABSPATH')) exit;

if (empty($url)) {
    echo '<p>⚠️ Configura primero el plugin RENIEC Auth.</p>';
    return;
}
?>
<div class="reniec-login">
    <a class="reniec-btn" href="<?php echo esc_url($url); ?>">
        Ingresar con RENIEC
    </a>
</div>
