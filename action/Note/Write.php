<?php
class Bistroamin_Form_NoteWrite extends Bistroamin_ActionForm
{
    var $form = array(
        'user_id' => array(
            'type' => VAR_TYPE_INT,
            'required' => true,
            'required_error' => 'Input user_id.'
        ),
        'title' => array(
            'type' => VAR_TYPE_STRING,
            'required' => true,
            'required_error' => 'Input title.'
        ),
        'body' => array(
            'type' => VAR_TYPE_STRING,
            'required' => true,
            'required_error' => 'Input body.',
        ),
    );
}

class Bistroamin_Action_NoteWrite extends Bistroamin_DataActionClass
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
            $user_id = $this->af->get('user_id');
            $title = $this->af->get('title');
            $body = $this->af->get('body');

            $note = $this->getTable('note');
            $params = array(
                'user_id' => $user_id,
                'title' => $title,
                'body' => $body
            );
            $data = $note->saveOrUpdate($params);
        } catch (exception $e) {
            $this->ae->add('errmsg', $e->getMessage());
            return 'common_error';
        }
        return 'note_write';
    }
}
