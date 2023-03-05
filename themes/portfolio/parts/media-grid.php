<?php 

$images = get_field('desktop_images');
$videos = get_field('videos');

?>
<section class="media-grid">
  <div class="default-width padding-t-large animate-into-view">
  <h2>Screenshots / Recordings</h2>
  <h3 class="h5 fw-normal">All screenshots and recordings were captured when I had been working on the project.</h3>
  <?php if(!empty($images || !empty($videos))): ?>
    <ul class="media-grid-list responsive-grid ls-none">
    <?php if(!empty($images)): ?>
    <?php foreach($images as $image): ?>
      <li>
          <a href="<?= $image['desktop_image']['url'] ?>" target="_blank"><?= wp_get_attachment_image( $image['desktop_image']['ID'], 'large' ); ?></a>
      </li>
    <?php endforeach; ?>
    <?php endif; ?>
    <?php if(!empty($videos)): ?>
    <?php foreach($videos as $video): ?>
      <li>
          <video muted controls src="<?= $video['video']['url']?>"></video>
      </li>
    <?php endforeach; ?>
    <?php endif; ?>
    </ul>
  <?php endif; ?>
  </div>
</section>