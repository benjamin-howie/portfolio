<?php 

$desktop_images = get_field('desktop_images');
$mobile_images = get_field('mobile_images');
$videos = get_field('videos');

?>

<section class="single-project-hero">
  <div class="default-width single-project-hero-wrapper">
    <div class="single-project-hero-content fade-in-on-load">
      <?php get_template_part("parts/project-types", '', array(
        'post_id' => get_the_ID(),
        'classes' => 'single-project-hero-types'
      )); ?>
      <h1><?= the_title(); ?></h1>
      <?php get_template_part("parts/technology-strip", '', array(
      'post_id' => get_the_ID(),
      'classes' => 'single-project-hero-technologies'
      )); ?>
      <div><?= the_excerpt(); ?></div>
      <a href="#main-content" title="Find out more" class="find-out-more"><?= file_get_contents(get_template_directory() . '/assets/images/icons/right-arrow.svg'); ?>
    </a>
    </div>
  </div>
  <div class="single-project-hero-bg-video">
    <?php if(!empty($videos)): ?>
    <video muted autoplay loop src="<?= $videos[0]['video']['url']?>"></video>
    <?php else: ?>
    <?= wp_get_attachment_image( get_post_thumbnail_id(), 'full' ); ?>
    <?php endif; ?>
  </div>
</section>