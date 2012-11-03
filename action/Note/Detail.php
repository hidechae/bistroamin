<?php
class Bistroamin_Form_NoteDetail extends Bistroamin_ActionForm
{
    var $form = array(
        'note_id' => array(
            'type' => VAR_TYPE_INT,
            'required' => true,
            'required_error' => 'Note id is required',
        ),
    );
}

class Bistroamin_Action_NoteDetail extends Bistroamin_DataActionClass
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
            $note_id = $this->af->get('note_id');

            $note = $this->getTable('note');
            $notes = $note->get($note_id);
            $this->af->setApp('note', $notes);
        } catch (exception $e) {
            $this->ae->add('errmsg', $e->getMessage());
            return 'common_error';
        }
        return 'note_detail';
    }
}
