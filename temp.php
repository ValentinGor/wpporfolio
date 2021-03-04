<!-------------------------------------------------------------------------->
<?php $data = carbon_get_theme_option( 'stg_top_text_calculator' ); ?>
<?php if ( ! empty( $data ) ): ?>
	<?php foreach ( $data as $item ): ?>
		<?php echo $item['slide_main_number'] ?>
		<?php echo $item['slide_slogan_text'] ?>
		<?php echo $item['slide_second_number'] ?>
	<?php endforeach; ?>
<?php endif; ?>
<!-------------------------------------------------------------------------->
<?php $data = carbon_get_post_meta( get_the_ID(), 'gks_slider' ); ?>
<?php if ( ! empty( $data ) ): ?>
	<?php foreach ( $data as $item ): ?>
		<?php echo $item['slide_main_number'] ?>
		<?php echo $item['slide_slogan_text'] ?>
		<?php echo $item['slide_second_number'] ?>
	<?php endforeach; ?>
<?php endif; ?>
<!-------------------------------------------------------------------------->
<?php if ( carbon_get_theme_option( 'stg_top_text_calculator' ) ) { ?>
    <a class="calc scrollTop" href="#calc-block">
		<?php echo carbon_get_theme_option( 'stg_top_text_calculator' ); ?>
    </a>
<?php } ?>
<!-------------------------------------------------------------------------->
<?php if ( carbon_get_post_meta( get_the_ID(), 'about__second_right_head' ) ) { ?>
    <div class="about__advantage_head">
		<?php echo carbon_get_post_meta( get_the_ID(), 'about__second_right_head' ); ?>
    </div>
<?php } ?>
<!-------------------------------------------------------------------------->
<?php $brand_carousel = carbon_get_post_meta( get_the_ID(), 'brand_carousel' ); ?>
<?php if ( ! empty( $brand_carousel ) ): ?>
	<?php foreach ( $brand_carousel as $item ): ?>
        <div class="brand">
			<?php echo $item['brand_carousel_img'] ?>
        </div>
	<?php endforeach; ?>
<?php endif; ?>
<!-------------------------------------------------------------------------->
<?php if ( carbon_get_theme_option( 'phone_number' ) ) { ?>
	<?php
	$tel = carbon_get_theme_option( 'phone_number' );
	$tel = preg_replace( '![^0-9+]!', '', $tel );
	?>
    <a href="tel:<?php echo $tel; ?>"><?php echo carbon_get_theme_option( 'phone_number' ); ?></a>
<?php } ?>
<!-------------------------------------------------------------------------->
<?php if ( carbon_get_post_meta( get_the_ID(), 'phone_number' ) ) { ?>
	<?php
	$tel = carbon_get_post_meta( get_the_ID(), 'phone_number' );
	$tel = preg_replace( '![^0-9+]!', '', $tel );
	?>
    <a href="tel:<?php echo $tel; ?>"><?php echo carbon_get_post_meta( get_the_ID(), 'phone_number' ); ?></a>
<?php } ?>
<!-------------------------------------------------------------------------->
<?php
$data_arr = carbon_get_post_meta( get_the_ID(), 'preferences' );
if ( ! empty( $data_arr ) ): ?>
	<?php foreach ( $data_arr as $cnt => $item ): ?>
		<?php if ( $item['_type'] == 'movie' ): ?>
			<?php echo $item['name']; ?>
		<?php endif; ?>
		<?php if ( $item['_type'] == 'music' ): ?>
			<?php echo $item['writer']; ?>
		<?php endif; ?>
	<?php endforeach; ?>
<?php endif; ?>
<!-------------------------------------------------------------------------->
<img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/img/img-4.jpg" alt="img">
<h2>Heading 1</h2>
<h3>Heading 2</h3>
<p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat
    duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
<img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/img/img-5.jpg" alt="img">
<img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/img/img-6.jpg" alt="img">