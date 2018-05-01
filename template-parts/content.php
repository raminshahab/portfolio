<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<article class="blog-entries" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		if ( is_single() ) {
			the_title( '<h1 class="entry-title">', '</h1>' );
		} else {
			the_title( '<h2 class="entry-title media-object" class="docs-heading" data-magellan-target="media-object" ><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		}
	?>
	<?php #foundationpress_entry_meta(); ?>

	<div class="media-object">
		<div class="media-object-section">
			<?php 
			if(has_post_thumbnail()){
				the_post_thumbnail('thumbnail', ['class' => 'thumbnail']);
			  }else{
				print('<img class="thumbnail" src="https://placeimg.com/200/200/tech">');
			}
			?>
		</div>
		<div class="media-object-section">
			<h4>Dreams feel real while we're in them.</h4>
				<p><?php the_excerpt(); ?></p>
		</div>
	</div>
</article>
