			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div id="inner-footer" class="wrap cf">


					<nav role="navigation" class=" footer-nav footer-nav-important">
					<h5 class="text-center">Important Links</h5>
						<?php wp_nav_menu(array(
    					'container' 	  => 'div',                               // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
    					'container_class' => 'footer-links footer-important-links cf',                   // class of container (should you choose to use it)
    					'menu'            => __( 'Footer Important Links', 'bonestheme' ),   // nav name
    					'menu_class'      => 'nav footer-nav footer-important cf',                 // adding custom nav class
    					'theme_location'  => 'footer-links',                      // where it's located in the theme
    					'before'          => '',                                  // before the menu
    					'after'           => '',                                  // after the menu
    					'link_before'     => '',                                  // before each link
    					'link_after'      => '',                                  // after each link
    					'depth'           => 0,                                   // limit the depth of the nav
    					'fallback_cb'     => 'bones_footer_links_fallback'        // fallback function
						)); ?>
					</nav>
					<nav role="navigation" class="footer-nav footer-nav-social">
						<h5 class="text-center">Follow Us!</h5>
						<?php wp_nav_menu(array(
    					'container' 	  => 'div',                               // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
    					'container_class' => 'footer-links cf',                   // class of container (should you choose to use it)
    					'menu'            => __( 'Footer Social Links', 'bonestheme' ),   // nav name
    					'menu_class'      => 'nav footer-nav footer-social cf',                 // adding custom nav class
    					'theme_location'  => 'footer-links',                      // where it's located in the theme
    					'before'          => '',                                  // before the menu
    					'after'           => '',                                  // after the menu
    					'link_before'     => '',                                  // before each link
    					'link_after'      => '',                                  // after each link
    					'depth'           => 0,                                   // limit the depth of the nav
    					'fallback_cb'     => 'bones_footer_links_fallback'        // fallback function
						)); ?>
					</nav>

					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>

				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
