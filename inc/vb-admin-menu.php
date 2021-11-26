<?php 
/*
 * Add visualBranding new menu to the Admin Control Panel
 */
 
function visualBranding_admin_menu() {
    add_menu_page(
        __( 'visual branding', 'visualBranding-textdomain' ),
        __( 'Visual Branding', 'visualBranding-textdomain' ),
        'manage_options',
        'sample-page',
        'visualBranding_admin_page_contents',
        'dashicons-admin-appearance',
        3
    );
}

add_action( 'admin_menu', 'visualBranding_admin_menu' );


function visualBranding_admin_page_contents() {
    ?>
        <div class="wrap">
            <h1> <?php esc_html_e( 'Visual Branding Admin Page', 'my-plugin-textdomain' ); ?> </h1>
            <form method="POST" action="options.php">
                <?php
                settings_fields( 'sample-page' );
                do_settings_sections( 'sample-page' );
                submit_button();
                ?>
            </form>
            <form method="POST" action="options.php">
                <?php
                settings_fields( 'add-font-page' );
                do_settings_sections( 'add-font-page' );
                submit_button();
                ?>
            </form>
        </div>
    <?php
}