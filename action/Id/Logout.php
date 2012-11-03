<?php
class Bistroamin_Form_IdLogout extends Bistroamin_ActionForm
{
    var $form = array(
    );
}

class Bistroamin_Action_IdLogout extends Bistroamin_DataActionClass
{
    function prepare()
    {
        return null;
    }

    function perform()
    {
        try {
            $this->session->start();
            $this->session->set('mail', null);
            $this->session->set('passrowd', null);
        } catch (exception $e) {
            var_dump($e->getMessage());
            return 'common_error';
        }
        $http_referer = $_SERVER['HTTP_REFERER'];
        header("Location: $http_referer");
    }
}
