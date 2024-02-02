<?php
/*
Template Name: garally
*/
?>
<?php get_header(); ?>
<?php
     //URLとして渡されたパラメータを取得し、
     //$par01という変数に入れておく。
     $brand = $_GET['brand'];
     $price = $_GET['price'];
     $type = $_GET['type'];	 
?>

<div id="slideimage2" style="background-image:url(<?php the_field('image01',34); ?>)" class="text-center">
	<h1>
		ギャラリー
	</h1>
</div>




<div class="takasa60"></div>
<div class="brand2">
	<div class="contensimage2">
		<div class="wrapper">
				<div class="takasa30"></div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center">
						<div style=" height: 270px; width: 100%; background-size: cover; background-position: center center; background-repeat: no-repeat; background-image: url(<?php the_field('logo',108); ?>);"></div>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 text-left">
						<div class="haba90">
							<p>
								テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
							</p>
							<p>
							<h2>絞り込み</h2>
							</p>
							<div class="haba90" style="clear: both;">
								ブランドから探す
								<br clear="all">
								<div class="brand_btn">KIRAKU</div>
								<div class="brand_btn">季光風土</div>
								<div class="brand_btn">LIFE</div>
								<div class="brand_btn">4c STYLE</div>
							</div>
							<div class="haba90" style="clear: both;">
								価格帯からから探す
								<br clear="all">
								<div class="brand_btn">〜300万円</div>
								<div class="brand_btn">300万円〜500万円</div>
								<div class="brand_btn">500万円〜</div>
							</div>
							<div class="haba90" style="clear: both;">
								タイプから探す
								<br clear="all">
								<div class="brand_btn">タイプ01</div>
								<div class="brand_btn">タイプ02</div>
								<div class="brand_btn">タイプ03</div>
							</div>
						</div>
					</div>
				
				<div class="takasa30"></div>
		</div>
	</div>
</div>



<hr />
<div class="takasa60"></div>
<div class="wrapper text-center">
	<h2>一覧</h2>
	<div class="takasa30"></div>
	
	



	
<?php
$paged = (int) get_query_var('paged');
$args = Array(
            'posts_per_page' => 18,
			'category' => 6,
            'meta_query' => array(array(
                                'key' => 'brand',
                                'value' => $brand,
                                'compare' =>'=',
                            )),
			'relation' => 'AND'
        );
$the_query = new WP_Query($args);
$customPosts = get_posts($args);
if($customPosts) : foreach($customPosts as $post) : setup_postdata( $post );
$image = get_post_meta($post->ID, capture, false);
foreach($image as $image){
$image = wp_get_attachment_url($image);
}									
?>
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 text-left" style="height: 300px; overflow: hidden;">
		<div class="yokohaba95">
			<a href="<?php the_permalink(); ?>">
				<div style=" height: 220px; width: 100%; background-size: cover; background-position: center center; background-repeat: no-repeat; background-image: url(<?php the_field('image'); ?>);"></div>
			</a>
			<p class="case_title text-center" style="height: 45px; line-height: 30px; overflow: hidden;">
				<strong><?php the_title(); ?></strong>
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
			<a href="https://www.sinwanet.co.jp/form/contact/" target="_blank" class="zero"><div class="btn">お問い合わせ</div></a>
		</div>
	</div>
	<div class="takasa60"></div>
</div>
<?php get_footer(); ?>
