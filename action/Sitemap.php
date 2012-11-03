<?php
class Bistroamin_Form_Sitemap extends Bistroamin_ActionForm
{
    var $form = array(
    );
}

class Bistroamin_Action_Sitemap extends Bistroamin_DataActionClass
{
    function prepare()
    {
        return null;
    }

    function perform()
    {
        return 'sitemap';
    }
}
