<?php get_header(); ?>
<div id="slideimage2" style="background-image:url(<?php the_field('logo',247); ?>)" class="text-center">
	<div class="takasa60 hidden-lg hidden-md hidden-xs"></div>
	<h1>
		WORKS
	</h1>
</div>
<div class="wrapper pb_30">
	<div class="row pt_30">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
			<h1><?php the_title(); ?></h1>
		</div>
	</div>
	<div class="row pt_30">
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center">
			<div style=" height: 270px; width: 100%; background-size: cover; background-position: top center; background-repeat: no-repeat; background-image: url(<?php the_field('image'); ?>);"></div>
		</div>
		<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 text-left">
			<div class="haba90">
			<?php
				$field_mappings = array(
					'information' => '', 'brand' => '制作種別：', 'url' => 'url：', 'role' => '役割：', 'client' => '依頼主：', 'language' => '言語：', 'cms' => 'CMS：', 'framework' => 'フレームワーク：', 'smartphone' => 'スマホ対応：', 'server' => 'サーバー：'
				);
				foreach ($field_mappings as $field => $label) {
					$value = get_field($field);
					if (!empty($value)) {
						echo '<p>' . $label .(is_array($value) ? implode(', ', $value) : $value) . '</p>';
					}
				}
			?>
			</div>
		</div>
	</div>
	<div class="pt_90">
		<?php echo the_field('program'); ?>
	</div>
	<?php
		$imageFields = array(
			'image01', 'image02', 'image03', 'image04', 'image05',
			'image06', 'image07', 'image08', 'image09', 'image10',
			'image11', 'image12', 'image13', 'image14', 'image15',
			'image16', 'image17', 'image18'
		);
		foreach ($imageFields as $imageField) :
			$imageValue = get_post_meta($post->ID, $imageField, true);
			if (!empty($imageValue)) :
				?>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">
					<div class="frame02">
						<a href="<?php the_field($imageField); ?>" target="_blank">
							<div class="garallyimg02" style="background-image: url(<?php the_field($imageField); ?>);"></div>
						</a>
					</div>
				</div>
				<?php
			endif;
		endforeach;
	?>
</div>
<?php get_footer(); ?>
