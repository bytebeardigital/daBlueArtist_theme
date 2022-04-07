<?php
/**
 * Footer template
 *
 * @author   <Author>
 * @version  1.0.0
 * @package  <Package>
 */

$blurb = get_field('contact_blurb', 'options');
$email = get_field('contact_email', 'options');
$social_links = get_field('social_media_links', 'options');
$contact_form = get_field('contact_form_shortcut', 'options');
?>

</main>
<footer class="footer container">
    <div class="footer-main row">
        <div class="col-lg-4 col-12">
            <h3 class="block-heading bold">Reach Out</h3>
            <p class="connect-summary">
            <?php echo (empty($blurb)) ? '' : $blurb ;?>
            </p>

          <div class="footer-block">
                <h4 class="block-heading bold">Email</h4>
                <?php echo (!empty($email)) ? '<a href="mailto:'. $email .'" class="connect-email">'. $email .'</a>' : $email ;?>
            

          </div>
           <div class="footer-block">
                <h4 class="block-heading bold">Social Media </h4>
            <ul class="nav socialLinks">
                <?php foreach ($social_links as $social_link):?>
                    <li class="nav-item social-link">
    <a class="link nav-link" href=" <?php echo (empty($social_link['link']['url'])) ? '' : $social_link['link']['url'] ;?>"> <?php echo render_svg($social_link['link']['title']);?></a>
  </li>
                    <?php endforeach; ?>


 

</ul>
           </div>
</div>

        <div class="col-lg-8 col-12 contact-form">
            <div class="content-inner">
            <?php echo (empty($contact_form)) ? '' : $contact_form ;?>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
