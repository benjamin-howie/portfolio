<?php
get_header();

$terms = get_terms('project_type');

?>

<main>

<?php get_template_part("parts/hero", '', array(
  'main_heading' => get_the_archive_title(),
  'body_copy' => get_the_archive_description()
)); ?>

<?php if(!empty($terms)): ?>
  <?php foreach($terms as $term): 
    $projects_for_term_args = array(
      'post_type'      => 'project',
      'posts_per_page' => 10,
      'tax_query' => array(
        array (
            'taxonomy' => $term->taxonomy,
            'field' => 'slug',
            'terms' => $term->slug,
        )
    ),
    );
    $projects_for_term = new WP_Query($projects_for_term_args);
  
  ?>
    <section id="main-content" class="mb-2">
      <div class="default-width">
        <h2><?= $term->name ?></h2>
        <p class="mb-3"><?= $term->description ?></p>
        <div class="static-grid">
          <?php if($projects_for_term->have_posts()): ?>
            <?php while($projects_for_term->have_posts()): $projects_for_term->the_post(); ?>

            <?php get_template_part("parts/project-card", '', array(
            'classes' => 'project-card-types'
            )); ?>

            <?php endwhile; ?>
          <?php endif; wp_reset_postdata(); ?>
        </div>
      </div>
    </section>
     <?php endforeach; ?>
<?php endif; ?>



</main>
<?php get_footer(); ?>
