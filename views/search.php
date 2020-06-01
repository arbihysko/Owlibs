<?php 

	function unique_obj($data) {
		static $idList = array();
		if(in_array($data['book_id'],$idList)) {
			return false;
		}
		$idList []= $data['book_id'];
		return true;
	}

	$data = $this->searchData;
	//print_r(array_filter($data, 'unique_obj'));


	$size = sizeof($data); // number of array elements
	$times = (int) ($size/5);
	$rows = ($size%5 == 0)?($times):($times + 1); // how many rows
	$k=0; // while loop counter

?>
	<div class="searching">
	<div class="catSpan">Search results from <?php echo $_POST['search']; ?></div>

	<?php 
		while ($k < $rows) {
			$n = $k * 5; //skip value
			$m = (($n + 5) > $size)?($n + $size%5):($n + 5); //limit value
	?>
	<sector class="bookShelf">
		<div class="bookSector">
			<?php
				for ($i=$n; $i < $m; $i++) {
			?>
			<a class="bookLink" href="<?php echo URL.$books[$i]['link']; ?>">
			<div class="bookThumb">
				<img src="<?php echo $data[$i]['image'] ?>" alt="" class="thumbImg">
				<div class="thumbContent">
					<span class="title"><?php echo $data[$i]["title"] ?></span><br>
					<span class="author"><?php echo $data[$i]["author"]; ?></span>
				</div>
			</div>
			</a>
			<?php 
				}
			?>
		</div>
	</sector>
	<?php
			$k++;
		}
	?>
	</sector>
</div>