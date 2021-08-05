<?php
function ig_get_page_ID_by_template_name($template_name)
{
  $args = [
    'post_type' => 'page',
    'fields' => 'ids',
    'nopaging' => true,
    'meta_key' => '_wp_page_template',
    'meta_value' => $template_name . '.php',
  ];
  return get_posts($args);
}