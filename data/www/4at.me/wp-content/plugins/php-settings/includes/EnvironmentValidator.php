<?php
/**
 * @package   PHP Settings
 * @date      2016-05-12
 * @version   1.0.5
 * @author    Askupa Software <contact@askupasoftware.com>
 * @link      http://products.askupasoftware.com/php-settings
 * @copyright 2016 Askupa Software
 */

function php_settings_admin_notice()
{
    $message = '<strong>PHP Settings</strong> requires <strong>PHP 5.3.0</strong> or newer to run (you are currently running <strong>PHP '.phpversion().'</strong>). Please upgrade your PHP version.';
    $type = 'error';
    printf( '<div class="notice notice-%1$s"><p>%2$s</p></div>', $type, $message );
}

if( version_compare(phpversion(), '5.3.0', '<') )
{
    add_action( 'admin_notices', 'php_settings_admin_notice' );
    return false;
}
return true;