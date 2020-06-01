<?php $Bdata = $this->MCData ?>
<style>
	.MRBook:after {
		background: no-repeat center / cover url("<?php echo($Bdata[0]['image']); ?>");
	}
</style>
<div class="content">
	<!-- Start of sectors -->

	<!-- #1 First sector, the slogan -->

	<sector class="sectorOne">
		<span class="poster">OWLIBS</span>
		<span class="miniPoster">THE PLACE YOU GO FOR CODES</span>
	</sector>

	<!-- #2 Second sector, the most clicked book -->

	<sector id="sectorTwo" class="sector sectorTwo">
		<div class="MRBook">
			<div class="title"><a style="color: inherit;text-decoration: none;" href="<?php echo($Bdata[0]["link"]) ?>"><?php echo $Bdata[0]['title']; ?></a></div>
			<span class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae repudiandae error ipsum dignissimos deserunt praesentium iusto dolorum tempora incidunt sequi ipsam odit nesciunt tenetur sunt corporis, inventore animi harum voluptatibus?</span>
		</div>
	</sector>

	<!-- #3 Third sector, the question -->

	<sector class="sector sectorThree">
		<span class="question poster">WHAT DO YOU CODE?</span>
	</sector>

	<!-- #4 Fourth sector, the categories of programming -->

	<sector class="sector sectorFour">
		<div class="element webDev">
			websites
		</div>
		<div class="element systemDev">
			systems
		</div>
		<div class="element appDev">
			apps
		</div>
		<div class="element gameDev">
			games
		</div>
	</sector>

	<!-- #5 Fifth sector, the most clicked books by the category -->

	<sector class="sector sectorFive">
		<span class="topBest">Top best books</span>
		<div style="margin-top: 5vh" class="bookSector">
			<?php
				$books = $Bdata;
				foreach ($books as $book) {
			?>
			<a class="bookLink" href="<?php echo URL.$book['link']; ?>">
				<div class="bookThumb">
					<img src="<?php echo URL;?>public/images/book1.jpg" alt="" class="thumbImg">
					<div class="thumbContent">Lorem ipsum dolor sit amet.</div>
				</div>
			</a>
			<?php
				}
			?>
		</div>
		<div class="emptySpace"></div>
	</sector>

	<!-- End of sectors -->
</div>