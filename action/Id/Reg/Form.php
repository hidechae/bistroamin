<?php
class Bistroamin_Form_IdRegForm extends Bistroamin_ActionForm
{
    var $form = array(
    );
}

class Bistroamin_Action_IdRegForm extends Bistroamin_DataActionClass
{
    function prepare()
    {
        return null;
    }

    function perform()
    {
        return 'id_reg_form';
    }
}
