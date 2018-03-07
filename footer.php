<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tirtha
 */

?>
    </div>
    </div>
    <!-- #content -->
    <footer id="colophon" class="site-footer" role="contentinfo">
        <div class="site-info">
            <div class="wrap">
                <div class="row-site-info">
					<a href="<?php $tirtha = wp_get_theme(); echo $tirtha->get( 'ThemeURI' ); ?>">
	                    <?php _e('&copy; 2018 &middot; Tirtha WordPress theme by Nidhi Jain','tirtha'); ?>
                 	</a>
                </div>

                <div class="footer-right">
                    <ul class="alignleft">
                        <?php if( get_theme_mod('Facebook') ) : ?>
                <li class="social-facebook"><a href="<?php echo esc_url(get_theme_mod('Facebook')) ?>"><i class="fa fa-facebook"></i></a>
                        <?php endif; ?>
                </li>
                        <?php if( get_theme_mod('Google_plus') ) : ?>
                <li class="social-gplus"><a href="<?php echo esc_url(get_theme_mod('Google_plus')) ?>"><i class="fa fa-google-plus"></i></a>
                        <?php endif; ?>
                </li>
                        <?php if( get_theme_mod('Linkedin') ) : ?>
                <li class="social-linkedin"><a href="<?php echo esc_url(get_theme_mod('Linkedin')) ?>"><i class="fa fa-linkedin"></i></a>
                        <?php endif; ?>
                </li>
                        <?php if( get_theme_mod('Twitter') ) : ?>
                <li class="social-twitter"><a href="<?php echo esc_url(get_theme_mod('Twitter')) ?>"><i class="fa fa-twitter"></i></a>
                        <?php endif; ?>
                </li>
            </ul>
                </div>
            </div>
        </div>
        <!-- .site-info -->
    </footer>
    <!-- #colophon -->
    </div>
    <!-- #page -->

    <?php wp_footer(); ?>

        </body>

        </html>
