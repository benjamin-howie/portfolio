<?php
  
  $heading = $args['heading'];
  $body_copy = $args['body_copy'];
  $link = $args['link'];
  $featured_project = $args['featured_project'];
  $space_below = $args['space_below'];
  $anchor_id = $args['anchor_id'];

  $projects_args = array(
    'post_type'      => 'project',
    'posts_per_page' => 10,
    'post__not_in' => [$featured_project->ID]
  );
  if(get_post_type() === 'project') {
    array_push($projects_args['post__not_in'], get_the_ID());
  }

  $projects = new WP_Query($projects_args);
?>

<section <?= $anchor_id ? "id='" . $anchor_id . "'" : '' ?> class="project-carousel padding-t-large <?= $space_below ?>">
  <div class="project-carousel-wrapper default-width animate-into-view">
    <?php if(!empty($heading)): ?>
    <h2 class="heading"><?= $heading ?></h2>
    <?php endif; ?>

    <?php if(!empty($body_copy)): ?>
      <div class="body-copy"><?= $body_copy ?></div>
    <?php endif; ?>

    <?php if(!empty($link)): ?>
    <a class="project-link btn rounded" href="<?= $link['url'] ?>" target="<?= $link['target'] ?>"><?= $link['title'] ?></a>
    <?php endif; ?>

    <?php get_template_part("parts/featured-project-card", '', array(
        'featured_project' => $featured_project,
        'classes' => 'featured-project'
    )); ?>

    <?php if($projects->have_posts()): ?>
    <div class="project-carousel-slider">
    <?php while($projects->have_posts()): $projects->the_post(); ?>
      <?php get_template_part("parts/project-card", '', array(
      'classes' => 'project-card-types'
      )); ?>
    <?php endwhile; ?>
    </div>
    <?php endif; wp_reset_postdata(); ?>
  </div>
</section>