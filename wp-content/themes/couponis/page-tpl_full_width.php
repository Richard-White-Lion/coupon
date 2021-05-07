<?php
/*
Template Name: Full Width
*/
get_header();
the_post();
include( get_theme_file_path( 'includes/title.php' ) );
?>


<main>
	<div class="container">
		<div class="white-block">
			<?php 
			if( has_post_thumbnail() ){
				the_post_thumbnail();
			} 
			?>
			<div class="white-block-single-content clearfix">
				<?php the_content() ?>
			</div>
		</div>
		<?php comments_template( '', true ) ?>
	</div>
</main>

<?php get_footer(); ?>