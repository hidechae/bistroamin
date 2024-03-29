<?php
/**
 *  Bistroamin_Controller.php
 *
 *  @author     {$author}
 *  @package    Bistroamin
 *  @version    $Id$
 */

/** Application base directory */
define('BASE', dirname(dirname(__FILE__)));
//define('IMG', dirname(dirname(__FILE__)) . '/www/images');
define('HTTP_ROOT', 'http://27.120.111.32/bistroamin/');
define('IMG', 'http://27.120.111.32/bistroamin/www/images');
define('JS', 'http://27.120.111.32/bistroamin/www/scripts');
define('CSS', 'http://27.120.111.32/bistroamin/www/css');

/** include_path setting (adding "/app" and "/lib" directory to include_path) */
$app = BASE . "/app";
$lib = BASE . "/lib";
set_include_path(implode(PATH_SEPARATOR, array($app, $lib)) . PATH_SEPARATOR . get_include_path());


/** including application library. */
require_once 'Ethna/Ethna.php';
require_once 'Bistroamin_Error.php';
require_once 'Bistroamin_ActionClass.php';
require_once 'Bistroamin_DataActionClass.php';
require_once 'Bistroamin_ActionForm.php';
require_once 'Bistroamin_ViewClass.php';

/**
 *  Bistroamin application Controller definition.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Bistroamin
 */
class Bistroamin_Controller extends Ethna_Controller
{
    /**#@+
     *  @access private
     */

    /**
     *  @var    string  Application ID(appid)
     */
    var $appid = 'BISTROAMIN';

    /**
     *  @var    array   forward definition.
     */
    var $forward = array(
        /*
         *  TODO: write forward definition here.
         *
         *  Example:
         *
         *  'index'         => array(
         *      'view_name' => 'Bistroamin_View_Index',
         *  ),
         */
    );

    /**
     *  @var    array   action definition.
     */
    var $action = array(
        /*
         *  TODO: write action definition here.
         *
         *  Example:
         *
         *  'index'     => array(
         *      'form_name' => 'Sample_Form_SomeAction',
         *      'form_path' => 'Some/Action.php',
         *      'class_name' => 'Sample_Action_SomeAction',
         *      'class_path' => 'Some/Action.php',
         *  ),
         */
    );

    /**
     *  @var    array   SOAP action definition.
     */
    var $soap_action = array(
        /*
         *  TODO: write action definition for SOAP application here.
         *  Example:
         *
         *  'sample'            => array(),
         */
    );

    /**
     *  @var    array       application directory.
     */
    var $directory = array(
        'action'        => 'action',
        'action_cli'    => 'app/action_cli',
        'action_xmlrpc' => 'app/action_xmlrpc',
        'app'           => 'app',
        'plugin'        => 'app/plugin',
        'bin'           => 'bin',
        'etc'           => 'etc',
        'filter'        => 'app/filter',
        'locale'        => 'locale',
        'log'           => 'log',
        'plugins'       => array('app/plugin/Smarty',),
        'template'      => 'template',
        'template_c'    => 'tmp',
        'tmp'           => 'tmp',
        'view'          => 'view',
        'www'           => 'www',
        'test'          => 'app/test',
    );

    /**
     *  @var    array       database access definition.
     */
    var $db = array(
        ''              => DB_TYPE_RW,
    );

    /**
     *  @var    array       extention(.php, etc) configuration.
     */
    var $ext = array(
        'php'           => 'php',
        'tpl'           => 'tpl',
    );

    /**
     *  @var    array   class definition.
     */
    var $class = array(
        /*
         *  TODO: When you override Configuration class, Logger class,
         *        SQL class, don't forget to change definition as follows!
         */
        'class'         => 'Ethna_ClassFactory',
        'backend'       => 'Ethna_Backend',
        'config'        => 'Ethna_Config',
        'db'            => 'Ethna_DB_PEAR',
        'error'         => 'Ethna_ActionError',
        'form'          => 'Bistroamin_ActionForm',
        'i18n'          => 'Ethna_I18N',
        'logger'        => 'Ethna_Logger',
        'plugin'        => 'Ethna_Plugin',
        'session'       => 'Ethna_Session',
        'sql'           => 'Ethna_AppSQL',
        'view'          => 'Bistroamin_ViewClass',
        'renderer'      => 'Ethna_Renderer_Smarty',
        'url_handler'   => 'Bistroamin_UrlHandler',
    );

    /**
     *  @var    array       list of application id where Ethna searches plugin.
     */
    var $plugin_search_appids = array(
        /*
         *  write list of application id where Ethna searches plugin.
         *
         *  Example:
         *  When there are plugins whose name are like "Common_Plugin_Foo_Bar" in
         *  application plugin directory, Ethna searches them in the following order.
         *
         *  1. Common_Plugin_Foo_Bar,
         *  2. Bistroamin_Plugin_Foo_Bar
         *  3. Ethna_Plugin_Foo_Bar
         *
         *  'Common', 'Bistroamin', 'Ethna',
         */
        'Bistroamin', 'Ethna',
    );

    /**
     *  @var    array       filter definition.
     */
    var $filter = array(
        /*
         *  TODO: when you use filter, write filter plugin name here.
         *  (If you specify class name, Ethna reads filter class in 
         *   filter directory)
         *
         *  Example:
         *
         *  'ExecutionTime',
         */
    );

    /**#@-*/

    /**
     *  Get Default language and locale setting.
     *  If you want to change Ethna's output encoding, override this method.
     *
     *  @access protected
     *  @return array   locale name(e.x ja_JP, en_US .etc),
     *                  system encoding name,
     *                  client encoding name(= template encoding)
     *                  (locale name is "ll_cc" format. ll = language code. cc = country code.)
     */
    function _getDefaultLanguage()
    {
        return array('ja_JP', 'UTF-8', 'UTF-8');
    }

    /**
     *  テンプレートエンジンのデフォルト状態を設定する
     *
     *  @access protected
     *  @param  object  Ethna_Renderer  レンダラオブジェクト
     *  @obsolete
     */
    function _setDefaultTemplateEngine(&$renderer)
    {
    }
}

?>
