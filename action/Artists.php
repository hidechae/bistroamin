<?php
class Bistroamin_Form_Artists extends Bistroamin_ActionForm
{
    var $form = array(
    );
}

class Bistroamin_Action_Artists extends Bistroamin_DataActionClass
{
    function prepare()
    {
        return null;
    }

    function perform()
    {
        return 'artists';
    }
}
