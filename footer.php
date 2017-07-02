<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package modelo
 */

 get_sidebar('footer'); 
?>
    <div class="footer-bottom site-footer" id="colophon" role="contentinfo">
      <div class="container">
      <div class="row">
          <div class="col-md-6">
            <div class="footer-copyright">
			<?php if (get_theme_mod('modelo_copyright') == '') : ?>
              <p><a href="<?php echo esc_url( __( 'https://wordpress.org/', 'modelo' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'modelo' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'modelo' ), 'modelo', '<a href="http://themesmonk.com/" rel="designer">ThemesMonk.com</a>' ); ?></p>
			<?php else: ?>
			<p><?php echo modelo_escape_html(get_theme_mod('modelo_copyright')); ?></p>
			<?php endif; ?>
            </div>
          </div><!-- /.col-md-6 -->
          <div class="col-md-6">
            <div class="footer-social">
              <ul class="icons list-inline text-right">
				<?php if (get_theme_mod('modelo_payment_icons_dinerclub') == '') : ?>
                <li><a href="#"><i class="fa fa-cc-diners-club"></i></a></li>
				<?php else: endif; ?>
				
				<?php if (get_theme_mod('modelo_payment_icons_discover') == '') : ?>
                <li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
				<?php else: endif; ?>
				
				<?php if (get_theme_mod('modelo_payment_icons_mastercard') == '') : ?>
                <li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
				<?php else: endif; ?>

				<?php if (get_theme_mod('modelo_payment_icons_creditcard') == '') : ?>
                <li><a href="#"><i class="fa fa-credit-card"></i></a></li>
				<?php else: endif; ?>
				
				<?php if (get_theme_mod('modelo_payment_icons_visa') == '') : ?>
                <li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
				<?php else: endif; ?>
				
				<?php if (get_theme_mod('modelo_payment_icons_paypal') == '') : ?>
                <li><a href="#"><i class="fa fa-paypal"></i></a></li>
				<?php else: endif; ?>
				
				<?php if (get_theme_mod('modelo_payment_icons_stripe') == '') : ?>
                <li><a href="#"><i class="fa fa-cc-stripe"></i></a></li>
				<?php else: endif; ?>
				
				<?php if (get_theme_mod('modelo_payment_icons_google_wallet') == '') : ?>
                <li><a href="#"><i class="fa fa-google-wallet" aria-hidden="true"></i></a></li>
				<?php else: endif; ?>
				
				<!-- ------------------------- Social Icons ------------------------- -->
				<!-- **************************************************************** -->
				<?php if (get_theme_mod('show_social_icon_infooter') == '1') : ?>
				
				<?php if (get_theme_mod('model_socialicon_facebook') == '') : ?>
					<li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
				<?php else: ?>
					<li class="facebook"><a href="<?php echo modelo_escape_html(get_theme_mod('model_socialicon_facebook')); ?>"><i class="fa fa-facebook"></i></a></li>
				<?php endif; ?>
				
				<?php if (get_theme_mod('model_socialicon_googleplus') == '') : ?>
					<li class="googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<?php else: ?>
					<li class="googleplus"><a href="<?php echo modelo_escape_html(get_theme_mod('model_socialicon_googleplus')); ?>"><i class="fa fa-google-plus"></i></a></li>
				<?php endif; ?>
				
				<?php if (get_theme_mod('model_socialicon_twitter') == '') : ?>
					<li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
				<?php else: ?>
					<li class="twitter"><a href="<?php echo modelo_escape_html(get_theme_mod('model_socialicon_twitter')); ?>"><i class="fa fa-twitter"></i></a></li>
				<?php endif; ?>
				
				<?php if (get_theme_mod('model_socialicon_linkedin') == '') : ?>
					<li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
				<?php else: ?>
					<li class="linkedin"><a href="<?php echo modelo_escape_html(get_theme_mod('model_socialicon_linkedin')); ?>"><i class="fa fa-linkedin"></i></a></li>
				<?php endif; ?>
				
                <?php if (get_theme_mod('model_socialicon_pinterest') == '') : ?>
					<li class="pinterest"><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
				<?php else: ?>
					<li class="pinterest"><a href="<?php echo modelo_escape_html(get_theme_mod('model_socialicon_pinterest')); ?>"><i class="fa fa-pinterest-p"></i></a></li>
				<?php endif; ?>
				
                <?php if (get_theme_mod('model_socialicon_youtube') == '') : ?>
					<li class="youtube"><a href="#"><i class="fa fa-youtube-play"></i></a></li>
				<?php else: ?>
					<li class="youtube"><a href="<?php echo modelo_escape_html(get_theme_mod('model_socialicon_youtube')); ?>"><i class="fa fa-youtube-play"></i></a></li>
				<?php endif; ?>
				
				<?php else: endif; ?>				
				<!-- **************************************************************** -->
				<!-- ------------------------- Social Icons ------------------------- -->
				
				
              </ul><!-- /.icons .list-inline -->
            </div><!-- /.footer-social -->
			
			
			
          </div><!-- /.col-md-6 -->
        </div><!-- /.container -->
      </div><!-- /.row -->
    </div><!-- /.footer-bottom -->

  </div><!-- /.site-footer -->

</div><!-- /.site /#page -->
<?php wp_footer(); ?>
  </body>
</html>
