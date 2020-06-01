<?php

class Index extends Controller
{
	
	function __construct()
	{
		parent::__construct();// gets Controller construction

	}

	function index() {
		$this->view->MCData = $this->model->mostClicked();
		$this->view->render('index/index', 'Index');
	}

}

?>