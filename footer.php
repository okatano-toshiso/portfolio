<?php
/**
 * @package WordPress
 * @subpackage PORTFOLIO
 */
?>
<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="footer01">
		<div class="footer_area">
			<div class="row zero PT_30">
				<div class="col-lg-1 col-md-1 hidden-sm hidden-xs text-center zero">
				</div>
				<div class="col-lg-2 col-md-2 hidden-sm hidden-xs text-center zero">
					<a href="<?php echo home_url(); ?>/profile/" class="zero"><p>PROFILE</p></a>
				</div>
				<div class="col-lg-2 col-md-2 hidden-sm hidden-xs text-center zero">
					<a href="<?php echo home_url(); ?>/works/?brand=web" class="zero"><p>WEB</p></a>
				</div>
				<div class="col-lg-2 col-md-2 hidden-sm hidden-xs text-center zero">
					<a href="<?php echo home_url(); ?>/works/?brand=lp" class="zero"><p>LP</p></a>
				</div>
				<div class="col-lg-2 col-md-2 hidden-sm hidden-xs text-center zero">
					<a href="<?php echo home_url(); ?>/works/?brand=banner" class="zero"><p>BANNER</p></a>
				</div>
				<div class="col-lg-2 col-md-2 hidden-sm hidden-xs text-center zero">
					<a href="<?php echo home_url(); ?>/works/?brand=proposal" class="zero"><p>PROPOSAL</p></a>
				</div>
				<div class="col-lg-1 col-md-1 hidden-sm hidden-xs text-center zero">
				</div>
			</div>
		</div>
	</div>
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
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/drawer.min.js"></script>
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
