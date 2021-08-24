<?php
class Controller_AllWords extends Controller
{
    public function action_index()
    {
        $this->view->generate("view_allWords.php", "view_template.php");
    }
}
