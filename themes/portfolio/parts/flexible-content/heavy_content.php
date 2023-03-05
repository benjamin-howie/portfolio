<?php 

$content = get_sub_field('content');
$space_below = get_sub_field('space_below') ? 'space-below' : '';

?>

<section class="heavy-content <?= $space_below ?>">
  <div class="heavy-content-wrapper article-width animate-into-view">
    <?= $content ?>
  </div>
</section>