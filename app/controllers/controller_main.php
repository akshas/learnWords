<?php
class Controller_Main extends Controller
{
	function action_index()
	{
        $this->view->setElementsToDisplay($this->model->getAllData());
        $this->view->generate('view_main.php', 'view_template.php');
	}
}