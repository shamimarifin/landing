
    <!-- ***** Footer Start ***** -->
    <footer id="contact-us">
        <div class="container">
            <div class="footer-content">
                <div class="row">
                    <!-- ***** Contact Form Start ***** -->
                    <div class="col-lg-6 col-md-12 col-sm-12">
                    <?php dynamic_sidebar('footer-first');?>
                    </div>
                    <!-- ***** Contact Form End ***** -->
                    <div class="right-content col-lg-6 col-md-12 col-sm-12">
                        <?php dynamic_sidebar('footer-second');?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="sub-footer">
                        <?php dynamic_sidebar('footer-last');?>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer();?>
</body>
</html>