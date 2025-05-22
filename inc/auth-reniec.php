<?php
require_once ANDINA_RENIEC_AUTH_PATH . 'vendor/reniec/idaas/src/ReniecIdaasClient.php';

function andina_generate_reniec_url() {
    $json_path = ANDINA_RENIEC_AUTH_PATH . 'reniec_idaas.json';

    try {
        $client = new \Reniec\Idaas\ReniecIdaasClient($json_path);
        return $client->getLoginUrl();
    } catch (Exception $e) {
        return '';
    }
}

function andina_reniec_button_shortcode() {
    $url = andina_generate_reniec_url();

    ob_start();
    include ANDINA_RENIEC_AUTH_PATH . 'templates/shortcode-view.php';
    return ob_get_clean();
}
add_shortcode('boton_reniec', 'andina_reniec_button_shortcode');