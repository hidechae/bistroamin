<?php
class Bistroamin_Form_NoteDelete extends Bistroamin_ActionForm
{
    var $form = array(
        'note_id' => array(
            'type' => VAR_TYPE_INT,
            'required' => true,
            'required_error' => 'Note id is required',
        ),
    );
}

class Bistroamin_Action_NoteDelete extends Bistroamin_DataActionClass
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
            $notes = $note->delete($note_id);
        } catch (exception $e) {
            $this->ae->add('errmsg', $e->getMessage());
            return 'common_error';
        }
        header("Location: " . HTTP_ROOT . "/www/index.php/?action=note_list");
        exit;
    }
}
