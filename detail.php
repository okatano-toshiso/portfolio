<?php get_header(); ?>

<div id="slideimage2" style="background-image:url(<?php the_field('logo',247); ?>)" class="text-center">
	<div class="takasa60 hidden-lg hidden-md hidden-xs"></div>
	<h1>
		WORKS
	</h1>
</div>

<div class="wrapper">
	<div class="takasa30"></div>
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
			<h1><?php the_title(); ?></h1>
		</div>
	</div>
	<div class="takasa30"></div>
	<div class="row">
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center">
			<div style=" height: 270px; width: 100%; background-size: cover; background-position: top center; background-repeat: no-repeat; background-image: url(<?php the_field('image'); ?>);"></div>
		</div>
		<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 text-left">
			<div class="haba90">
				<p><?php the_field('information'); ?></p>
				<p>制作種別：<?php echo the_field('brand'); ?></p>
				<p>ＵＲＬ：<?php echo the_field('url'); ?></p>
				<p>役割：<?php echo the_field('role'); ?></p>
				<p>依頼主：<?php echo the_field('client'); ?></p>
				<p>言語：<?php echo the_field('language'); ?></p>
				<p>ＣＭＳ：<?php echo the_field('cms'); ?></p>
				<p>フレームワーク：<?php echo the_field('framework'); ?></p>
				<p>スマホ対応：<?php echo the_field('smartphone'); ?></p>
				<p>サーバー：<?php echo the_field('server'); ?></p>
			</div>
		</div>
	</div>
	<?php echo the_field('program'); ?>
	<div class="takasa90"></div>
	<?php $ctm = get_post_meta($post->ID, 'image01', true);?>
	<?php if(empty($ctm)):?>
	<?php else:?>
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">
			<div class="frame02">
				<a href="<?php the_field('image01'); ?>" target="_blank"><div class="garallyimg02" style="background-image: url(<?php the_field('image01'); ?>);"></div></a>
			</div>
		</div>
	<?php endif;?>
	<?php $ctm = get_post_meta($post->ID, 'image02', true);?>
	<?php if(empty($ctm)):?>
	<?php else:?>
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">
			<div class="frame02">
				<a href="<?php the_field('image02'); ?>" target="_blank"><div class="garallyimg02" style="background-image: url(<?php the_field('image02'); ?>);"></div></a>
			</div>
		</div>
	<?php endif;?>
	<?php $ctm = get_post_meta($post->ID, 'image03', true);?>
	<?php if(empty($ctm)):?>
	<?php else:?>
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">
			<div class="frame02">
				<a href="<?php the_field('image03'); ?>" target="_blank"><div class="garallyimg02" style="background-image: url(<?php the_field('image03'); ?>);"></div></a>
			</div>
		</div>
	<?php endif;?>
	<?php $ctm = get_post_meta($post->ID, 'image04', true);?>
	<?php if(empty($ctm)):?>
	<?php else:?>
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">
			<div class="frame02">
				<a href="<?php the_field('image04'); ?>" target="_blank"><div class="garallyimg02" style="background-image: url(<?php the_field('image04'); ?>);"></div></a>
			</div>
		</div>
	<?php endif;?>
	<?php $ctm = get_post_meta($post->ID, 'image05', true);?>
	<?php if(empty($ctm)):?>
	<?php else:?>
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">
			<div class="frame02">
				<a href="<?php the_field('image05'); ?>" target="_blank"><div class="garallyimg02" style="background-image: url(<?php the_field('image05'); ?>);"></div></a>
			</div>
		</div>
	<?php endif;?>
	<?php $ctm = get_post_meta($post->ID, 'image06', true);?>
	<?php if(empty($ctm)):?>
	<?php else:?>
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">
			<div class="frame02">
				<a href="<?php the_field('image06'); ?>" target="_blank"><div class="garallyimg02" style="background-image: url(<?php the_field('image06'); ?>);"></div></a>
			</div>
		</div>
	<?php endif;?>
	<?php $ctm = get_post_meta($post->ID, 'image07', true);?>
	<?php if(empty($ctm)):?>
	<?php else:?>
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">
			<div class="frame02">
				<a href="<?php the_field('image07'); ?>" target="_blank"><div class="garallyimg02" style="background-image: url(<?php the_field('image07'); ?>);"></div></a>
			</div>
		</div>
	<?php endif;?>
	<?php $ctm = get_post_meta($post->ID, 'image08', true);?>
	<?php if(empty($ctm)):?>
	<?php else:?>
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">
			<div class="frame02">
				<a href="<?php the_field('image08'); ?>" target="_blank"><div class="garallyimg02" style="background-image: url(<?php the_field('image08'); ?>);"></div></a>
			</div>
		</div>
	<?php endif;?>
	<?php $ctm = get_post_meta($post->ID, 'image09', true);?>
	<?php if(empty($ctm)):?>
	<?php else:?>
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">
			<div class="frame02">
				<a href="<?php the_field('image09'); ?>" target="_blank"><div class="garallyimg02" style="background-image: url(<?php the_field('image09'); ?>);"></div></a>
			</div>
		</div>
	<?php endif;?>
	<?php $ctm = get_post_meta($post->ID, 'image10', true);?>
	<?php if(empty($ctm)):?>
	<?php else:?>
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">
			<div class="frame02">
				<a href="<?php the_field('image10'); ?>" target="_blank"><div class="garallyimg02" style="background-image: url(<?php the_field('image10'); ?>);"></div></a>
			</div>
		</div>
	<?php endif;?>
	<?php $ctm = get_post_meta($post->ID, 'image11', true);?>
	<?php if(empty($ctm)):?>
	<?php else:?>
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">
			<div class="frame02">
				<a href="<?php the_field('image11'); ?>" target="_blank"><div class="garallyimg02" style="background-image: url(<?php the_field('image11'); ?>);"></div></a>
			</div>
		</div>
	<?php endif;?>
	<?php $ctm = get_post_meta($post->ID, 'image12', true);?>
	<?php if(empty($ctm)):?>
	<?php else:?>
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">
			<div class="frame02">
				<a href="<?php the_field('image12'); ?>" target="_blank"><div class="garallyimg02" style="background-image: url(<?php the_field('image12'); ?>);"></div></a>
			</div>
		</div>
	<?php endif;?>
	<?php $ctm = get_post_meta($post->ID, 'image13', true);?>
	<?php if(empty($ctm)):?>
	<?php else:?>
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">
			<div class="frame02">
				<a href="<?php the_field('image13'); ?>" target="_blank"><div class="garallyimg02" style="background-image: url(<?php the_field('image13'); ?>);"></div></a>
			</div>
		</div>
	<?php endif;?>
	<?php $ctm = get_post_meta($post->ID, 'image14', true);?>
	<?php if(empty($ctm)):?>
	<?php else:?>
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">
			<div class="frame02">
				<a href="<?php the_field('image14'); ?>" target="_blank"><div class="garallyimg02" style="background-image: url(<?php the_field('image14'); ?>);"></div></a>
			</div>
		</div>
	<?php endif;?>
	<?php $ctm = get_post_meta($post->ID, 'image15', true);?>
	<?php if(empty($ctm)):?>
	<?php else:?>
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">
			<div class="frame02">
				<a href="<?php the_field('image15'); ?>" target="_blank"><div class="garallyimg02" style="background-image: url(<?php the_field('image15'); ?>);"></div></a>
			</div>
		</div>
	<?php endif;?>
	<?php $ctm = get_post_meta($post->ID, 'image16', true);?>
	<?php if(empty($ctm)):?>
	<?php else:?>
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">
			<div class="frame02">
				<a href="<?php the_field('image16'); ?>" target="_blank"><div class="garallyimg02" style="background-image: url(<?php the_field('image16'); ?>);"></div></a>
			</div>
		</div>
	<?php endif;?>
	<?php $ctm = get_post_meta($post->ID, 'image17', true);?>
	<?php if(empty($ctm)):?>
	<?php else:?>
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">
			<div class="frame02">
				<a href="<?php the_field('image17'); ?>" target="_blank"><div class="garallyimg02" style="background-image: url(<?php the_field('image17'); ?>);"></div></a>
			</div>
		</div>
	<?php endif;?>
	<?php $ctm = get_post_meta($post->ID, 'image18', true);?>
	<?php if(empty($ctm)):?>
	<?php else:?>
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">
			<div class="frame02">
				<a href="<?php the_field('image18'); ?>" target="_blank"><div class="garallyimg02" style="background-image: url(<?php the_field('image13'); ?>);"></div></a>
			</div>
		</div>
	<?php endif;?>
</div>
<div class="takasa30"></div>
<?php get_footer(); ?>
