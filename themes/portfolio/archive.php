<?php
get_header();

?>

<main>

<?php get_template_part("parts/hero", '', array(
    'main_heading' => get_the_archive_title(),
    'body_copy' => get_the_archive_description()
)); ?>
<section id="main-content" class="mb-2">
  <div class="default-width">
    <div class="static-grid">
      <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>

        <?php get_template_part("parts/project-card", '', array(
        'classes' => 'project-card-types'
        )); ?>

        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</section>
</main>

<?php get_footer(); ?>
