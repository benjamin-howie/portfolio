<?php get_header(); 

$projects_args = array(
  'post_type'      => 'project',
  'posts_per_page' => 10,
  'post__not_in' => array(get_the_ID())
);
$projects = new WP_Query($projects_args);

$demo_link = get_field('demo_link');
$live_link = get_field('live_link');
$github_link = get_field('github_link');

?>

<main>
  <?php get_template_part("parts/project-hero"); ?>
  <div id="main-content">
    <?php get_template_part("templates/flexible-content"); ?>
    <?php get_template_part("parts/media-grid"); ?>
    <?php get_template_part("parts/connect-banner", '', array(
      'heading' => 'See ' . the_title() . ' in action',
      'primary_link' => $demo_link,
      'secondary_link' => $live_link,
      'github_link' => $github_link
    )); ?>
    <?php get_template_part("parts/other-projects");?>
  </div>
</main>

<!-- <a target="_blank" href="https://icons8.com/icon/42769/javascript-logo">JavaScript Logo</a> icon by <a target="_blank" href="https://icons8.com">Icons8</a> -->
<?php get_footer(); ?>