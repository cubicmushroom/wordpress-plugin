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

namespace CubicMushroom\WP\Plugins;

use \CubicMushroom\WP\Core\Base;
use \CubicMushroom\WP\Exception\PostTypeRegistrationFailedException;

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
class Plugin extends Base
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