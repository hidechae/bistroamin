<?php
/**
 *  {$action_name}.php
 *
 *  @author     {$author}
 *  @package    Bistroamin
 *  @version    $Id$
 */
chdir(dirname(__FILE__));
require_once '{$dir_app}/Bistroamin_Controller.php';

ini_set('max_execution_time', 0);

Bistroamin_Controller::main_CLI('Bistroamin_Controller', '{$action_name}');
?>
