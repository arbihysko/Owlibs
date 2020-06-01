<?php

class Model
{
	
	function __construct()
	{
		$this->db = new Database();//creates the db connection
	}

	public function fetchData() {

		$data = $this->queryExe("SELECT * FROM library");
		return($data);//returns data Array
	}

	public function getShelf() {
		$cnt = sizeof($this->fetchData());
		//print_r($cnt);
		$test = array();
		for ($i=1; $i <= $cnt; $i++) { 
			$sta = $this->db->prepare("SELECT library.id, library.category, shelves.shelf_category FROM library inner join shelves on id = main_category where id=$i");
			$sta->execute();
			$data = $sta->fetchAll();
			array_push($test, $data);
		}
		
		return $test;
	}

	public function queryExe($query) {
		$sta = $this->db->prepare($query);//queries the database
		$sta->setFetchMode(PDO::FETCH_ASSOC);
		$sta->execute();
		$data = $sta->fetchAll();//fetches data in aray
		$res = json_encode($data);
		return($data);
	}
}

?>