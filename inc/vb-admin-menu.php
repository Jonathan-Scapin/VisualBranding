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
        </div>
    <?php
}

add_action( 'admin_init', 'my_settings_init' );

function my_settings_init() {

    add_settings_section(
        'sample_page_setting_section',
        __( 'Custom colors', 'my-textdomain' ),
        'my_setting_section_callback_function',
        'sample-page'
    );

        add_settings_field(
            'color_1',
            __( 'Color 1', 'my-textdomain' ),
            'my_setting_color_1',
            'sample-page',
            'sample_page_setting_section'
         );
 
         register_setting( 'sample-page', 'color_1' );
         
         add_settings_field(
            'color_2',
            __( 'Color 2', 'my-textdomain' ),
            'my_setting_color_2',
            'sample-page',
            'sample_page_setting_section'
         );
 
         register_setting( 'sample-page', 'color_2' );

         add_settings_field(
            'color_3',
            __( 'Color 3', 'my-textdomain' ),
            'my_setting_color_3',
            'sample-page',
            'sample_page_setting_section'
         );
 
         register_setting( 'sample-page', 'color_3' );

         add_settings_field(
            'color_4',
            __( 'Color 4', 'my-textdomain' ),
            'my_setting_color_4',
            'sample-page',
            'sample_page_setting_section'
         );
 
         register_setting( 'sample-page', 'color_4' );

         add_settings_field(
            'color_5',
            __( 'Color 5', 'my-textdomain' ),
            'my_setting_color_5',
            'sample-page',
            'sample_page_setting_section'
         );
 
         register_setting( 'sample-page', 'color_5' );

}


function my_setting_section_callback_function() {
    echo '<p>Enter your color codes hex</p>';
}

function my_setting_color_1() {
    ?>
    <div style="display: flex; align-items:center;">
        <label for="color_1"><?php _e( 'Color 1', 'my-textdomain' ); ?></label>
        <input type="text" name="color_1" id="color_1" value="<?php echo get_option( 'color_1' ); ?>">
        <div id="color" style="border: 1px solid gray; border-radius:5px; width:40px; height:25px; background-color:<?php echo get_option( 'color_1' ); ?>"></div>
    </div>
    <?php
}

function my_setting_color_2() {
    ?>
    <div style="display: flex; align-items:center;">
        <label for="color_2"><?php _e( 'Color 2', 'my-textdomain' ); ?></label>
        <input type="text" name="color_2" id="color_2" value="<?php echo get_option( 'color_2' ); ?>">
        <div id="color" style="border: 1px solid gray; border-radius:5px; width:40px; height:25px; background-color:<?php echo get_option( 'color_2' ); ?>"></div>
    </div>
    <?php
}

function my_setting_color_3() {
    ?>
    <div style="display: flex; align-items:center;">
        <label for="color_3"><?php _e( 'Color 3', 'my-textdomain' ); ?></label>
        <input type="text" name="color_3" id="color_3" value="<?php echo get_option( 'color_3' ); ?>">
        <div id="color" style="border: 1px solid gray; border-radius:5px; width:40px; height:25px; background-color:<?php echo get_option( 'color_3' ); ?>"></div>
    </div>
    <?php
}

function my_setting_color_4() {
    ?>
    <div style="display: flex; align-items:center;">
        <label for="color_4"><?php _e( 'Color 4', 'my-textdomain' ); ?></label>
        <input type="text" name="color_4" id="color_4" value="<?php echo get_option( 'color_4' ); ?>">
        <div id="color" style="border: 1px solid gray; border-radius:5px; width:40px; height:25px; background-color:<?php echo get_option( 'color_4' ); ?>"></div>
    </div>
    <?php
}

function my_setting_color_5() {
    ?>
    <div style="display: flex; align-items:center;">
        <label for="color_5"><?php _e( 'Color 5', 'my-textdomain' ); ?></label>
        <input type="text" name="color_5" id="color_5" value="<?php echo get_option( 'color_5' ); ?>">
        <div id="color" style="border: 1px solid gray; border-radius:5px; width:40px; height:25px; background-color:<?php echo get_option( 'color_5' ); ?>"></div>
    </div>
    <?php
}