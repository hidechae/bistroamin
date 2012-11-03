<?php
class Bistroamin_Form_Salon extends Bistroamin_ActionForm
{
    var $form = array(
    );
}

class Bistroamin_Action_Salon extends Bistroamin_DataActionClass
{
    function prepare()
    {
        return null;
    }

    function perform()
    {
        return 'salon';
    }
}
