<?php
class Bistroamin_Form_Search extends Bistroamin_ActionForm
{
    var $form = array(
    );
}

class Bistroamin_Action_Search extends Bistroamin_DataActionClass
{
    function prepare()
    {
        return null;
    }

    function perform()
    {
        return 'search';
    }
}
