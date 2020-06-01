<?php

class Search extends Controller
{
	
	function __construct()
	{
		parent::__construct();// gets Controller construction

	}

	function index() {
		$find = $_POST['search'];
		$this->view->searchData = $this->model->search($find);
		if (empty($this->view->searchData)) {
			require "controllers/error.php";
			$controller = new Err(); // call in the error model
			$controller->index("No result for $find"); //	call index method and parse the message
			return false;
		}
		$this->view->render('search', 'Search');
	}

}

?>