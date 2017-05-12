<div class="boka-social-media">
	<?php if ( ! empty( $instance['title'] ) ) : ?>
		<div class="margin-bottom-30">
			<h1 class="page-header"><?php echo esc_html( $instance['title'] ); ?></h1>
		</div>
	<?php endif; ?>
	<div class="social-widget social-media">
		<ul class="list-inline margin-bottom-0">
			<?php
			if(get_theme_mod('footer_fb','1')) {
				echo '<li><a href="'.get_theme_mod('footer_fb','https://www.facebook.com/ ').'"  target="_blank"><i class="fa fa-facebook"></i></a></li>';
			}
			if(get_theme_mod('footer_tw','1')) {
				echo '<li><a href="'.get_theme_mod('footer_tw','https://twitter.com').'" target="_blank"><i class="fa fa-twitter"></i></a></li>';
			}
			if(get_theme_mod('footer_li','1')) {
				echo '<li><a href="'.get_theme_mod('footer_li','https://linkedin.com').'" target="_blank"><i class="fa fa-linkedin"></i></a></li>';
			}
			if(get_theme_mod('footer_pint','1')) {
				echo '<li><a href="'.get_theme_mod('footer_pint','https://pinterest.com').'" target="_blank"><i class="fa fa-pinterest"></i></a></li>';
			}
			if(get_theme_mod('footer_ins','1')) {
				echo '<li><a href="'.get_theme_mod('footer_ins','https://instagram.com').'" target="_blank"><i class="fa fa-linkedin"></i></a></li>';
			}
			if(get_theme_mod('footer_dri','1')) {
				echo '<li><a href="'.get_theme_mod('footer_dri','https://dribbble.com').'" target="_blank"><i class="fa fa-dribbble"></i></a></li>';
			}
			if(get_theme_mod('footer_plus','1')) {
				echo '<li><a href="'.get_theme_mod('footer_plus','https://plus.google.com').'" target="_blank"><i class="fa fa-google-plus"></i></a></li>';
			}
			if(get_theme_mod('footer_you','1')) {
				echo '<li><a href="'.get_theme_mod('footer_you','https://youtube.com').'" target="_blank"><i class="fa fa-youtube"></i></a></li>';
			}
			?>
		</ul>
	</div>
</div>
