<?php

	$books = $this->books;
	$size = sizeof($books); // number of array elements
	$times = (int) ($size/5);
	$rows = ($size%5 == 0)?($times):($times + 1); // how many rows
	$k=0; // while loop counter

?>
	<div class="catSpan">books from <?php echo $this->span; ?></div>
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
				<img src="<?php echo $books[$i]['image'] ?>" alt="" class="thumbImg">
				<div class="thumbContent">
					<span class="title"><?php echo $books[$i]["title"] ?></span><br>
					<span class="author"><?php echo $books[$i]["author"]; ?></span>
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