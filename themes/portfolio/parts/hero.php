<?php
$pre_heading = $args['pre_heading'];
$main_heading = $args['main_heading'];
$body_copy = $args['body_copy'];
$primary_link = $args['primary_link'];
$secondary_link = $args['secondary_link'];

$technologies = get_terms( array(
  'taxonomy' => 'technology',
  'hide_empty' => false,
) );

$space_below = get_field('space_below') ? 'space-below' : '';

$main_heading = asterisks_to_colour($main_heading);

?>
<section class="hero">
  <div class="hero-inner default-width">
    <div class="hero-text fade-in-on-load">
      <?php if(!empty($main_heading)): ?>
      <h2 class="h1"><span class="d-block"><?= $pre_heading ?></span><?= $main_heading ?></h2>
      <?php endif; ?>

      <?php if(!empty($body_copy)): ?>
      <div class="content"><?= $body_copy ?></div>
      <?php endif; ?>
      <?php if(!empty($primary_link) || !empty($secondary_link)): ?>
        <div class="btn-wrapper">
          <?php if(!empty($primary_link)): ?>
          <a href="<?= $primary_link['url'] ?>" target="<?= $primary_link['target'] ?>" class="btn bordered">
            <span><?= $primary_link['title']?></span>
          </a>
          <?php endif; ?>
          <?php if(!empty($secondary_link)): ?>
            <a href="<?= $secondary_link['url'] ?>" target="<?= $secondary_link['target']; ?>" class="btn">
            <span><?= $secondary_link['title']?></span>
            </a>
          <?php endif ;?>
        </div>
        <?php endif; ?> 
    </div>
    <div class="hero-image p-relative scale-down-on-load">
      <div class="hero-image-wrapper parallax parallax--simple">
      <?php foreach($technologies as $technology): 
        $technology_logo = get_field('technology_logo', $technology);  
        
      ?>
        <div class="circle-with-text animate-scale">        
          <?php if($technology_logo): ?>  
          <?= file_get_contents($technology_logo['url']); ?>
          <?php endif; ?>
          <span><?= $technology->name ?></span>
        </div>
      <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>