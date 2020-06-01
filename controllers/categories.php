<?php

class Categories extends Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	function index() {
		if (isset($_GET['q'])) {
			$category = htmlspecialchars($_GET['q']);
			//print_r($this->model->getBookFromCategory($category));
			$books = $this->model->getBookFromCategory($category);
			$this->view->books = $books;
			if (empty($books)) {
				require "controllers/error.php";
				$controller = new Err(); // call in the error model
				$controller->index("Category does not exist!"); //	call index method and parse the message
				return false;
			}
			$this->view->span = $category;
			$this->view->render('categories', ucfirst($category));
		} else {
			$this->view->books = $this->model->getBooks();
			$this->view->span = "Owlibs";
			$this->view->render('categories', 'Categories');
		}
	}
}

?>