<?php include( get_theme_file_path( 'includes/coupon-box/title.php' ) ) ?>

<?php
$content = get_the_content();
if( $content ){
	$use_coupon_single = couponis_get_option( 'use_coupon_single' );
	?>
	<div class="coupon-box-description">
		<div class="coupon-content-excerpt">	
		<?php
			$content = strip_tags( $content );
			if( strlen( $content ) > 80 ){
				$content_extract = substr( strip_tags( $content ), 0, 80 );
				$temp = explode( ' ', $content_extract );
				unset( $temp[sizeof($temp) -1] );
				$content_extract = implode( ' ', $temp );
				if( $use_coupon_single == 'no' ){
					$content_small = '<div class="small-description">'.$content_extract.'... <a href="javascript:void(0);" class="read-coupon-more toggle-more">'.esc_html__( 'Read More', 'couponis' ).'</a></div>';
					$content_full = '<div class="full-description hidden">'.$content.' <a href="javascript:void(0);" class="read-coupon-more toggle-more">'.esc_html__( 'Show Less', 'couponis' ).'</a></div>';
					$content = $content_small.$content_full;
				}
				else{
					$content = $content_extract.'... <a href="'.esc_url( get_the_permalink() ).'" class="read-coupon-more">'.esc_html__( 'Read More', 'couponis' ).'</a>';
				}
			}

			echo $content;
		?>
		</div>
	</div>
	<?php
}
?>