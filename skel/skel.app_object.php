<?php
/**
 *  {$app_path}
 *
 *  @author     {$author}
 *  @package    Bistroamin
 *  @version    $Id$
 */

/**
 *  {$app_object}Manager
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Bistroamin
 */
class {$app_object}Manager extends Ethna_AppManager
{
}

/**
 *  {$app_object}
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Bistroamin
 */
class {$app_object} extends Ethna_AppObject
{
    /**
     *  property display name getter.
     *
     *  @access public
     */
    function getName($key)
    {
        return $this->get($key);
    }
}

?>
