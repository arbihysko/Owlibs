<?php require_once 'views/partials/header.php' ?>

<div class="errContent">

	<div style="text-align: center;">Got a little lost?</div><br>
	<span>Error 404</span><br>
	<span style="font-size: 3em"><?php echo $this->msg; ?> <a style="color: rgb(32,32,32);" href="<?php echo $_SERVER['HTTP_REFERER'] ?>">GO BACK</a></span>

	
</div>

<?php require_once "views/partials/footer.php" ?>