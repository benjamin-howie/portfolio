<?php 

$technologies = get_the_terms($args['post_id'], 'technology');
$classes = $args['classes'];

?>

<ul class="technology-strip <?= $classes ?>">
  <?php foreach($technologies as $technology): 
          $technology_logo = get_field('technology_logo', $technology);    
  ?>
    <li><?= file_get_contents($technology_logo['url']);?></li>
  <?php endforeach; ?>
</ul>