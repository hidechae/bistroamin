<?php
class Bistroamin_Form_Profile extends Bistroamin_ActionForm
{
    var $form = array(
    );
}

class Bistroamin_Action_Profile extends Bistroamin_DataActionClass
{
    function prepare()
    {
        return null;
    }

    function perform()
    {
        return 'profile';
    }
}
