<?php

class Categories_Model extends Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function getBooks() {
		$bookData = $this->queryExe("SELECT title, author, image, link FROM book");
		return $bookData;
	}

	public function getBookFromCategory($category) {

		$data = $this->queryExe("SELECT book.title, book.author, book.image, book.link FROM book INNER JOIN shelves ON book.row_id = shelves.main_category WHERE shelves.shelf_category = '".$category."'");
		return $data;
	}
}

?>