<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ocin Lite
 */

?>

        </main><!-- #main -->

    </div><!-- /#container -->

	<div class="sub-footer">
        <div class="container">
            <div class="row">

                <div class="col-md-5">
                    <p><a href="http://mirsna.net/" title="Толкование и значение сна" target="_blank">сонник</a> - <a rel="nofollow" rel="designer" href="https://www.quemalabs.com/" target="_blank">quema labs</a>
                    </p>
                </div>
                <div class="col-md-7">
                    <?php get_template_part( '/template-parts/social-menu', 'footer' ); ?>
                </div>

            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .sub-footer -->


<?php wp_footer(); ?>

</body>
</html>