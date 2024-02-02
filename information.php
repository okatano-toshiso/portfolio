<?php get_header(); ?>
<div id="slideimage2" style="background-image:url(<?php the_field('logo',247); ?>)" class="text-center">
	<div class="takasa60 hidden-lg hidden-md hidden-xs"></div>
	<h1>
		INFORMATION
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
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-left">
			<div class="haba90">
				<p><?php the_field('text'); ?></p>
			</div>
		</div>
	</div>
	<div class="takasa30"></div>
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
			<h2><?php the_field('subtitle01'); ?></h2>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-left">
			<div class="haba90">
				<p><?php the_field('text01'); ?></p>
			</div>
		</div>
	</div>
	<div class="takasa30"></div>
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
			<h2><?php the_field('subtitle02'); ?></h2>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-left">
			<div class="haba90">
				<p><?php the_field('text02'); ?></p>
			</div>
		</div>
	</div>
</div>
<div class="takasa30"></div>
<?php get_footer(); ?>
