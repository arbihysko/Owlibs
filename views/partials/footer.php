<footer>
	<div class="footer">
		<div class="element">
			<span class="head">most clicked</span>
			<ul class="sect">
				<li class="link"><a href="#sectorTwo">Lorem ipsum.</a></li>
				<li class="link"><a href="#">Lorem ipsum.</a></li>
				<li class="link"><a href="#">Lorem ipsum.</a></li>
				<li class="link"><a href="#">Lorem ipsum.</a></li>
				<li class="link"><a href="#">Lorem ipsum.</a></li>
			</ul>
		</div>
		<div class="element">
			<span class="head">trending</span>
			<ul class="sect">
				<li class="link"><a href="#">Lorem ipsum.</a></li>
				<li class="link"><a href="#">Lorem ipsum.</a></li>
				<li class="link"><a href="#">Lorem ipsum.</a></li>
				<li class="link"><a href="#">Lorem ipsum.</a></li>
				<li class="link"><a href="#">Lorem ipsum.</a></li>
			</ul>
		</div>
		<div class="element">
			<span class="head">recommended</span>
			<ul class="sect">
				<li class="link"><a href="#">Lorem ipsum.</a></li>
				<li class="link"><a href="#">Lorem ipsum.</a></li>
				<li class="link"><a href="#">Lorem ipsum.</a></li>
				<li class="link"><a href="#">Lorem ipsum.</a></li>
				<li class="link"><a href="#">Lorem ipsum.</a></li>
			</ul>
		</div>
		<div class="element">
			<span class="head">contact</span>
			<ul class="sect">
				<li class="link"><a href="#">Lorem ipsum.</a></li>
				<li class="link"><a href="#">Lorem ipsum.</a></li>
				<li class="link"><a href="#">Lorem ipsum.</a></li>
				<li class="link"><a href="#">Lorem ipsum.</a></li>
				<li class="link"><a href="#">Lorem ipsum.</a></li>
			</ul>
		</div>
	</div>
	<span class="copyright">Copyright &copy; Owlibs.com 2018-2019.</span>
</footer>

<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
 <!-- <script src="<?php #echo URL;?>public/js/jquery.js"></script> -->
 <script src="<?php echo URL;?>public/js/default.js"></script>
<?php 
	if (isset($this->js)) {
		foreach ($this->js as $js) {
			echo '<script type="text/javascript" src="'.URL.'views/'.$js.'"></script>';
		}
	}
?>
</body>
</html>