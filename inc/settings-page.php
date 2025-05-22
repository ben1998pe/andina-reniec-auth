<?php


function andina_reniec_register_settings() {
    add_option('andina_reniec_client_id', '');
    add_option('andina_reniec_client_secret', '');
    add_option('andina_reniec_redirect_uri', '');

    register_setting('andina_reniec_options_group', 'andina_reniec_client_id');
    register_setting('andina_reniec_options_group', 'andina_reniec_client_secret');
    register_setting('andina_reniec_options_group', 'andina_reniec_redirect_uri');
}
add_action('admin_init', 'andina_reniec_register_settings');

function andina_reniec_register_options_page() {
    add_options_page('RENIEC Auth', 'RENIEC Auth', 'manage_options', 'andina-reniec-auth', 'andina_reniec_options_page');
}
add_action('admin_menu', 'andina_reniec_register_options_page');

function andina_reniec_options_page() {
    ?>
    <div class="wrap">
        <h1>Configuración RENIEC - IDAAS Perú</h1>
        <form method="post" action="options.php">
            <?php settings_fields('andina_reniec_options_group'); ?>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Client ID</th>
                    <td><input type="text" name="andina_reniec_client_id" value="<?php echo esc_attr(get_option('andina_reniec_client_id')); ?>" size="40" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Client Secret</th>
                    <td><input type="text" name="andina_reniec_client_secret" value="<?php echo esc_attr(get_option('andina_reniec_client_secret')); ?>" size="40" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Redirect URI</th>
                    <td><input type="text" name="andina_reniec_redirect_uri" value="<?php echo esc_attr(get_option('andina_reniec_redirect_uri')); ?>" size="60" /></td>
                </tr>
            </table>
            <?php submit_button(); ?>
        </form>
    </div>
    <?php
}