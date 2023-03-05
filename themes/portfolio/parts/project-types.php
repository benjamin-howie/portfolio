<?php 
$project_types = get_the_terms($args['post_id'], 'project_type');
$classes = $args['classes'];
?>

<ul class="project-types <?= $classes ?>">
  <?php foreach($project_types as $project_type): ?>
    <li class="badge-heading text-grey"><span><?= $project_type->name ?></span></li>
  <?php endforeach; ?>
</ul>
