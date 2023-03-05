<?php 

  $main_heading = get_field('main_heading');
  $body_copy = get_field('body_copy');
  $primary_link = get_field('primary_link');
  $secondary_link = get_field('secondary_link');


  get_header(); 
  

?>

<main>

<?php get_template_part("parts/hero", '', array(
  'pre_heading' => "Hi! I'm Ben.",
  'main_heading' => $main_heading,
  'body_copy' => $body_copy,
  'primary_link' => $primary_link,
  'secondary_link' => $secondary_link
)); ?>
<div id="main-content">
<?php get_template_part("templates/flexible-content"); ?>
</div>
</main>

<!-- <a target="_blank" href="https://icons8.com/icon/42769/javascript-logo">JavaScript Logo</a> icon by <a target="_blank" href="https://icons8.com">Icons8</a> -->
<?php get_footer(); ?>

