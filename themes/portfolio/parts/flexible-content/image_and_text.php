<?php

// ACF Fields

$heading = get_sub_field('heading');
$sub_heading = get_sub_field('sub_heading');
$body_copy = get_sub_field('body_copy');
$link = get_sub_field('link');
$image = get_sub_field('image');
$space_below = get_sub_field('space_below') ? 'space-below' : '' ;
$image_right = get_sub_field('image_right') ? 'image-right' : '';
$colour_shift = get_sub_field('colour_shift') ? 'colour-shift' : '';

?>


<section class="image-and-text padding-t-large <?= $space_below ?> <?= $colour_shift ?>">
  <div class="image-and-text-wrapper <?= $image_right ?> default-width animate-into-view">
    <?php 

      if(!empty($image)): 
      $image_id = $image['ID'];
      $image_src = wp_get_attachment_image( $image_id, 'large' );
      
    ?>
      <figure class="image">
        <?= $image_src ?>
      </figure>
    <?php endif; ?>
      <aside class="content">
        <?php if(!empty($heading)): ?>
          <h2><?= $heading ?></h2>
        <?php endif; ?>
        <?php if(!empty($sub_heading)): ?>
          <h3 class="sub-heading"><?= $sub_heading ?></h3>
        <?php endif; ?>
        <?php if(!empty($body_copy)): ?>
          <div><?= $body_copy ?></div>
        <?php endif; ?>

        <?php if(!empty($link)): ?>
          <a class="btn transparent rounded" href="<?= $link['url'] ?>" target="<?= $link['target']?>"><?= $link['title'] ?></a>
        <?php endif; ?>
      </aside>
  </div>
</section>