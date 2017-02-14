<?php if ( ! empty( $instance['title'] ) ) : ?>
	<h1 class="page-header text-center"><?php echo esc_html( $instance['title'] ); ?></h1>
<?php endif; ?>
<div class="row text-center">
	<?php foreach( $instance['team'] as $i => $team ) : ?>
		<div class="boka-team-list team-list col-md-<?php echo esc_attr( $instance['per_row'] ); ?> col-sm-<?php echo esc_attr( $instance['per_row'] ); ?> col-xs-12 margin-top-20">
			<div class="team-image position-relative overflow">
				<?php
				$profile_picture = $team['profile_picture'];
				$profile_picture_fallback = $team['profile_picture_fallback'];
				$image_details = siteorigin_widgets_get_attachment_image_src(
					$profile_picture,
					'',
					$profile_picture_fallback
				);
				if ( ! empty( $image_details ) ) {
					echo '<img src="' . esc_url( $image_details[0] ) . '" class="img-responsive" alt="" />';
				} ?>
				<ul class="team-social list-inline">
					<?php if ( ! empty( $team['facebook'] ) ) : ?>
						<li><a href="<?php echo sow_esc_url($team['facebook']);?>" class="fb-team" target="_blank"><i class="fa fa-facebook"></i></a></li>
					<?php endif; ?>
					<?php if ( ! empty( $team['linkedin'] ) ) : ?>
						<li><a href="<?php echo sow_esc_url($team['linkedin']);?>" class="li-team" target="_blank"><i class="fa fa-linkedin"></i></a></li>
					<?php endif; ?>
					<?php if ( ! empty( $team['twitter'] ) ) : ?>
						<li><a href="<?php echo sow_esc_url($team['twitter']);?>" class="tw-team" target="_blank"><i class="fa fa-twitter"></i></a></li>
					<?php endif; ?>
				</ul>
			</div>
			<div class="team-details">
				<?php if ( ! empty( $team['team_title'] ) ) : ?>
					<h3><span><?php echo esc_html( $team['team_title'] ); ?></span></h3>
				<?php endif; ?>
				<?php if ( ! empty( $team['team_text'] ) ) : ?>
					<p class="margin-null"><?php echo  $team['team_text'] ; ?></p>
				<?php endif; ?>
			</div>
		</div>
	<?php endforeach; ?>
</div>
