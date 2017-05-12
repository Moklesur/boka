<div class="boka-newsletter">
	<?php if ( ! empty( $instance['title'] ) ) : ?>
		<div class="margin-bottom-30">
			<h4><?php echo esc_html( $instance['title'] ); ?></h4>
		</div>
	<?php endif; ?>
	<div class="newsletter-widget newsletter">
		<form class="position-relative" action="<?php echo $instance['action_url']; ?>" method="post" target="_blank">
			<input type="email" class="form-control" name="newsletter-email" id="newsletter-email" placeholder="info@yoursite.com" required="">
			<button type="submit" class="btn btn-success"><i class="fa fa-envelope"></i></button>
		</form>
	</div>
</div>
