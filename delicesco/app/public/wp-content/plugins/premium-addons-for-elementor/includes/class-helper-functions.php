<?php

namespace PremiumAddons;

if( ! defined('ABSPATH') ) exit;

class Helper_Functions {
    
    private static $google_localize = null;
    
    public static function is_hide_rate() {
        
        if( defined('PREMIUM_PRO_ADDONS_VERSION') ) {
            if( isset(get_option('pa_wht_lbl_save_settings')['premium-wht-lbl-rate'] ) ) {
                $hide_rate = get_option('pa_wht_lbl_save_settings')['premium-wht-lbl-rate'];
            }
        }
        
        return isset( $hide_rate ) ? $hide_rate : false;
    }
    
    public static function is_hide_about() {
        
        if( defined('PREMIUM_PRO_ADDONS_VERSION') ) {
            if(isset(get_option('pa_wht_lbl_save_settings')['premium-wht-lbl-about'])){
                $hide_about = get_option('pa_wht_lbl_save_settings')['premium-wht-lbl-about'];
            }
        }
        
        return isset( $hide_about ) ? $hide_about : false;
    }
    
    public static function is_hide_version_control() {
        
        if( defined('PREMIUM_PRO_ADDONS_VERSION') ) {
                if(isset(get_option('pa_wht_lbl_save_settings')['premium-wht-lbl-version'])){
                    $hide_version_tab = get_option('pa_wht_lbl_save_settings')['premium-wht-lbl-version'];
            }
        }
        
        return isset( $hide_version_tab ) ? $hide_version_tab : false;
    }
    
    public static function author() {
        
        if( defined('PREMIUM_PRO_ADDONS_VERSION') ) {
            if(isset(get_option('pa_wht_lbl_save_settings')['premium-wht-lbl-name'])){
                $author_free = get_option('pa_wht_lbl_save_settings')['premium-wht-lbl-name'];
            }
        }
        
        return ( isset( $author_free ) && '' != $author_free ) ? $author_free : 'Leap13';
    }
    
    public static function name() {
        
        if( defined('PREMIUM_PRO_ADDONS_VERSION') ) {
            if(isset(get_option('pa_wht_lbl_save_settings')['premium-wht-lbl-plugin-name'])){
                $name_free = get_option('pa_wht_lbl_save_settings')['premium-wht-lbl-plugin-name'];
            }
        }
        
        return ( isset( $name_free ) && '' != $name_free ) ? $name_free : 'Premium Addons for Elementor';
    }
    
    public static function is_hide_row_meta() {
        
        if( defined('PREMIUM_PRO_ADDONS_VERSION') ) {
            if( isset( get_option('pa_wht_lbl_save_settings')['premium-wht-lbl-row'] ) ){
                $hide_meta = get_option('pa_wht_lbl_save_settings')['premium-wht-lbl-row'];
            }
        }
        
        return isset( $hide_meta ) ? $hide_meta : false;
    }
   
    public static function is_hide_logo() {
        
        if( defined('PREMIUM_PRO_ADDONS_VERSION') ) {
            if(isset(get_option('pa_wht_lbl_save_settings')['premium-wht-lbl-logo'])){
                $hide_logo = get_option('pa_wht_lbl_save_settings')['premium-wht-lbl-logo'];
            }
        }
        
        return isset( $hide_logo ) ? $hide_logo : false;
    }
    
    public static function get_category() {
        
        if( defined('PREMIUM_PRO_ADDONS_VERSION') ) {
            if(isset(get_option('pa_wht_lbl_save_settings')['premium-wht-lbl-short-name'])){
                $category = get_option('pa_wht_lbl_save_settings')['premium-wht-lbl-short-name'];
            }
        }
        
        return ( isset( $category ) && '' != $category ) ? $category : __( 'Premium Addons', 'premium-addons-for-elementor' );
        
    }
    
    public static function get_prefix() {
        
        if( defined('PREMIUM_PRO_ADDONS_VERSION') ) {
            if(isset(get_option('pa_wht_lbl_save_settings')['premium-wht-lbl-prefix'])){
                $prefix = get_option('pa_wht_lbl_save_settings')['premium-wht-lbl-prefix'];
            }
        }
        
        return ( isset( $prefix ) && '' != $prefix ) ? $prefix : __('Premium', 'premium-addons-for-elementor');
    }
    
    public static function get_badge() {
        
        if( defined('PREMIUM_PRO_ADDONS_VERSION') ) {
            if(isset(get_option('pa_wht_lbl_save_settings')['premium-wht-lbl-badge'])){
                $badge = get_option('pa_wht_lbl_save_settings')['premium-wht-lbl-badge'];
            }
        }
        
        return ( isset( $badge ) && '' != $badge ) ? $badge : 'PA';
    }
    
