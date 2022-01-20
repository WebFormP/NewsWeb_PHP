<?php require_once('header.php'); ?>

            <!--__--__--__--__--  T H E    S L I D E R --__--__--__--___--__--__--__-->
			<div class="slider-wrapper theme-default">
				<div id="slider" class="nivoSlider">
					<img src="images/slide1.jpg" alt="" />
					<a href="http://geeksband.com"><img src="images/slide2.jpg" alt="" title="This is an example of a caption with a link" /></a>
					<img src="images/slide3.jpg" alt="" title="This is an example of a caption" />
					<img src="images/slide4.jpg" alt="" />
				</div>
			</div>
			<script type="text/javascript">
			$(window).load(function() {
				$('#slider').nivoSlider({pauseTime: 6000,});
			});
			</script>
			
			<!--__--__--__--__--  M A I N   C O N T E N T  --__--__--__--___--__--__-->
			<section>
				<div id="line">
					<div class="dline"></div>
					<h1>Nos derniers articles</h1>
					<div class="dline"></div>
				</div>
				<div id="derniers-articles">
					<article id="art-1">
						<h1>Article 1</h1>
						<img src="images/1.jpg" alt="" />
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque, id pulvinar odio lorem non turpis. Nullam sit amet.</p>
						<a href="article.php" class="rm">En savoir plus...</a>
					</article>
					<article id="art-2">
						<h1>Article 2</h1>
						<img src="images/2.jpg" alt="" />
						<p>Consectetuer adipiscing elit. Suspendisse enim elit. Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque, id pulvinar odio lorem non turpis. Nullam sit.</p>
						<a href="article.php" class="rm">En savoir plus...</a>
					</article>
					<article id="art-3">
						<h1>Article 3</h1>
						<img src="images/3.jpg" alt="" />
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque, id pulvinar odio lorem non turpis. Nullam sit enim.</p>
						<a href="article.php" class="rm">En savoir plus...</a>
					</article>
				</div>
			</section>

<?php require_once('footer.php'); ?>