<?php 
  $heading = get_sub_field('heading');
  $body_copy = get_sub_field('body_copy') ? get_sub_field('body_copy') :  get_field('disclaimer', 'options');;
  $link = get_sub_field('link');
  $featured_project = get_sub_field('featured_project') ? get_sub_field('featured_project') : get_field('featured_project', 'options');
  $anchor_id = get_sub_field('anchor_id');
  $space_below = get_sub_field('space_below') ? 'space-below' : '';


get_template_part('parts/project-carousel', '', array(
  'heading' => $heading,
  'body_copy' => $body_copy,
  'link' => $link,
  'featured_project' => $featured_project,
  'space_below' => $space_below,
  'anchor_id' => $anchor_id
)); 