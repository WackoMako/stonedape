</div>
<footer>
    <div id="footer-bottom" class="clearfix">
      <div class="container">
           <?php wp_nav_menu( array( 
           'Footer Menu' => 'Footer Menu',
           'container'   => false,
           'menu_class'  => 'footer_nav clearfix col-md-9 col-x',
           'depth'       => 2
           ) ); ?>  
          <div class="col-md-3 footer-right">
            <p><label><a href="<?php echo home_url('/index.php/about-us'); ?>">About Us</a></label></p>
            <p><label><a href="<?php echo home_url('/index.php/contact-us'); ?>">Contact Us</a></label></p>
            <p><label>Email</label> <a href="mailto:stonedape@mail.com">stonedape@mail.com</a></p>
            <div id="social" class="clearfix">
              <label class="col-md-12">Stoned Ape Network</label>
              <div class="col-xs-6" id="fb-icon"><a href="https://www.facebook.com/astonedape"><img src="<?php bloginfo('template_directory')?>/images/icons/w-fb.png"></a></div>
              <div class="col-xs-6" id="t-icon"><a href="https://twitter.com/_stonedape"><img src="<?php bloginfo('template_directory')?>/images/icons/w-twitter.png"></a></div>
            </div>
          </div>
      </div> 
    </div>
</footer>
<?php wp_footer();?>
<script data-main="<?php bloginfo('template_url'); ?>/scripts/main" src="<?php bloginfo('template_url'); ?>/scripts/vendor/require.js"></script>
</body>

</html>
