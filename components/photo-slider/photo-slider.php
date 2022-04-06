<?php
$slogan = get_field('gallery_slogan', 'options');
$gallery = get_field('gallery_images', 'options');

?>

<div class="photoSlider my-5 relative vw-100">


<div class="row photoSlider--inner g-0">
    <div class="photoSlider--overlay p-0 m-0 w-100"></div>
    <?php foreach ($gallery as $image):?>
 

         <div class="col-3 p-0 m-0">
           <div style="height: 100%; width: 100%; background-size: cover; background-position: center center; background-image: url('<?php echo $image['url'];?>')" class="image-box">
           </div>
</div>
      <?php endforeach; ?>
</div>
    <h3 class="text-center block-heading sliderHeading"><?php echo (!empty($slogan)) ? $slogan : ''?></h3>

</div>