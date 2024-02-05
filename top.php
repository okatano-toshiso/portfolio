<?php
/*
Template Name: portfolio_top
*/
?>
<?php get_header(); ?>
<style>
.sample {
    background-image: url(<?php the_field('key_visual'); ?>);
}
</style>
<div class="takasa45 hidden-lg hidden-md hidden-xs"></div>
<ul class="sample text-center">
	<div style="position:relative;  z-index: 1; width: 100%; margin: 0 auto; text-align: center;"><img src="<?php the_field('logo', 249); ?>" class="slideimage"></div>
</ul>
<div class="brand2 pt_60">
	<div class="contensimage2">
		<div class="wrapper">
			<div class="row pt_30 pb_30">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-left">
					<div class="contensimage2" style="background-image:url(<?php the_field('label01_image'); ?>)"></div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-left">
					<div class="takasa30 hidden-lg hidden-md"></div>
					<div class="haba90">
						<div class="text-center">
							<h2 class="brandtitle "><?php the_field('label01'); ?></h2>
						</div>
						<div class="blueline"></div>
						<p>
							<?php the_field('label01_description'); ?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<hr />
<div class="brand2 pt_60">
	<div class="contensimage2">
		<div class="wrapper">
			<div class="row pt_30 pb_30">
				<div class="hidden-lg hidden-md col-sm-12 col-xs-12 text-left">
					<div class="contensimage2" style="background-image:url(<?php the_field('label02_image'); ?>)">
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-left">
					<div class="haba90">
						<div class="text-center">
							<h2 class="brandtitle "><?php the_field('label02'); ?></h2>
						</div>
						<div class="blueline"></div>
						<p>
							<?php the_field('label02_description'); ?>
						</p>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 text-left hidden-sm hidden-xs">
					<div class="contensimage2" style="background-image:url(<?php the_field('label02_image'); ?>)">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="brand2 pt_60">
	<div class="contensimage2">
		<div class="wrapper">
			<div class="row pt_30 pb_30">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-left">
					<div class="contensimage2" style="background-image:url(<?php the_field('label03_image'); ?>)">
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-left">
					<div class="takasa30 hidden-lg hidden-md"></div>
					<div class="haba90">
						<div class="text-center">
							<h2 class="brandtitle "><?php the_field('label03'); ?></h2>
						</div>
						<div class="blueline"></div>
						<p>
							<?php the_field('label03_description'); ?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<hr />
<div class="brand2">
	<div class="contensimage2">
		<div class="wrapper">
			<div class="row pt_30 pb_30">
				<div class="hidden-lg hidden-md col-sm-12 col-xs-12 text-left">
					<div class="contensimage2" style="background-image:url(<?php the_field('label04_image'); ?>)">
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-left">
					<div class="haba90">
						<div class="text-center">
							<h2 class="brandtitle "><?php the_field('label04'); ?></h2>
						</div>
						<div class="blueline"></div>
						<p>
							<?php the_field('label04_description'); ?>
						</p>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 text-left hidden-sm hidden-xs">
					<div class="contensimage2" style="background-image:url(<?php the_field('label04_image'); ?>)">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<hr />
<div class="wrapper text-center">
	<h1>WORKS</h1>
	<p>制作実績</p>
	<?php
	$paged = (int) get_query_var('paged');
	$args = array(
		'posts_per_page' => 18,
		'category' => 6,
		'order' => 'DESC'
	);
	$the_query = new WP_Query($args);
	$customPosts = get_posts($args);
	if($customPosts) : foreach($customPosts as $post) : setup_postdata($post);
		$image = get_post_meta($post->ID, 'capture', false);
		foreach($image as $image) {
			$image = wp_get_attachment_url($image);
		}
    ?>
			<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 text-left" style="height: 230px; overflow: hidden;">
				<div class="yokohaba95">
					<a href="<?php the_permalink(); ?>">
						<div class="frame03">
							<div class="garallyimg03" style="background-image: url(<?php the_field('image'); ?>);"></div>
						</div>
					</a>
					<p class="case_title text-left haba95" style="height: 60px; line-height: 140%; overflow: hidden; margin-top: 10px;">
						<?php echo mb_substr($post->post_title, 0, 30); ?>
					</p>
				</div>
			</div>
		<?php endforeach; ?>
	<?php endif; ?>
	<div class="row pt_30 pb_90">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
			<a href="/works/" class="btn_detail">もっと見る</a>
		</div>
	</div>
</div>
<?php get_footer(); ?>
<script>
function slide() {
	var speed = 3000;
	var interval = 5000;
	var slide = $('.slider .slide');
	var count = 0;
	var length = slide.length-1;
	setInterval(function(){
		$(slide[count]).fadeOut(speed);
		if ( count >= length ) {
			count = 0;
		} else {
			count++;
		}
		$(slide[count]).fadeIn(speed);
	}, interval);
}
</script>
