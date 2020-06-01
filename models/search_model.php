<?php

class Search_Model extends Model
{
	public function __construct()
	{
		parent::__construct();//the database here
	}

	public function search($find) {
		$sth = $this->db->prepare("
			SELECT book_id, title, link, image, author 
			FROM book 
			WHERE title REGEXP :query
			OR author REGEXP :query
		");
		$sth->bindValue(":query", "^[$find]", PDO::PARAM_STR);
		$sth->setFetchMode(PDO::FETCH_ASSOC);
		$sth->execute();
		$data = $sth->fetchAll();
		return $data;
	}

}

?>