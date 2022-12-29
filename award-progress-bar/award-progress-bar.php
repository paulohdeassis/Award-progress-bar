 <?php

/**
 * 
 * Plugin name: Award Progress Bar  
 * Description: Plugin that allows you to create a basic progress bar for winning an award based on how much your client bought on your store
 * Version: 1.0.0
 * Text Domain: award-progress-bar
 * 
 */

if( !defined('ABSPATH') )
{
      die('You cannot be here');
}

if( !class_exists('ContactPlugin') )
{



            class awardProgressBar{


                  public function __construct()
                  {

                        define('MY_PLUGIN_PATH', plugin_dir_path( __FILE__ ));

                        define('MY_PLUGIN_URL', plugin_dir_url( __FILE__ ));

                        require_once(MY_PLUGIN_PATH . '/vendor/autoload.php');

                  }

                  public function initialize()
                  {
                        include_once MY_PLUGIN_PATH . 'includes/utilities.php';

                        include_once MY_PLUGIN_PATH . 'includes/optionsPage.php';

                        include_once MY_PLUGIN_PATH . 'includes/handleInputValues.php';
                  }


            }

            $awardProgressBar = new awardProgressBar;
            $awardProgressBar->initialize();

} ?>  
