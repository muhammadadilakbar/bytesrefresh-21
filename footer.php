</div><!-- #primary -->
<?php
    get_sidebar();
?>

<footer id="site-footer">
    <nav class="footer-navigation">
        <a href="/">Home</a> | 
        <a href="/about/">About</a> | 
        <a href="/contact/">Contact</a> | 
        <a href="/privacy-policy/">Privacy Policy</a>
    </nav>
    <div class="socials">
        <a href="https://facebook.com/bytesrefresh" target="_blank">
            <img width="130px" height="130px" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/f_logo_RGB_Blue_58.png" />
        </a>
        <a href="https://twitter.com/bytesrefresh" target="_blank">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/twitter_social_icons_circle_blue.svg" />
        </a>
        <a href="https://www.youtube.com/channel/UCH3ws4y5ofgvDnMd5tt2VdA" target="_blank">
            <img width="64px" height="64px" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/youtube_social_squircle_red.png" />
        </a>
    </div>
    <div class="copyright-section">Copyright © 2022 bytesrefresh.com All rights reserved</div>
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>