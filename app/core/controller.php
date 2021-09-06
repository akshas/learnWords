<?php
class Controller {
	static $i = 0;

	function __construct()
	{
		$this->view = new View();
        $this->model = new Model();
	}
	
	function action_index()
	{
	}
}