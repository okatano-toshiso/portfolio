<?php
/**
 * @package WordPress
 * @subpackage PORTFOLIO
 */
?>
<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="footer02">
		<div class="footer_area">
			<div class="row zero">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center zero">
					<p class="zero shiro">created by okada toshihiro</p>
				</div>
			</div>
		</div>
	</div>
</footer><!-- .site-footer -->
<?php wp_footer(); ?>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/jquery-3.1.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/iscroll.min.js"></script>
<script>
	$(document).ready(function() {
		$('.drawer').drawer();
	});
</script>
<script>
	$(document).ready(function() {
		$('#media').carousel({
			pause: true,
			interval: false,
		});
	});
</script>
</body>
</html>
