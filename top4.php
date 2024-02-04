<?php
/*
Template Name: portfolio_top
*/
?>
<?php get_header(); ?>

<style>
.sample {
    background-image: url(<?php the_field('image01', 34); ?>);
}
@media screen and (max-width: 768px) {
.sample li:nth-child(1) {
    background-image: url(<?php the_field('image01', 34); ?>);
}
.sample li:nth-child(2) {
    background-image: url(<?php the_field('image02', 34); ?>);
}
.sample li:nth-child(3) {
    background-image: url(<?php the_field('image03', 34); ?>);
}
.sample li:nth-child(4) {
    background-image: url(<?php the_field('image04', 34); ?>);
}
}
</style>
<div class="takasa45 hidden-lg hidden-md hidden-xs"></div>
<ul class="sample text-center">
	<div style="position:relative;  z-index: 1; width: 100%; margin: 0 auto; text-align: center;"><img src="<?php the_field('logo', 249); ?>" class="slideimage"></div>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
</ul>



<div class="takasa60"></div>
<div class="brand2">
	<div class="contensimage2">
		<div class="wrapper">
				<div class="takasa30"></div>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-left">
						<div class="contensimage2" style="background-image:url(<?php the_field('image01', 35); ?>)">
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-left">
						<div class="takasa30 hidden-lg hidden-md"></div>
						<div class="haba90">
							<div class="text-center">
								<h2 class="brandtitle zero">PROFILE</h2>
							</div>
							<div class="blueline"></div>
							<p>
								プロフィール、スキルセット、保有資格、実務経験、使用プログラム言語、ツールを紹介しています。<br />
								これまでに在籍した会社とその会社内における業務内容および履歴書と職務経歴書もダウンロードできます。<br />
							</p>
						</div>
					</div>
				</div>
				<div class="takasa30"></div>
		</div>
	</div>
</div>
<hr />
<div class="brand2 hidden-sm hidden-xs">
	<div class="contensimage2">
		<div class="wrapper">
				<div class="takasa30"></div>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-left">
						<div class="haba90">
							<div class="text-center">
								<h2 class="brandtitle zero">WEB</h2>
							</div>
							<div class="blueline"></div>
							<p>
								私がこれまでに関わってきたサイト制作実績とその制作における自己の役割分担を記載しています。<br />
								ワードプレスのＷＥＢサイト制作、デザイン、サーバ構築、データベース構築ほか実績を記載しています。
							</p>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-left">
						<div class="contensimage2" style="background-image:url(<?php the_field('image02', 35); ?>)">
						</div>
					</div>
				</div>
				<div class="takasa30"></div>
		</div>
	</div>
</div>


<div class="brand2 hidden-lg hidden-md">
	<div class="contensimage2">
		<div class="wrapper">
				<div class="takasa30"></div>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-left">
						<div class="contensimage2" style="background-image:url(<?php the_field('image02', 35); ?>)">
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-left">
						<div class="takasa30 hidden-lg hidden-md"></div>
						<div class="haba90">
							<div class="text-center">
								<h2 class="brandtitle zero">WEB</h2>
							</div>
							<div class="blueline"></div>
							<p>
								私がこれまでに関わってきたサイト制作実績とその制作における自己の役割分担を記載しています。<br />
								ワードプレスのＷＥＢサイト制作、デザイン、サーバ構築、データベース構築ほか実績を記載しています。<br />
								サイトだけでなくランディングページ他も紹介しております。
							</p>
						</div>
					</div>
				</div>
				<div class="takasa30"></div>
		</div>
	</div>
</div>
<hr />
<div class="brand2">
	<div class="contensimage2">
		<div class="wrapper">
				<div class="takasa30"></div>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-left">
						<div class="contensimage2" style="background-image:url(<?php the_field('image03', 35); ?>)">
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-left">
						<div class="takasa30 hidden-lg hidden-md"></div>
						<div class="haba90">
							<div class="text-center">
								<h2 class="brandtitle zero">BANNER</h2>
							</div>
							<div class="blueline"></div>
							<p>
								Yahoo!、googleなどのアドネットワーク用に作成したバナー実績を紹介しています。<br />
								静的バナーだけでなくFLASHバナーの制作実績もございます。
							</p>
						</div>
					</div>
				</div>
				<div class="takasa30"></div>
		</div>
	</div>
</div>

<hr />
<div class="brand2 hidden-sm hidden-xs">
	<div class="contensimage2">
		<div class="wrapper">
				<div class="takasa30"></div>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-left">
						<div class="haba90">
							<div class="text-center">
								<h2 class="brandtitle zero">PROPOSAL</h2>
							</div>
							<div class="blueline"></div>
							<p>
								これまでに制作した企画書、やサイトレポートを紹介しております。
								エンジニアというだけでなくディレクションや企画、進行部分に関しても経験はございますので、指標にしていただければ幸いです。
							</p>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-left">
						<div class="contensimage2" style="background-image:url(<?php the_field('image04', 35); ?>)">
						</div>
					</div>
				</div>
				<div class="takasa30"></div>
		</div>
	</div>
</div>


<div class="brand2 hidden-lg hidden-md">
	<div class="contensimage2">
		<div class="wrapper">
				<div class="takasa30"></div>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-left">
						<div class="contensimage2" style="background-image:url(<?php the_field('image04', 35); ?>)">
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-left">
						<div class="takasa30 hidden-lg hidden-md"></div>
						<div class="haba90">
							<div class="text-center">
								<h2 class="brandtitle zero">PROPOSAL</h2>
							</div>
							<div class="blueline"></div>
							<p>
								これまでに制作した企画書、やサイトレポートを紹介しております。
								エンジニアというだけでなくディレクションや企画、進行部分に関しても経験はございますので、指標にしていただければ幸いです。
							</p>
						</div>
					</div>
				</div>
				<div class="takasa30"></div>
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
<?php else : ?>
<?php
endif;
?>
	<div class="takasa30"></div>
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
			<a href="/works/" class="btn_detail">
				もっと見る
			</a>
		</div>
	</div>

	<div class="takasa30"></div>
	<!--div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
			<a href="https://www.sinwanet.co.jp/form/contact/" target="_blank" class="btn">お問い合わせ</a>
		</div>
	</div -->
	<div class="takasa60"></div>
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
