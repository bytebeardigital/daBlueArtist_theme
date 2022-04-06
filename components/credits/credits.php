<?php
$credits = get_field('artists_credit', 'options');

?>
<div class="credits container">
   <h2 class="block-heading">Credits</h2>
   <div class="credits-slider-here">
        <div class="credits-slider--inner row">
            <?php if($credits):?>
                <?php foreach($credits as $credit):?>
                    <div class="credit col-lg-3 col-6">
                <div class="credit-inner">
                                    <a href="#" class="credit-link"><?php echo $credit['artists_name'];?></a>
                <img src="<?php echo $credit['artists_image']; ?>" alt="" class="credit-img">

                </div>
            </div>

                    <?php endforeach;?>
                <?php endif;?>
        </div>
    </div>
</div>