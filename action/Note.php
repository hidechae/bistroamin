<?php
class Bistroamin_Form_Note extends Bistroamin_ActionForm
{
    var $form = array(
    );
}

class Bistroamin_Action_Note extends Bistroamin_DataActionClass
{
    function prepare()
    {
        return null;
    }

    function perform()
    {
        return 'notes';
    }
}
