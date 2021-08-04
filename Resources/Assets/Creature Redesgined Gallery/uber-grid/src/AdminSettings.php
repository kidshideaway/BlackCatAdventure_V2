<?php


namespace PfhubPortfolio;


class AdminSettings
{
    public function __construct() {
        add_action( 'pfhub_portfolio_save_options', array( __CLASS__, 'save_options' ) );
    }

    public static function load_page() {
        if ( isset( $_GET['page'] ) && $_GET['page'] == 'Options_portfolio_styles' ) {
            if ( isset( $_GET['task'] )  && $_GET['task'] == 'save') {
                do_action( 'pfhub_portfolio_save_options' );
            }
            self::show_page();
        }
    }

    public static function show_page() {
        require( PFHUB_PORTFOLIO_TEMPLATES_PATH.DIRECTORY_SEPARATOR.'admin-settings.php' );
    }

    public function save_options(){
//        if ( !isset( $_REQUEST['pfhub_portfolio_nonce_save_gen_options'] ) || ! wp_verify_nonce( $_REQUEST['pfhub_portfolio_nonce_save_gen_options'], 'portfolio_gallery_nonce_save_gen_options' ) ) {
//            wp_die( 'Security check fail' );
//        }
        if ( isset( $_POST['params'] ) ) {
            $params = $_POST['params'];
            foreach ( $params as $name => $value ) {
                if( get_option( $name ) !=  $value) {
                    update_option($name, wp_unslash($value));
                }
            }
            ?>
            <div class="updated"><p><strong><?php _e( 'Item Saved' ); ?></strong></p></div>
            <?php
        }
    }
}
