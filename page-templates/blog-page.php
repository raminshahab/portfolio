<?php
/**
 * Template Name: Post Page
 */
get_header(); ?>
<link href="https://fonts.googleapis.com/css?family=Waiting+for+the+Sunrise" rel="stylesheet" type="text/css"/>
<div class="hero-image">
  <div id="ramin" data-aos="fade-up">
  	<h1>The Web made Simple!</h1>
  	<p>Websites derived by purpose and driven by passion. Bringing digital dreams to life. I specialize 
  	in web development from corporate to freelance, I bring the heat when it comes to getting it done. </p>
  	 <!--
  	 	<h2 id="typed-text"></h2>
     <h1>Hi, I am <span class="highlight">Ramin Shahab</span> </h1>
     <h2>I'm a Full Stack Engineer</h2>
     <button>Lets create something nice</button>
     <small>Photo by rawpixel.com on Unsplash</small>
	 -->
  </div>
</div>
<?php print_r($posts); ?>
<?php  if(have_posts()) : while (have_posts()) : the_post();

		echo the_post();

	endwhile; endif; wp_reset_postdata(); ?>

<?php
get_footer();
