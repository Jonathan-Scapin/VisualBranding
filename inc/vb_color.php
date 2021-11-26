<?php

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
    <div class="colorBlock">
        <input type="text" name="color_1" id="color_1" value="<?php echo get_option( 'color_1' ); ?>">
        <div class="colorView" style="background-color:<?php echo get_option( 'color_1' ); ?>"></div>
    </div>
    <?php
}

function my_setting_color_2() {
    ?>
    <div class="colorBlock">
        <input type="text" name="color_2" id="color_2" value="<?php echo get_option( 'color_2' ); ?>">
        <div class="colorView" style="background-color:<?php echo get_option( 'color_2' ); ?>"></div>
    </div>
    <?php
}

function my_setting_color_3() {
    ?>
    <div class="colorBlock">
        <input type="text" name="color_3" id="color_3" value="<?php echo get_option( 'color_3' ); ?>">
        <div class="colorView" style="background-color:<?php echo get_option( 'color_3' ); ?>"></div>
    </div>
    <?php
}

function my_setting_color_4() {
    ?>
    <div class="colorBlock">
        <input type="text" name="color_4" id="color_4" value="<?php echo get_option( 'color_4' ); ?>">
        <div class="colorView" style="background-color:<?php echo get_option( 'color_4' ); ?>"></div>
    </div>
    <?php
}

function my_setting_color_5() {
    ?>
    <div class="colorBlock">
        <input type="text" name="color_5" id="color_5" value="<?php echo get_option( 'color_5' ); ?>">
        <div class="colorView" style="background-color:<?php echo get_option( 'color_5' ); ?>"></div>
    </div>
    <?php
}