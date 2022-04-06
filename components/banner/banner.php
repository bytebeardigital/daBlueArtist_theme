<?php
$banner_bkg = get_field("banner_photo", 'options');
?>

<div class="photo-banner" style="background-position: center center; background-repeat: no-repeat; background-size: cover; background-image: url('<?php echo (empty($banner_bkg)) ? '' : $banner_bkg ;?>')">
</div>