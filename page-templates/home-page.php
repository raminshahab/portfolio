<?php
/**
 * Template Name: Home Page
 */
get_header(); 
?>
<link href="https://fonts.googleapis.com/css?family=Waiting+for+the+Sunrise" rel="stylesheet" type="text/css"/>
<div class="hero-image">
<script src="/wp-content/themes/FoundationPress/src/assets/js/chewse-ratios.js"></script>
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
<div class="section-container">
	<article style="text-align: center; padding: 40px;" data-aos="fade-up">
				<h2>Building next gen websites is my passion, this site is powered by WordPress</h2>
	</article>
	<section class="benefits" data-aos="fade-up">
				<div class="semantic" data-aos="fade-left">
					<img src="/wp-content/themes/FoundationPress/dist/assets/images/demo/semantic.svg" alt="semantic">
					<h3>Semantic</h3>
					<p>Everything is semantic. You can have the cleanest markup without sacrificing the utility and speed of Foundation.</p>
				</div>
				<div class="responsive" data-aos="fade-left">
					<img src="/wp-content/themes/FoundationPress/dist/assets/images/demo/responsive.svg" alt="responsive">
					<h3>Responsive</h3>
					<p>You can build for small devices first. Then, as devices get larger and larger, layer in more complexity for a complete responsive design.</p>

				</div>
				<div class="customizable" data-aos="fade-left">
					<img src="/wp-content/themes/FoundationPress/dist/assets/images/demo/customizable.svg" alt="customizable">
					<h3>Customizable</h3>
					<p>You can customize your build to include or remove certain elements, as well as define the size of columns, colors, font size and more.</p>
				</div>
				<div class="professional" data-aos="fade-left">
					<img src="/wp-content/themes/FoundationPress/dist/assets/images/demo/professional.svg" alt="professional">
					<h3>Professional</h3>
					<p>Millions of designers and developers depend on Foundation. We have business support, training and consulting to help grow your product or service.</p>
				</div>

				<div class="why-foundation">
					<a href="/kitchen-sink">Visit my blog page →</a>
				</div>
	</section>
</div>
<section class="cards-section" data-aos="fade-up">
	<h2>Client Showcase</h2>
	<div class="cards-container">
			<div class="card" data-aos="flip-left">
				 <img class="tcc-logo" src="/wp-content/themes/FoundationPress/dist/assets/images/tcc-logo.png">
					<div class="card-content">
						<h4>Zurb Foundation 6</h4>
							<p>Leveraged using Foundations modular and flexible components that made styling easy. Built with mobile-first design as a high priority.</p>
							<small><a href="http://wwww.thecloroxcompany.com">www.thecloroxcompany.com</a></small>
					</div>
			</div>
			<div class="card" data-aos="flip-left">
				<img src="/wp-content/themes/FoundationPress/dist/assets/images/pinesol-logo.png">
					<div class="card-content">
						  <h4>WordPress</h4>
							<p>Good tools make application development quicker and easier to maintain and using SASS mixins made this project a little easier.</p>
								<small><a href="http://www.pinesol.com">www.pinesol.com</a></small>
					</div>
			</div>
            <div class="card" data-aos="flip-left">
				  <img src="/wp-content/themes/FoundationPress/dist/assets/images/greenworks-logo.png">
					<div class="card-content">
						<h4>API Integration</h4>
							<p>This site uses the latest Bazaarvoice js SDK to display product reviews and submit product reviews for approval. </p>
								<small><a href="http://www.greenworkscleaners.com">www.greenworkscleaners.com</a></small>
					</div>
			</div>
			<div class="card" data-aos="flip-left">
				<img src="/wp-content/themes/FoundationPress/dist/assets/images/ppd-logo.png">
					<div class="card-content">
							<h4>jQuery 3 ES6 WebPack</h4>
							<p>Good tools make application development quicker and easier to maintain than if you did everything by hand..</p>
								<small><a href="https://www.cloroxprofessional.com/">www.cloroxprofessional.com</a></small>
					</div>
			</div>
			<div class="card" data-aos="flip-left">
				<img src="/wp-content/themes/FoundationPress/dist/assets/images/soyvay-logo.png">
					<div class="card-content">
							 <h4>Docker</h4>
							 <p>Good tools make application development quicker and easier to maintain than if you did everything by hand..</p>
								<small><a href="https://www.soyvay.com/">www.soyvay.com</a></small>
					</div>
			</div>
			<div class="card" data-aos="flip-left">
				<img src="/wp-content/themes/FoundationPress/dist/assets/images/sos-logo.png">
					<div class="card-content">
							<h4>SASS</h4>
							<p>Good tools make application development quicker and easier to maintain and using SASS mixins for a good abstraction layer and code resuseablilty. </p>
								<small><a href="https://www.sosclorox.com/">www.sosclorox.com</a></small>
					</div>
			</div>

	</div>
</section>
<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
<script>
AOS.init({duration: 1000});
</script>

<?php
get_footer();
