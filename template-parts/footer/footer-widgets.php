<?php
/**
 * Displays the footer widget area
 *
 * @package gutenberg-starter-theme
 * @since 1.0.0
 */

if ( is_active_sidebar( 'sidebar-1' ) ) : ?>

	<section class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'gutenberg-starter-theme' ); ?>">
		<?php
		if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
			<aside class="widget-column footer-widget-1">
				<?php dynamic_sidebar( 'sidebar-1' ); ?>
			</aside>
		<?php
		endif; ?>

		<aside class="widget-column footer-widget-2">
			<?php if ( has_nav_menu( 'footer' ) ) : ?>
				<nav class="footer-navigation" aria-label="<?php esc_attr_e( 'Footer Menu', 'gutenberg-starter-theme' ); ?>">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'container'		 => false,
							'menu_class'     => 'footer-menu',
							'depth'          => 1,
						)
					);
					?>
				</nav><!-- .footer-navigation -->
			<?php endif; ?>
			<?php if ( has_nav_menu( 'social' ) ) : ?>
				<nav class="social-navigation" aria-label="<?php esc_attr_e( 'Social Menu', 'gutenberg-starter-theme' ); ?>">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'social',
							'container'		 => false,
							'menu_class'     => 'social-menu',
							'depth'          => 1,
							'link_before'	 => '<i class="icon"></i>',
						)
					);
					?>
				</nav><!-- .footer-navigation -->
			<?php endif; ?>

			<?php dynamic_sidebar( 'sidebar-2' ); ?>
		</aside>

		<?php
		if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
			<aside class="widget-column footer-widget-3">
				<?php dynamic_sidebar( 'sidebar-3' ); ?>
			</aside>
		<?php
		endif; ?>

		<?php
		if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
			<aside class="widget-column footer-widget-4">
				<?php dynamic_sidebar( 'sidebar-4' ); ?>
			</aside>
		<?php
		endif; ?>
		
	</section><!-- .widget-area -->

<?php endif; ?>