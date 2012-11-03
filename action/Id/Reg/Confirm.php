<?php
class Bistroamin_Form_IdRegConfirm extends Bistroamin_ActionForm
{
    var $form = array(
        'name' => array(
            'type' => VAR_TYPE_STRING,
            'required' => true,
            'required_error' => 'Input name.'
        ),
        'screen_name' => array(
            'type' => VAR_TYPE_STRING,
            'required' => true,
            'required_error' => 'Input name.'
        ),
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
    );
}

class Bistroamin_Action_IdRegConfirm extends Bistroamin_DataActionClass
{
    protected $acl = true;
    function prepare()
    {
        if ($this->af->validate() != 0) {
            return 'common_error';
        }
        return null;
    }

    function perform()
    {
        try {
            $name = $this->af->get('name');
            $screen_name = $this->af->get('screen_name');
            $mail = $this->af->get('mail');
            $password = $this->af->get('password');
            $tbl_user = $this->getTable('user');
            $params = array(
                'name' => $name,
                'screen_name' => $screen_name,
                'mail' => $mail,
                'password' => $this->getHash($password),
            );
            $data = $tbl_user->add($params);
        } catch (exception $e) {
            $this->af->setApp('errmsg', $e->getMessage());
            return 'common_error';
        }
        return 'id_reg_form';
    }


}
