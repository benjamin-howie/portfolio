<?php 

$heading = get_sub_field('heading');
$body_copy = get_sub_field('body_copy');
$features = get_sub_field('features');
$space_below = get_sub_field('space_below') ? 'space-below' : '';

?>

<section class="features padding-tb-large colour-shift">
  <div class="features-wrapper default-width animate-into-view">
    <?php if(!empty($heading)): ?>
      <h2 class="features-heading"><?= $heading ?></h2>
    <?php endif; ?>
    <?php if(!empty($body_copy)): ?>
      <div><?= $body_copy ?></div>
    <?php endif; ?>
    <?php if(!empty($features)): ?>
      <ul class="features-list">
      <?php foreach($features as $feature): ?>
        <li>
          <?php if(!empty($feature['image'])): ?>
          <?= file_get_contents($feature['image']['url']);?>
          <?php endif; ?>
          <h3 class="h5"><?= $feature['title']?></h3><div><?= $feature['body_copy']?></div>
        </li>
      <?php endforeach; ?>
      </ul>
    <?php endif; ?>
  </div>
</section>