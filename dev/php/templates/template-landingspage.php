<?php
/*
Template Name: Landingspage
*/
?>

<?php get_header(); ?>

	<div class="Slider" >
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/slider_01.jpg" />
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/slider_02.jpg" />
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/slider_03.jpg" />
	</div>
	<div class="Welcome" >Welkom bij Traffic Rijschool</div>
	<div class="Proefles" >
		<div class="u-gridContainer">
			<a href="#">
				<div class="Proefles-button">Vraag een gratis proefles aan!</div>
			</a>
		</div>
	</div>
	<div class="full-width-white">
		<div class="Ups-container u-gridContainer">
		<div class="u-gridRow">
				<div class="u-gridCol12">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
				<?php endwhile; endif; ?>
					
				</div>
			</div>
						<div class="u-gridRow">
				<div class="u-gridCol6">
					<ul class="ups" viewBox="0 0 50 20">
						<li>Al ruim 18 jaar ervaring</li>
						<li>Hoog slagingspercentage</li>
						<li>Termijnbetaling mogelijk</li>
						<li>Rijlessen vanaf 16,5 jaar</li>
						<li>Weekenden en avonden</li>
					</ul> 
				</div>
				<div class="u-gridCol6 secondUps">
					<ul class="ups" viewBox="0 0 50 20">
						<li>Altijd dezelfde instructeur</li>
						<li>Aanhanger rijbewijs</li>
						<li>Spoedopleidingen</li>
						<li>Faalangst examen</li>
						<li>Gratis proefles</li>
					</ul> 
				</div>
			</div>
		</div>
	</div>		
	<div class="Aanmelden">
		<div class="u-gridContainer">
			<a href="#"><div class="Aanmelden-button">Aanmelden</div></a>
			<div class="Advert u-gridRow">
				<div class="Aanmelden-image u-gridCol4">
					 <a target="_blank" href="#">
						<img width="250" height="250" src="<?php echo get_stylesheet_directory_uri(); ?>/img/svg/rijbewijs.svg">
					</a></br>
					Rijbewijs			
				</div>
				<div class="Aanmelden-image u-gridCol4">
					<a target="_blank" href="#">
						<img width="250" height="250" src="<?php echo get_stylesheet_directory_uri(); ?>/img/svg/aanhang.svg">
					</a></br>
					Aanhanger
				</div>
				<div class="Aanmelden-image u-gridCol4">
					<a target="_blank" href="#">
						<img width="250" height="250" src="<?php echo get_stylesheet_directory_uri(); ?>/img/svg/phone.svg">
					</a></br>
					Traffic App
					</div>
			</div>
		</div>
	</div>
	<div class="Home-content">
		<div class="u-gridContainer">
			<div class="u-gridRow">
				<div class="u-gridCol6">
					<h1>Onze visie</h1>
					<p>Het volgen van een goede rijopleiding is een investering in uw eigen veiligheid. 
						Wij verzorgen goed gestructureerde rijlessen en maken gebruik van de meest nieuwe 
						methodieken, zodat u perfect opgeleidt wordt. 
					</p>
				</div>
				<div class="u-gridCol6">
					<h1>Gratis proefles</h1>
					<p>
						Gratis proefles. Even proeven van het autorijden en meteen een passend 
						advies. Dat is hoe de opleidingen bij autorijschool Traffic beginnen. 
					</p>
				<div class="Home-content-button">
				<a href="#">
						Meer info >
				</a>
			</div>
				</div>
			</div>
		</div>
	</div>


	<!--<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<article class="Content Content--home" id="post-<?php the_ID(); ?>">
			<h2><?php the_title(); ?></h2>
			<div>
				<?php the_content(); ?>
				<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
			</div>
		</article>
	<?php endwhile; endif; ?>
	</div>-->

<?php get_footer(); ?>
