<?php
/*
Template Name: Left Sidebar
*/
get_header();
the_post();
include( get_theme_file_path( 'includes/title.php' ) );
?>

<main>
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<?php get_sidebar('left'); ?>
			</div>
			<div class="col-sm-8">
				<div class="white-block">
					<?php 
					if( has_post_thumbnail() ){
						the_post_thumbnail();
					} 
					?>
					<div class="white-block-single-content clearfix">
						<?php the_content(); ?>
					</div>
				</div>

				<?php comments_template( '', true ); ?>
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>