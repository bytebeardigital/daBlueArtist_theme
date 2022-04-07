<?php
$summary = get_field('about_summary', 'options');
$toolkit = get_field('toolkit', 'options');
$about_image = get_field('about_image', 'options');

?>

<div class="split-section" id="about">
    <div class="row">
        <div class="col-lg-7 about--content">
            <div class="about--content--heading">
                <h3 class="block-heading">About Me</h3>
           <div class="bio">
           <?php echo (empty($summary)) ? '' : $summary ;?>
           </div>
            </div>
            <div class="about--toolkit">
                <h3 class="block-heading">
                    TOOLKIT
                </h3>
                <div class="row about--toolkit-sources">
                    <?php if(!empty($toolkit)):?>
                        <?php foreach ($toolkit as $toolkit):?>
                           
                            <div class="col-6 tool">
                            <?php echo (!$toolkit['link']) ? '
                                <p class="toolkit-source">' . $toolkit['tool'].'</p>' : '<a href="'. $toolkit['link'] .'" class="toolkit-source">' . $toolkit['tool'].'</a>';?>
                         </div>
                           

                            <?php endforeach;?>
                    <?php endif;?>
                   
                </div>
            </div>
        </div>
        <div class="col-lg-5 about-image">
        <img class="img-fluid" src="<?php echo (empty($about_image)) ? 'nope' : $about_image ;?>" alt="">
        </div>
    </div>
</div>