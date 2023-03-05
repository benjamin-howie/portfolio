<?php 

// TO-DO: Consider using the connect-banner template part

$heading = get_sub_field('heading');
$body_copy = get_sub_field('body_copy');
$colour_shift = get_sub_field('colour_shift') ? 'colour-shift' : '';

// TO-DO: Do not request github links and cv links if they have not been included by the user.

$include_github = get_sub_field('include_github');
$github_link = get_field('github', 'option');
$include_cv = get_sub_field('include_cv');
$cv_link = get_field('my_cv', 'option');
$link = get_sub_field('link');
$secondary_link = get_sub_field('secondary_link');
?>
<section class="connect-banner <?= $colour_shift ?> padding-tb-large">
  <div class="connect-banner-wrapper article-width animate-into-view">
    <?php if(!empty($heading)): ?>
    <h2 class="connect-banner-heading h1"><?= $heading ?></h2>
    <?php endif; ?>
    <?php if(!empty($body_copy)): ?>
    <div class="connect-banner-body-copy"><?= $body_copy ?></div>
    <?php endif; ?>
    <?php if(!empty($link)): ?>
      <a class="btn transparent rounded connect-banner-link" target="<?= $link['target']?>" href="<?= $link['url'] ?>" ><?= $link['title'] ?></a>
    <?php endif; ?>
    <?php if(!empty($include_github) && !empty($github_link)): ?>
      <div class="connect-banner-link">
      <a href="<?= $github_link ?>" title="Go to GitHub page" target="_blank" ><?= file_get_contents(get_template_directory() . '/assets/images/icons/github.svg');?></a>
      </div>
    <?php endif; ?>
    <?php if(!empty($secondary_link)): ?>
      <a class="btn transparent rounded connect-banner-link" target="<?= $secondary_link['target']?>" href="<?= $secondary_link['url'] ?>" ><?= $secondary_link['title'] ?></a>
    <?php endif; ?>
    <?php if($include_cv):  ?>
      <a class="btn transparent rounded connect-banner-link" href="<?= $cv_link['url'] ?>" >See My CV</a>
    <?php endif; ?>
  </div>
</section>