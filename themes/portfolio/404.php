<?php 

  get_header(); 
  
  $heading = get_sub_field('heading');
$sub_heading = get_sub_field('sub_heading');
$body_copy = get_sub_field('body_copy');
$link = get_sub_field('link');
$image = get_sub_field('image');
$space_below = get_sub_field('space_below') ? 'space-below' : '' ;
$image_right = get_sub_field('image_right') ? 'image-right' : '';


?>

<main>
<section id="main-content" class="image-and-text padding-tb-large <?= $space_below ?>">
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
        <h1>404</h1>
        <?php if(!empty($sub_heading)): ?>
          <h3 class="sub-heading"><?= $sub_heading ?></h3>
        <?php endif; ?>
          <div><p>This page does not exist.</p></div>
          <a class="btn rounded" href="/">Go Home</a>
      </aside>
  </div>
</section>
</main>

<!-- <a target="_blank" href="https://icons8.com/icon/42769/javascript-logo">JavaScript Logo</a> icon by <a target="_blank" href="https://icons8.com">Icons8</a> -->
<?php get_footer(); ?>

