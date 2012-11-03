<?php
class Bistroamin_Form_IdLogin extends Bistroamin_ActionForm
{
    var $form = array(
        'mail' => array(
            'type' => VAR_TYPE_STRING,
            'required' => true,
            'required_error' => 'Input E-mail.',
            'regexp' => '/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/',
        ),
        'password' => array(
            'type' => VAR_TYPE_STRING,
            'required' => true,
            'required_error' => 'Input password.',
            'regexp' => '/^[a-zA-Z0-9]{6,20}$/'
        ),
        'backto' => array(
            'type' => VAR_TYPE_STRING,
            'required' => false,
        ),
    );
}

class Bistroamin_Action_IdLogin extends Bistroamin_DataActionClass
{
    function prepare()
    {
        return null;
    }

    function perform()
    {
        try {
            if (!$this->_login()) {
                return 'id_login';
            }
            $backto = $this->af->get('backto');
            if (isset($backto)) {
                return $backto;
            }
        } catch (exception $e) {
            var_dump($e->getMessage());
            return 'common_error';
        }
        return 'index';
    }

    private function _login() {
        $mail = $this->af->get('mail');
        $password = $this->af->get('password');
        if (empty($mail) || empty($password)) {
            return false;
        }
        $tbl_user = $this->getTable('user');
        $my = $tbl_user->getByMail($mail);
        if ($this->getHash($password) === $my['password']) {
            $this->session->start();
            $this->session->set('mail', $mail);
            $this->session->set('password', $password);
            return true;
        }
        return false;
    }
}
