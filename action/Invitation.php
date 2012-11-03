<?php
class Bistroamin_Form_Invitation extends Bistroamin_ActionForm
{
    var $form = array(
    );
}

class Bistroamin_Action_Invitation extends Bistroamin_DataActionClass
{
    function prepare()
    {
        return null;
    }

    function perform()
    {
        return 'invitation';
    }
}
