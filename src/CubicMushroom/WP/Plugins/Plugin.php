<?php
/**
 * Base Plugin class to be extended by individual plugins
 *
 * PHP version 5
 * 
 * @category   WordPress_Plugins
 * @package    CubicMushroom_WP
 * @subpackage Plugins
 * @author     Toby Griffiths <toby@cubicmushroom.co.uk>
 * @license    http://opensource.org/licenses/MIT MIT
 * @link       http://cubicmushroom.co.uk
 **/

/**
 * Base Plugin class to be extended by individual plugins
 * 
 * @category   WordPress_Plugins
 * @package    CubicMushroom_WP
 * @subpackage Plugins
 * @author     Toby Griffiths <toby@cubicmushroom.co.uk>
 * @license    http://opensource.org/licenses/MIT MIT
 * @link       http://cubicmushroom.co.uk
 **/
class CubicMushroom_WP_Plugins_Plugin extends CubicMushroom_WP_Core_Base
{

    /*************************
     * Non-static properties *
     *************************/

    /**
     * {@inheritdoc}
     */
    protected $hooks = array(
        'plugins_loaded' => 'hookSetup',
        'init'           => 'hookInit',
        'admin_init'     => 'hookAdminInit'
    );

} // END class FundApplicationPlugin