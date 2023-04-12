<?php 

$classes = $args['classes'];

?>

<a href="<?= the_permalink(); ?>" target="_blank"  class="project-card <?= $classes ?>" title="Go To <?= the_title() ?> Project Page">
  <figure class="project-card-image image-load">
  <?= get_the_post_thumbnail(get_the_ID())?>
  </figure>
  <div class="project-card-header">
  <h3 class="project-card-title h6"><?= get_the_title(get_the_ID()); ?></h3>
  <?php get_template_part("parts/project-types", '', array(
    'post_id' => get_the_ID(),
    'classes' => 'project-card-types'
  )); ?>
  </div>
  <div class="project-card-excerpt"><?= substr(get_the_excerpt(get_the_ID()), 0, 100) . '...'; ?></div>
</a>