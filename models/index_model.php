<?php

class Index_Model extends Model
{
	public function __construct()
	{
		parent::__construct();//the database here
	}

	public function mostClicked() {
		$data = $this->queryExe("
			SELECT title, author, image, link, book_id, clicks
			FROM book
			ORDER BY clicks DESC
			LIMIT 5
		");
		return $data;
	}
}

?>