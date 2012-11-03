<?php
error_reporting(E_ALL);
require_once dirname(__FILE__) . '/../app/Bistroamin_Controller.php';

Bistroamin_Controller::main('Bistroamin_Controller', array(
    '__ethna_unittest__',
    )
);
?>
