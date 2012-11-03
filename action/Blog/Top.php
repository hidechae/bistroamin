<?php
class Bistroamin_Form_BlogTop extends Bistroamin_ActionForm
{
    var $form = array(
    );
}

class Bistroamin_Action_BlogTop extends Bistroamin_DataActionClass
{
    function prepare()
    {
        return null;
    }

    function perform()
    {
        try {
            $user = $this->getTable('user');
            $params = array(
                'name' => 'hidechae',
            );
//            $data = $user->addUser($params);
            $data = $user->getUser(/*user_id=*/1);
            var_dump($data);
        } catch (exception $e) {
            var_dump($e->getMessage());
        }

        return 'blog_top';
    }
}
