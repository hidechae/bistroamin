<?php
class Bistroamin_Form_Address extends Bistroamin_ActionForm
{
    var $form = array(
    );
}

class Bistroamin_Action_Address extends Bistroamin_DataActionClass
{
    function prepare()
    {
        return null;
    }

    function perform()
    {
        return 'address';
    }
}
