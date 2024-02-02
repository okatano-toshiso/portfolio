<?php
/*
Template Name: toppage
*/
?>
<?php get_header(); ?>
<div id="slideimage" style="background-image:url(<?php the_field('image01',34); ?>)">
	<div class="takasa150"></div>
	<h1>
		東濃桧を使った100年住み続けられる家<br />
		伝統技術を継承する大工育成<br />
		地域密着だから続く長期アフターサポート
	</h1>
</div>
<div class="wrapper">
	<div class="takasa30"></div>
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 text-left">
			<h2>新着情報</h2>
<?php
$paged = (int) get_query_var('paged'); 
$args = array(
'posts_per_page' => 10,
'order' => 'DESC'
);
$the_query = new WP_Query($args);
$customPosts = get_posts($args);
if($customPosts) : foreach($customPosts as $post) : setup_postdata( $post );
$image = get_post_meta($post->ID, capture, false);
foreach($image as $image){
$image = wp_get_attachment_url($image);
}									
?>
		<div class="yokohaba95">
			<a href="<?php the_permalink(); ?>">
				<?php echo get_the_date(); ?>：<?php the_title(); ?>
			</a>
		</div>
<?php endforeach; ?>
<?php else : ?>
<?php 
endif;
?>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
			<div class="fb-page" data-href="https://www.facebook.com/sinwanet/" data-tabs="timeline" data-width="300" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/sinwanet/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/sinwanet/">株式会社新和建設</a></blockquote></div>
		</div>
	</div>
	<div class="takasa30"></div>
</div>

<div class="takasa60"></div>
<div class="brand">
	<div class="contensimage" style="background-image:url(<?php the_field('image01',35); ?>)">
		<div class="wrapper">
			<div class="haba80">
				<div class="takasa30"></div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-left">
						<h2>ブランドネームＡ</h2>
					</div>
				</div>
				<div class="takasa30"></div>
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
						<img src="<?php the_field('image01',39); ?>" alt="ブランド画像" class="brandimg">
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-left">
						<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
					</div>
				</div>
				<div class="takasa30"></div>
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
						<img src="<?php the_field('image02',39); ?>" alt="ブランド画像" class="brandimg">
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-left">
						<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="takasa60"></div>
<div class="brand">
	<div class="contensimage" style="background-image:url(<?php the_field('image02',35); ?>)">
		<div class="wrapper">
			<div class="haba80">
				<div class="takasa30"></div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-left">
						<h2>ブランドネームB</h2>
					</div>
				</div>
				<div class="takasa30"></div>
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
						<img src="<?php the_field('image01',48); ?>" alt="ブランド画像" class="brandimg">
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-left">
						<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
					</div>
				</div>
				<div class="takasa30"></div>
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
						<img src="<?php the_field('image02',48); ?>" alt="ブランド画像" class="brandimg">
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-left">
						<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="takasa60"></div>
<div class="brand">
	<div class="contensimage" style="background-image:url(<?php the_field('image03',35); ?>)">
		<div class="wrapper">
			<div class="haba80">
				<div class="takasa30"></div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-left">
						<h2>ブランドネームC</h2>
					</div>
				</div>
				<div class="takasa30"></div>
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
						<img src="<?php the_field('image01',49); ?>" alt="ブランド画像" class="brandimg">
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-left">
						<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
					</div>
				</div>
				<div class="takasa30"></div>
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
						<img src="<?php the_field('image02',49); ?>" alt="ブランド画像" class="brandimg">
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-left">
						<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="takasa60"></div>
<div class="brand">
	<div class="contensimage" style="background-image:url(<?php the_field('image04',35); ?>)">
		<div class="wrapper">
			<div class="haba80">
				<div class="takasa30"></div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-left">
						<h2>ブランドネームD</h2>
					</div>
				</div>
				<div class="takasa30"></div>
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
						<img src="<?php the_field('image01',50); ?>" alt="ブランド画像" class="brandimg">
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-left">
						<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
					</div>
				</div>
				<div class="takasa30"></div>
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
						<img src="<?php the_field('image02',50); ?>" alt="ブランド画像" class="brandimg">
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-left">
						<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="takasa60"></div>
<div class="wrapper text-center">
	<h1>ギャラリー</h1>
	<p>サブタイトル</p>
	<div class="takasa30"></div>
<?php
$paged = (int) get_query_var('paged'); 
$args = array(
'posts_per_page' => 3,
'category' => 6,
'order' => 'DESC'
);
$the_query = new WP_Query($args);
$customPosts = get_posts($args);
if($customPosts) : foreach($customPosts as $post) : setup_postdata( $post );
$image = get_post_meta($post->ID, capture, false);
foreach($image as $image){
$image = wp_get_attachment_url($image);
}									
?>
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-left" style="height: 350px; overflow: hidden;">
		<div class="yokohaba95">
			<a href="<?php the_permalink(); ?>">
				<div style=" height: 170px; width: 100%; background-size: cover; background-position: center center; background-repeat: no-repeat; background-image: url(<?php the_field('image'); ?>);"></div>
			</a>
			<div class="takasa15"></div>
			<p class="case_title" style="height: 60px; line-height: 30px; overflow: hidden;">
				<strong><?php the_title(); ?></strong>
			</p>
			<p>
				<?php echo mb_substr((post_custom('information')),0,100); ?>...
			</p>
		</div>
	</div>
<?php endforeach; ?>
<?php else : ?>
<?php 
endif;
?>
	<div class="takasa30"></div>
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
			<div class="btn">お問い合わせ</div>
		</div>
	</div>
	<div class="takasa60"></div>
</div>
<?php get_footer(); ?>
