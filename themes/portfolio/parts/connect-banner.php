<?php 
$demo_link = get_field('demo_link');
$live_link = get_field('live_link');
$github_link = get_field('github_link');

?>
<?php if(!empty($demo_link) || !empty($live_link) || !empty($github_link)): ?>
<section class="connect-banner colour-shift padding-tb-large">
  <div class="connect-banner-wrapper article-width animate-into-view">
    <h2 class="connect-banner-heading">See <?= the_title(); ?> in action</h2>
    <?php if(has_term('Commercial Project', 'project_type')): ?>
    <p class="connect-banner-body-copy"><em>I no longer work for the company where this site was built. Screenshots and screen recordings were taken at the time of me working on them.The live site may include additions / alterations that I cannot take credit for.</em></p>
    <?php endif; ?>
    <?php if(!empty($demo_link)): ?>
      <a class="btn transparent rounded connect-banner-link demo-link" target="_blank" href="<?= $demo_link['url'] ?>">Go To Demo</a>
    <?php endif; ?>
    <?php if(!empty($live_link)): ?>
      <a class="btn transparent rounded connect-banner-link live-link" target="_blank" href="<?= $live_link['url'] ?>" >Go to Live Site</a>
    <?php endif; ?>
    <?php if(!empty($github_link)): ?>
      <div class="connect-banner-link">
      <a href="<?= $github_link['url']?>" title="Go to GitHub page" target="_blank" ><?= file_get_contents(get_template_directory() . '/assets/images/icons/github.svg');?></a>
      </div>
    <?php endif; ?>
  </div>
</section>
<?php endif; ?>