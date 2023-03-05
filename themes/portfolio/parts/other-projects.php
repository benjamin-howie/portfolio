<?php 

$body_copy = get_field('disclaimer', 'option');
$featured_project = get_field('featured_project', 'option');
$projects_args = array(
  'post_type'      => 'project',
  'posts_per_page' => 10,
  'post__not_in' => [get_the_ID()], // As we will be on a Project post, I do not want to include the current project  in the query
);



// If there is no global featured project set, or the global featured project is the same as the current project's ID, then we will use the first Project in the query.
if(empty($featured_project) || $featured_project->ID === get_the_ID()) {
  $all_projects = new WP_Query($projects_args);

if ($all_projects->have_posts()) {
  $featured_project = $all_projects->posts[0];
}

wp_reset_postdata();
}

get_template_part('parts/project-carousel', '', array(
  'heading' => 'Other Projects',
  'body_copy' => $body_copy,
  'link' => '',
  'featured_project' => $featured_project,
  'space_below' => 'space-below'
)); 

?>