<?php
/**
 * Footer template
 *
 * @author   <Author>
 * @version  1.0.0
 * @package  <Package>
 */
?>

</main>
<footer class="footer container">
    <div class="footer-main row">
        <div class="col-4">
            <h3 class="block-heading bold">Reach Out</h3>
            <p class="connect-summary">
                Nicholar Clowney aka DaBlueArtists is a creative, music producer, and msucian based out fo Detroit, MI
            </p>

          <div class="footer-block">
                <h4 class="block-heading bold">Email</h4>
            <a href="mailto:hello@dablueartists.com" class="connect-email">hello@dablueartist.com</a>

          </div>
           <div class="footer-block">
                <h4 class="block-heading bold">Social Media </h4>
            <ul class="nav socialLinks">
 <li class="nav-item social-link">
    <a class="link nav-link" href="#"> <?php echo render_svg('facebook');?></a>
  </li>

   <li class="nav-item social-link">
    <a class="link nav-link" href="#"> <?php echo render_svg('instagram');?></a>
  </li>

   <li class="nav-item social-link">
    <a class="link nav-link" href="#"> <?php echo render_svg('soundcloud');?></a>
  </li>

</ul>
           </div>
</div>

        <div class="col-8">
            <div class="content-inner">
                contact form here
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
