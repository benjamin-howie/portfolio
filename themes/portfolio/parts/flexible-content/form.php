<?php 

$heading = get_sub_field('heading');
$body_copy = get_sub_field('body_copy');
$form_shortcode = get_sub_field('form_shortcode');
$include_contact_information = get_sub_field('include_contact_information');
$space_below = get_sub_field('space_below') ? 'space-below' : '';

?>

<section class="form mt-2 <?= $space_below ?>">
  <div class="default-width">
  <?php if(!empty($heading)): ?>
    <h2><?= $heading ?></h2>
  <?php endif; ?>
  <?php if(!empty($body_copy)): ?>
    <div class="body-copy"><?= $body_copy ?></div>
  <?php endif; ?>

  <?php if($include_contact_information): 
  $email = get_field('email', 'option');  
  ?>
    <address>
      <?php if(!empty($email)): ?>
      E-mail: <a href="mailto: <?= $email ?>"><?= antispambot($email); ?></a>
      <?php endif; ?>
    </address>
  <?php endif; ?>

  <?php if(!empty($form_shortcode)): ?>
    <?= do_shortcode($form_shortcode); ?>
  <?php endif; ?>
  </div>
</section>