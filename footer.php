<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Luxury-With-Love
 */

?>
<!--FOOTER START-->
<!--FOOTER1-->
<section class="footer-newsletter">
    <div class="container footer-content-newsletter py-5">
        <div class="row g-3">
            <div class="col-lg-10 col-md-12">
                <div class="display-5 footer-1-title">you’ve come so far.</div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="footer-1-text fs-6">So why not join our crew of airsoft nutheads for monthly promotions,
                    updates and tips?
                    <span class="d-lg-block">Nothing can go wrong</span>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 my-md-2 py-md-2 g-5">
                <form class="d-lg-flex flex-wrap gap-5 footer-1-form">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">YOUR EMAIL</label>
                        <input type="email" class="form-control border border-0 bg-secondary text-light"
                            id="exampleInputEmail1" aria-describedby="emailHelp" />
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">YOUR NAME</label>
                        <input type="password" class="form-control border border-0 bg-secondary text-light"
                            id="exampleInputPassword1" />
                    </div>
                    <button type="submit" class="btn hero-card-btn btn-primary mt-3 ps-2">
                        Subscribe
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!--FOOTER2-->
<section class="footer-content-termsAndConditions-wrapper">
    <div class="container footer-content-logo-social py-5">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer-content-logo pb-5">
                    <img class="footer-logo-image"
                        src="<?php echo get_template_directory_uri(  ); ?>/assets/images/logo-black.png" alt="" />
                </div>
                <div class="footer-content-social ">
                    <ul class="footer-content-social-list list-unstyled d-flex gap-4">
                        <li>
                            <a href="#" target="_blank"><img
                                    src="<?php echo get_template_directory_uri(  ); ?>/assets/images/smb1.png"
                                    alt="icon-twitter" /></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><img
                                    src="<?php echo get_template_directory_uri(  ); ?>/assets/images/smb2.png"
                                    alt="icon-facebook" /></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><img
                                    src="<?php echo get_template_directory_uri(  ); ?>/assets/images/smb3.png"
                                    alt="icon-instagram" /></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><img
                                    src="<?php echo get_template_directory_uri(  ); ?>/assets/images/smb4.png"
                                    alt="icon-youtube" /></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="d-flex gap-5 m-auto footer-content-text text-uppercase">
                    <a class="text-decoration-none link-dark" href="#">Contact Us</a></p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex gap-5 m-auto footer-content-text text-uppercase">
                    <a class="text-decoration-none link-dark " href="#">Terms & Policies</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--FOOTER3-->
<section class="footer-content-copyright-wrapper">
    <div class="container footer-content-copyright text-center my-4">
        © 2023, luxurywithluv. Powered by Shopify
    </div>
</section>
<!--FOOTER END-->




<footer id="colophon" class="site-footer">
    <div class="site-info">
        <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'luxury-with-love' ) ); ?>">
            <?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'luxury-with-love' ), 'WordPress' );
				?>
        </a>
        <span class="sep"> | </span>
        <?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'luxury-with-love' ), 'luxury-with-love', '<a href="http://underscores.me/">Ishan</a>' );
				?>
    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->



<!--jQuery CDN-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
    integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Bootstrap Bundle -->
<script src="<?php echo get_template_directory_uri(  ); ?>/assets/js/bootstrap.bundle.min.js"></script>
<!-- Owl Carousel -->
<script src="<?php echo get_template_directory_uri(  ); ?>/assets/owl_carousel/owl.carousel.js"></script>
<!--Own script-->
<script src="<?php echo get_template_directory_uri(  ); ?>/assets/js/script.js"></script>

<?php wp_footer(); ?>
</body>

</html>