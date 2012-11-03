<?php
class Bistroamin_Form_NoteList extends Bistroamin_ActionForm
{
    var $form = array(
        'user_id' => array(
            'type' => VAR_TYPE_INT,
            'required' => false,
            'required_error' => 'Input user_id.'
        ),
    );
}

class Bistroamin_Action_NoteList extends Bistroamin_DataActionClass
{
    function prepare()
    {
        if ($this->af->validate() != 0) {
            return 'common_error';
        }
        return null;
    }

    function perform()
    {
        try {
//            $user_id = $this->af->get('user_id');

            $note = $this->getTable('note');
            $notes = $note->getAll();
            $this->af->setApp('notes', $notes);
        } catch (exception $e) {
            $this->ae->add('errmsg', $e->getMessage());
            return 'common_error';
        }
        return 'note_list';
    }
}
