<?php

class Controller_AddWord extends Controller
{
    public function action_index()
    {
        $this->view->generate("view_addWord.php", "view_template.php");
    }

    public function action_addNewWord($word, $translation, $cat_id)
    {
        $model = new Model_addWord();
        $model->insertData($word, $translation, $cat_id);
    }
}