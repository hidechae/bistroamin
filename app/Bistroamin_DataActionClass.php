<?php
require_once '../class/Bistroamin_Data.php';
require_once '../class/Bistroamin_User.php';
require_once '../class/Bistroamin_Note.php';
class Bistroamin_DataActionClass extends Bistroamin_ActionClass
{
    protected $acl = false;
    function authenticate()
    {
        if ($this->acl) {
            if (is_null($this->getMy())) {
                $this->af->setApp('backto', $this->getAction());
                return 'common_redirect';
            }
        }
        return parent::authenticate();
    }

    protected function getMy() {
        $this->session->start();
        $mail = $this->session->get('mail');
        $password = $this->session->get('password');
        if (empty($mail) || empty($password)) {
            return null;
        }
        $tbl_user = $this->getTable('user');
        $my = $tbl_user->getByMail($mail);
        if ($this->getHash($password) === $my['password']) {
            return $my;
        }
        return null;
    }

    protected function getAction() {
        $url_request = array_merge($_GET, $_POST);
        return $url_request['action'];
    }

    protected function getTable($table_name) {
        switch ($table_name) {
        case 'user':
            return  new Bistroamin_User($this->backend);
        case 'note':
            return  new Bistroamin_Note($this->backend);
        default:
            throw new Exception("Unknown table '$table_name'.");
        }
        return null;
    }

    protected function getHash($password) {
        $seecret_key = 'bistroamin';
        return hash_hmac('sha512', $password, $seecret_key);
    }
}
