
<div id="footer-holder">
    <div id="footer">
        <div id="quick_links">
            <h1 class="white">Quick Links</h1>
            <div id="quick_links_left">
                <?php
                    wp_nav_menu( array(
                        'menu' => 'Quick Links Left',
                        'container_class' => 'footer_menu',
                        'menu_class'      => '',
                    ) );
                ?>
            </div>
            <div id="quick_links_right">
                <?php
                    wp_nav_menu( array(
                        'menu' => 'Quick Links Right',
                        'container_class' => 'footer_menu',
                        'menu_class'      => '',
                    ) );
                ?>
            </div>
            <div style="clear:both"></div>
        </div>
        <div id="support_us">

            <div id="support_us_links">
                <h1 class="white">Support Us</h1>
                <a href="<?php print bloginfo('template_url')?>/docs/NSSO_giftaid_Declaration.pdf" target="_blank">&pound; Donate to NSSO</a><br />
                <br />
                <a href="#">Become a Patron</a><br />
            </div>

            <div id="connect_menu">
                <h1 class="white">Connect with NSSO</h1>
                <a href="http://www.flickr.com/people/55421020@N03/" target="_blank"><img src="<?php bloginfo('template_url')?>/images/flickr_icon_large.jpg" alt="Flickr" /></a>
                <a href="#"><img src="<?php bloginfo('template_url')?>/images/facebook_icon_large.jpg" alt="Facebook" /></a>
                <a href="http://twitter.com/NSSOrchestra" target="_blank"><img src="<?php bloginfo('template_url')?>/images/twitter_icon_large.jpg" alt="Twitter" /></a>
                <a href="http://www.youtube.com/user/NSSOrchestra" target="_blank"><img src="<?php bloginfo('template_url')?>/images/youtube_icon_large.jpg" alt="YouTube" /></a>
            </div>

            <div id="support_us_address">
                <h2>The National Schools Symphony Orchestra</h2>
                Butleigh House<br/>
                Chindit Avenue<br/>
                Street<br/>
                Somerset<br/>
                BA16 0RQ<br/>
                Tel: 07807 093149<br />
                Email: <a href="rebeccawoodward@nsso.org">rebeccawoodward@nsso.org</a>
            </div>
        </div>
        <div style="clear:both"></div>
    </div>
    <div id="footer-bottom"></div>
</div>

<div id="footer-info">

    <p>&copy; 2010<?php if( date('Y') > '2010' ) echo ' - '.date('Y');?> The National Schools Symphony Orchestra | <a href="<?php print bloginfo('url')?>/contact-us/">Contact Us</a> | <a href="<?php print bloginfo('url')?>/disclaimer/">Dislaimer</a> | <a href="<?php print bloginfo('url')?>/terms-and-conditions/">Terms and Conditions</a></p>
    <p>The National Schools Symphony Orchestra is a registered charity no 1234567. Company registered in England no 1234567.</p>
    <p>Website by <a href="http://www.pkht.co.uk" target="PKHT">PKHT</a> | Powered by <a href="http://wordpress.org" target="Wordpress">Wordpress</a>

</div>


</div> <!-- End of main -->

<?php wp_footer(); ?>

</body>

</html>