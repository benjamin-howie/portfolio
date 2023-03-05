<?php 

  get_header(); 
  

?>

<main id="main-content">
  <div class="default-width">
  <h1 class="mt-2"><?= the_title(); ?></h1>
  </div>
<?php get_template_part("templates/flexible-content"); ?>
</main>

<!-- <a target="_blank" href="https://icons8.com/icon/42769/javascript-logo">JavaScript Logo</a> icon by <a target="_blank" href="https://icons8.com">Icons8</a> -->
<?php get_footer(); ?>

