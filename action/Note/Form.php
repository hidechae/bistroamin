<?php
class Bistroamin_Form_NoteForm extends Bistroamin_ActionForm
{
    var $form = array(
    );
}

class Bistroamin_Action_NoteForm extends Bistroamin_DataActionClass
{
    protected $acl = true;
    function prepare()
    {
        return null;
    }

    function perform()
    {
        return 'note_form';
    }
}