    public static function get_google_languages() {
        
        if ( null === self::$google_localize ) {

			self::$google_localize = array(
				 'ar' => __( 'Arabic', 'premium-addons-for-elementor'),
                'eu' => __( 'Basque', 'premium-addons-for-elementor'),
                'bg' => __( 'Bulgarian', 'premium-addons-for-elementor'),
                'bn' => __( 'Bengali', 'premium-addons-for-elementor'),
                'ca' => __( 'Catalan', 'premium-addons-for-elementor'),
                'cs' => __( 'Czech', 'premium-addons-for-elementor'),
                'da' => __( 'Danish', 'premium-addons-for-elementor'),
                'de' => __( 'German', 'premium-addons-for-elementor'),
                'el' => __( 'Greek', 'premium-addons-for-elementor'),
                'en' => __( 'English', 'premium-addons-for-elementor'),
                'en-AU' => __( 'English (australian)', 'premium-addons-for-elementor'),
                'en-GB' => __( 'English (great britain)', 'premium-addons-for-elementor'),
                'es' => __( 'Spanish', 'premium-addons-for-elementor'),
                'fa' => __( 'Farsi', 'premium-addons-for-elementor'),
                'fi' => __( 'Finnish', 'premium-addons-for-elementor'),
                'fil' => __( 'Filipino', 'premium-addons-for-elementor'),
                'fr' => __( 'French', 'premium-addons-for-elementor'),
                'gl' => __( 'Galician', 'premium-addons-for-elementor'),
                'gu' => __( 'Gujarati', 'premium-addons-for-elementor'),
                'hi' => __( 'Hindi', 'premium-addons-for-elementor'),
                'hr' => __( 'Croatian', 'premium-addons-for-elementor'),
                'hu' => __( 'Hungarian', 'premium-addons-for-elementor'),
                'id' => __( 'Indonesian', 'premium-addons-for-elementor'),
                'it' => __( 'Italian', 'premium-addons-for-elementor'),
                'iw' => __( 'Hebrew', 'premium-addons-for-elementor'),
                'ja' => __( 'Japanese', 'premium-addons-for-elementor'),
                'kn' => __( 'Kannada', 'premium-addons-for-elementor'),
                'ko' => __( 'Korean', 'premium-addons-for-elementor'),
                'lt' => __( 'Lithuanian', 'premium-addons-for-elementor'),
                'lv' => __( 'Latvian', 'premium-addons-for-elementor'),
                'ml' => __( 'Malayalam', 'premium-addons-for-elementor'),
                'mr' => __( 'Marathi', 'premium-addons-for-elementor'),
                'nl' => __( 'Dutch', 'premium-addons-for-elementor'),
                'no' => __( 'Norwegian', 'premium-addons-for-elementor'),
                'pl' => __( 'Polish', 'premium-addons-for-elementor'),
                'pt' => __( 'Portuguese', 'premium-addons-for-elementor'),
                'pt-BR' => __( 'Portuguese (brazil)', 'premium-addons-for-elementor'),
                'pt-PT' => __( 'Portuguese (portugal)', 'premium-addons-for-elementor'),
                'ro' => __( 'Romanian', 'premium-addons-for-elementor'),
                'ru' => __( 'Russian', 'premium-addons-for-elementor'),
                'sk' => __( 'Slovak', 'premium-addons-for-elementor'),
                'sl' => __( 'Slovenian', 'premium-addons-for-elementor'),
                'sr' => __( 'Serbian', 'premium-addons-for-elementor'),
                'sv' => __( 'Swedish', 'premium-addons-for-elementor'),
                'tl' => __( 'Tagalog', 'premium-addons-for-elementor'),
                'ta' => __( 'Tamil', 'premium-addons-for-elementor'),
                'te' => __( 'Telugu', 'premium-addons-for-elementor'),
                'th' => __( 'Thai', 'premium-addons-for-elementor'),
                'tr' => __( 'Turkish', 'premium-addons-for-elementor'),
                'uk' => __( 'Ukrainian', 'premium-addons-for-elementor'),
                'vi' => __( 'Vietnamese', 'premium-addons-for-elementor'),
                'zh-CN' => __( 'Chinese (simplified)', 'premium-addons-for-elementor'),
                'zh-TW' => __( 'Chinese (traditional)', 'premium-addons-for-elementor'),
			);
		}

		return self::$google_localize;
        
    }
    
    /**
     * Checks if a plugin is installed
     * 
     * @since 1.0.0
     * @return boolean
     * 
     */
    public static function is_plugin_installed( $plugin_path ) {
        
        require_once ABSPATH . 'wp-admin/includes/plugin.php';
        
        $plugins = get_plugins();
        
        return isset( $plugins[ $plugin_path ] );
    }
    
    /**
     * Get Installed Theme
     * 
     * Returns the active theme slug
     * 
     * @access public
     * @return string theme slug
     */
    public static function get_installed_theme() {

        $theme = wp_get_theme();

        if( $theme->parent() ) {

            $theme_name = $theme->parent()->get('Name');

        } else {

            $theme_name = $theme->get('Name');

        }

        $theme_name = sanitize_key( $theme_name );

        return $theme_name;
    }
    
    /*
     * Get Embed Thumbnail
     * 
     * Get thumbnail URL for embed or self hosted
     * 
     * @since 3.7.0
     * @access public
     * 
     * @param string $id video ID
     * @param string $type embed type
     * @param string $size youtube thumbnail size
     */
    public static function get_video_thumbnail( $id, $type, $size = '' ) {
        
        $thumbnail_src = '';
        
        if ( 'youtube' === $type ) {
            if ( '' === $size ) {
                $size = 'maxresdefault';
            }
            $thumbnail_src = sprintf( 'https://i.ytimg.com/vi/%s/%s.jpg', $id, $size );
        } elseif ( 'vimeo' === $type ) {
           
            $vimeo_data         = wp_remote_get( 'http://www.vimeo.com/api/v2/video/' . intval( $id ) . '.php' );
            if ( isset( $vimeo_data['response']['code'] ) && '200' == $vimeo_data['response']['code'] ) {
                $response       = unserialize( $vimeo_data['body'] );
                $thumbnail_src  = isset( $response[0]['thumbnail_large'] ) ? $response[0]['thumbnail_large'] : false;
            }
                
        } else {
            $thumbnail_src = 'transparent';
        }
        
        return $thumbnail_src;
    }
}