        </div><!-- #content -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <a href="<?=esc_url( home_url( '/' ) ); ?>" title="<?=esc_attr( get_bloginfo( 'name' , 'display' ) ); ?>" rel="home">
                            <?php bloginfo( 'name' ); ?>
                        </a>
                    </div>
                </div>
            </div>
            <div id="footer-copy">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            &copy; 2013 DFieldFL WordPress Theme.
                        </div>
                        <div class="col-sm-6">
                            <div class="pull-right">
                                Powered by: <a href="http://www.GroTechSolutions.com">GroTech Solutions</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
