<?php Session::init() ?>
<?php $navData = $this->shelf;?>
<!doctype html>
<html lang="en">
  	<head>
    	<!-- Required meta tags -->
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <link rel="icon" href="<?php echo URL; ?>public/images/favicon.png">

    	<!-- Stylesheets -->
		
		<link rel="stylesheet" href="<?php echo URL ;?>public/css/reset.css">
		<link rel="stylesheet" href="<?php echo URL ;?>public/css/skeleton.css">

		<link href="https://fonts.googleapis.com/css?family=Fira+Mono|Comfortaa|Open+Sans:800|Sacramento" rel="stylesheet">

		<link rel="stylesheet" href="<?php echo URL ;?>public/css/default.css">

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
		<!-- Stylesheet End -->
    	
    	<title><?php echo $this->title; ?></title>


  	</head>
  	<body>
		<!-- NavBar Start -->
  		<nav class="navBar" id="navBar">
  			<ul class="wrapper">
    			<li class="barElementLogo" style=""><a href="<?php echo URL ;?>"><img class="logoImg" src="<?php echo URL ?>public/images/icon.svg" alt="logo"></a></li>
    			<li class="barElement">Categories <i class="fas fa-angle-down"></i></li>
    			<li class="barElement">Trending <i class="fas fa-angle-down"></i></li>
    			<li class="barElement">Top List <i class="fas fa-angle-down"></i></li>
    			<li id="search" class="sElement" style="border-bottom: none;margin-top:1.8vh;"><i class="fas fa-search fa-2x"></i></li>
    			<form method="post" action="/search" id="searchDiv">
  					<input type="text" name="search" autocomplete="off" placeholder="Search by name or author..." id="searchBox">
  					<button type="submit" name="submit" id="searchSub"><i class="fas fa-search"></i></button>
  				</form>
  				<li id="closeSearch" style="margin-top:1.8vh;"><i class="fas fa-times fa-2x"></i></li>
  			</ul>
  			<div class="navContent">
          <div class="scrollDiv">
          <?php
            $dataSize = sizeof($navData); // the array elements count
            $times = (int) ($dataSize/5); // sa here plotpjestohet me 5
            if ($dataSize%5!=0) {
              $times++; // nese ka mbetje shto 1 rresht
            }
            $k=0; // counteri i while loop
            $m = $dataSize%5; // mbetja
            while($k<$times) { $n=$k*5; //skip value, important inside the while loop bc $k changes

          ?>
  				<div class="row">
            <?php $num =  (($n+5)>$dataSize)?($n+$m):($n+5);//num is the value 5 if full row dhe mbetja nese sesht i plot?>
  					<?php for ($j=$n; $j< $num;$j++) { ?>
	  				<div class="element">
	  					<span class="head"><?php echo $navData[$j][0]['category'] ?></span>
	  					<ul class="topNavLink">
                <?php
                  foreach ($navData[$j] as $miniCategory) {
                    echo "<li class='link'><a href='".URL."categories/?q=".strtolower($miniCategory['shelf_category'])."'>".$miniCategory['shelf_category']."</a></li>";
                  }
                ?>
	  					</ul>
	  				</div>
	  				<?php } ?>
  				</div>
          <?php $k++; }// while loop count increment ?>
  			</div>
        </div>
		</nav>
		<!-- NavBar End -->

		<div id="goTop" class="goTop"><div class="arrow"><i class="fas fa-angle-up fa-2x"></i></div></div> <!-- Scroll to top -->

		