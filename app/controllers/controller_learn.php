<?php
class Controller_Learn extends Controller
{
    function action_index()
    {
        $this->view->generate('view_learn.php', 'view_template.php');
    }

    function action_test()
    {
        echo 1;
    }
}
