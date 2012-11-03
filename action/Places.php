<?php
class Bistroamin_Form_Places extends Bistroamin_ActionForm
{
    var $form = array(
    );
}

class Bistroamin_Action_Places extends Bistroamin_DataActionClass
{
    function prepare()
    {
        return null;
    }

    function perform()
    {
        return 'places';
    }
}
