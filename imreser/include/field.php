<?php

// field 1tag 2file-images 3file-pdf 4file-video
// field 1tag

// Create an tags field named "tags", enabled for the 'article' content type.
// Many of the following values will be defaulted, they're included here as an illustrative examples.
// See http://api.drupal.org/api/function/field_create_field/7

$field = array(
  array(
    'field_name' => 'field_tags_article',
    'type' => 'taxonomy_term_reference',
    'cardinality' => FIELD_CARDINALITY_UNLIMITED,  // Set cardinality to unlimited for tagging.
    'settings' => array(
      'allowed_values' => array(
        array(
          'vocabulary' => 'tags_article',
          'parent' => 0,
        ),
      ),
    ),
  ),
  array(
    'field_name' => 'field_tags_product',
    'type' => 'taxonomy_term_reference',
    'cardinality' => FIELD_CARDINALITY_UNLIMITED,  // Set cardinality to unlimited for tagging.
    'settings' => array(
      'allowed_values' => array(
        array(
          'vocabulary' => 'tags_product',
          'parent' => 0,
        ),
      ),
    ),
  ),
  array(
    'field_name' => 'field_tags_news',
    'type' => 'taxonomy_term_reference',
    'cardinality' => FIELD_CARDINALITY_UNLIMITED,  // Set cardinality to unlimited for tagging.
    'settings' => array(
      'allowed_values' => array(
        array(
          'vocabulary' => 'tags_news',
          'parent' => 0,
        ),
      ),
    ),
  ),
  array(
    'field_name' => 'field_tags_case',
    'type' => 'taxonomy_term_reference',
    'cardinality' => FIELD_CARDINALITY_UNLIMITED,  // Set cardinality to unlimited for tagging.
    'settings' => array(
      'allowed_values' => array(
        array(
          'vocabulary' => 'tags_case',
          'parent' => 0,
        ),
      ),
    ),
  ),
  array(
    'field_name' => 'field_tags_exhibition',
    'type' => 'taxonomy_term_reference',
    'cardinality' => FIELD_CARDINALITY_UNLIMITED,  // Set cardinality to unlimited for tagging.
    'settings' => array(
      'allowed_values' => array(
        array(
          'vocabulary' => 'tags_exhibition',
          'parent' => 0,
        ),
      ),
    ),
  ),
);
foreach ($field as $field) {field_create_field($field);}

// field 1tag 2file-images 3file-pdf 4file-video
// field 1tag 2file-images

// Create an image field named "Image", enabled for the 'article' content type.
// Many of the following values will be defaulted, they're included here as an illustrative examples.
// See http://api.drupal.org/api/function/field_create_field/7

$field = array(
  array(
    'field_name' => 'field_image_article',
    'type' => 'image',
    'cardinality' => 3,
    'locked' => FALSE,
    'indexes' => array('fid' => array('fid')),
    'settings' => array(
      'uri_scheme' => 'public',
      'default_image' => FALSE,
    ),
    'storage' => array(
      'type' => 'field_sql_storage',
      'settings' => array(),
    ),
  ),
  array(
    'field_name' => 'field_image_product',
    'type' => 'image',
    'cardinality' => 3,
    'locked' => FALSE,
    'indexes' => array('fid' => array('fid')),
    'settings' => array(
      'uri_scheme' => 'public',
      'default_image' => FALSE,
    ),
    'storage' => array(
      'type' => 'field_sql_storage',
      'settings' => array(),
    ),
  ),
  array(
    'field_name' => 'field_image_news',
    'type' => 'image',
    'cardinality' => 3,
    'locked' => FALSE,
    'indexes' => array('fid' => array('fid')),
    'settings' => array(
      'uri_scheme' => 'public',
      'default_image' => FALSE,
    ),
    'storage' => array(
      'type' => 'field_sql_storage',
      'settings' => array(),
    ),
  ),
  array(
    'field_name' => 'field_image_case',
    'type' => 'image',
    'cardinality' => 3,
    'locked' => FALSE,
    'indexes' => array('fid' => array('fid')),
    'settings' => array(
      'uri_scheme' => 'public',
      'default_image' => FALSE,
    ),
    'storage' => array(
      'type' => 'field_sql_storage',
      'settings' => array(),
    ),
  ),
  array(
    'field_name' => 'field_image_exhibition',
    'type' => 'image',
    'cardinality' => 3,
    'locked' => FALSE,
    'indexes' => array('fid' => array('fid')),
    'settings' => array(
      'uri_scheme' => 'public',
      'default_image' => FALSE,
    ),
    'storage' => array(
      'type' => 'field_sql_storage',
      'settings' => array(),
    ),
  ),
  array(
    'field_name' => 'field_file_product',
    'type' => 'file',
    'cardinality' => 6,
  ),
    array(
    'field_name' => 'field_text_long_product',
    'type' => 'text_long',
    'cardinality' => 1,
  ),
    array(
    'field_name' => 'field_text_product',
    'type' => 'text',
    'cardinality' => 1,
  ),
    array(
    'field_name' => 'field_file1_product',
    'type' => 'file',
    'cardinality' => 1,
  ),
    array(
    'field_name' => 'field_file2_product',
    'type' => 'file',
    'cardinality' => 1,
  ),
);
foreach ($field as $field) {field_create_field($field);}
