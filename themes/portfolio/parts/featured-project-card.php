<?php 

$featured_project = $args['featured_project'];
$classes = $args['classes'];

?>

<div class="featured-project-card <?= $classes ?>">
  <a href="<?= get_the_permalink($featured_project->ID); ?>">
  <figure class="featured-project-card-image">
  <?= get_the_post_thumbnail($featured_project->ID)?>
  </figure>
  </a>
  <div class="featured-project-card-header">
  <?php get_template_part("parts/project-types", '', array(
    'post_id' => $featured_project->ID,
    'classes' => 'featured-project-card-types'
  )); ?>
  <h3 class="featured-project-card-title h4"><?= get_the_title($featured_project->ID); ?></h3>
  <?php get_template_part("parts/technology-strip", '', array(
    'post_id' => $featured_project->ID,
    'classes' => 'featured-project-card-technologies'
  )); ?>
  </div>
  <div class="featured-project-card-excerpt"><?= get_the_excerpt($featured_project->ID); ?></div>
  <a class="featured-project-card-link" href="<?= get_the_permalink($featured_project->ID); ?>">Go To <?= get_the_title($featured_project->ID) ?> Project</a>
</div>