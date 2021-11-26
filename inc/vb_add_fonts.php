<?php

add_action( 'admin_init', 'myFont_settings_init' );

function myFont_settings_init() {

    add_settings_section(
        'add_font_page_setting_section',
        __( 'Custom Font', 'my-textdomain' ),
        'myFont_setting_section_callback_function',
        'add-font-page'
    );

        add_settings_field(
            'font_1',
            __( 'font 1', 'my-textdomain' ),
            'myFont_setting_font_1',
            'add-font-page',
            'add_font_page_setting_section'
         );
 
         register_setting( 'add-font-page', 'font_1' );
}


function myFont_setting_section_callback_function() {
    echo '<p>Enter your font codes</p>';
}

function myFont_setting_font_1() {
    ?>
    <div class="fontBlock">
        <input type="text" name="font_1" id="font_1" value="<?php echo get_option( 'font_1' ); ?>">
        <div class="fontView" style="background-font:<?php echo get_option( 'font_1' ); ?>"></div>
    </div>
    <?php
}