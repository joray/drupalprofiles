<?php
// Many of the following values will be defaulted, they're included here as an illustrative examples.
// See http://api.drupal.org/api/function/field_create_instance/7
// bundle tag file-images file-pdf file-video

// tag
$help = st('Enter a comma-separated list of words to describe your content.');
$instance = array(
  array(
    'field_name' => 'field_tags_article',
    'entity_type' => 'node',
    'label' => 'Tags',
    'bundle' => 'article',
    'description' => $help,
    'widget' => array(
      'type' => 'taxonomy_autocomplete',
      'weight' => -4,
    ),
    'display' => array(
      'default' => array(
        'label' => 'inline',
        'type' => 'taxonomy_term_reference_link',
        'weight' => -10,
      ),
      'teaser' => array(
        'label' => 'hidden',
        'type' => 'taxonomy_term_reference_link',
        'weight' => -10,
      ),
    ),
  ),
  array(
    'field_name' => 'field_tags_product',
    'entity_type' => 'node',
    'label' => 'Tags',
    'bundle' => 'product',
    'description' => $help,
    'widget' => array(
      'type' => 'taxonomy_autocomplete',
      'weight' => -4,
    ),
    'display' => array(
      'default' => array(
        'label' => 'inline',
        'type' => 'taxonomy_term_reference_link',
        'weight' => -10,
      ),
      'teaser' => array(
        'label' => 'hidden',
        'type' => 'taxonomy_term_reference_link',
        'weight' => -10,
      ),
    ),
  ),
  array(
    'field_name' => 'field_tags_news',
    'entity_type' => 'node',
    'label' => 'Tags',
    'bundle' => 'news',
    'description' => $help,
    'widget' => array(
      'type' => 'taxonomy_autocomplete',
      'weight' => -4,
    ),
    'display' => array(
      'default' => array(
        'label' => 'inline',
        'type' => 'taxonomy_term_reference_link',
        'weight' => -10,
      ),
      'teaser' => array(
        'label' => 'hidden',
        'type' => 'taxonomy_term_reference_link',
        'weight' => -10,
      ),
    ),
  ),
  array(
    'field_name' => 'field_tags_case',
    'entity_type' => 'node',
    'label' => 'Tags',
    'bundle' => 'case',
    'description' => $help,
    'widget' => array(
      'type' => 'taxonomy_autocomplete',
      'weight' => -4,
    ),
    'display' => array(
      'default' => array(
        'label' => 'inline',
        'type' => 'taxonomy_term_reference_link',
        'weight' => -10,
      ),
      'teaser' => array(
        'label' => 'hidden',
        'type' => 'taxonomy_term_reference_link',
        'weight' => -10,
      ),
    ),
  ),
  array(
    'field_name' => 'field_tags_exhibition',
    'entity_type' => 'node',
    'label' => 'Tags',
    'bundle' => 'exhibition',
    'description' => $help,
    'widget' => array(
      'type' => 'taxonomy_autocomplete',
      'weight' => -4,
    ),
    'display' => array(
      'default' => array(
        'label' => 'inline',
        'type' => 'taxonomy_term_reference_link',
        'weight' => -10,
      ),
      'teaser' => array(
        'label' => 'hidden',
        'type' => 'taxonomy_term_reference_link',
        'weight' => -10,
      ),
    ),
  ),
);
foreach ($instance as $instance) {field_create_instance($instance);}

// images
$instance = array(
  array(
    'field_name' => 'field_image_article',
    'entity_type' => 'node',
    'label' => 'Image',
    'bundle' => 'article',
    'description' => st('Upload an image to go with this article.'),
    'required' => FALSE,

    'settings' => array(
      'file_directory' => 'field/images/article',
      'file_extensions' => 'png gif jpg jpeg',
      'max_filesize' => '',
      'max_resolution' => '',
      'min_resolution' => '',
      'alt_field' => TRUE,
      'title_field' => '',
    ),

    'widget' => array(
      'type' => 'image_image',
      'settings' => array(
        'progress_indicator' => 'throbber',
        'preview_image_style' => 'thumbnail',
      ),
      'weight' => -1,
    ),

    'display' => array(
      'default' => array(
        'label' => 'inline',
        'type' => 'image',
        'settings' => array('image_style' => 'large', 'image_link' => ''),
        'weight' => -1,
      ),
      'teaser' => array(
        'label' => 'hidden',
        'type' => 'image',
        'settings' => array('image_style' => 'medium', 'image_link' => 'content'),
        'weight' => -1,
      ),
    ),
  ),
  array(
    'field_name' => 'field_image_product',
    'entity_type' => 'node',
    'label' => 'Image',
    'bundle' => 'product',
    'description' => st('Upload an image to go with this product.'),
    'required' => FALSE,

    'settings' => array(
      'file_directory' => 'field/images/product',
      'file_extensions' => 'png gif jpg jpeg',
      'max_filesize' => '',
      'max_resolution' => '',
      'min_resolution' => '',
      'alt_field' => TRUE,
      'title_field' => '',
    ),

    'widget' => array(
      'type' => 'image_image',
      'settings' => array(
        'progress_indicator' => 'throbber',
        'preview_image_style' => 'thumbnail',
      ),
      'weight' => -1,
    ),

    'display' => array(
      'default' => array(
        'label' => 'inline',
        'type' => 'image',
        'settings' => array('image_style' => 'large', 'image_link' => ''),
        'weight' => -1,
      ),
      'teaser' => array(
        'label' => 'hidden',
        'type' => 'image',
        'settings' => array('image_style' => 'medium', 'image_link' => 'content'),
        'weight' => -1,
      ),
    ),
  ),
  array(
    'field_name' => 'field_image_news',
    'entity_type' => 'node',
    'label' => 'Image',
    'bundle' => 'news',
    'description' => st('Upload an image to go with this news.'),
    'required' => FALSE,

    'settings' => array(
      'file_directory' => 'field/images/news',
      'file_extensions' => 'png gif jpg jpeg',
      'max_filesize' => '',
      'max_resolution' => '',
      'min_resolution' => '',
      'alt_field' => TRUE,
      'title_field' => '',
    ),

    'widget' => array(
      'type' => 'image_image',
      'settings' => array(
        'progress_indicator' => 'throbber',
        'preview_image_style' => 'thumbnail',
      ),
      'weight' => -1,
    ),

    'display' => array(
      'default' => array(
        'label' => 'inline',
        'type' => 'image',
        'settings' => array('image_style' => 'large', 'image_link' => ''),
        'weight' => -1,
      ),
      'teaser' => array(
        'label' => 'hidden',
        'type' => 'image',
        'settings' => array('image_style' => 'medium', 'image_link' => 'content'),
        'weight' => -1,
      ),
    ),
  ),
  array(
    'field_name' => 'field_image_case',
    'entity_type' => 'node',
    'label' => 'Image',
    'bundle' => 'case',
    'description' => st('Upload an image to go with this case.'),
    'required' => FALSE,

    'settings' => array(
      'file_directory' => 'field/images/case',
      'file_extensions' => 'png gif jpg jpeg',
      'max_filesize' => '',
      'max_resolution' => '',
      'min_resolution' => '',
      'alt_field' => TRUE,
      'title_field' => '',
    ),

    'widget' => array(
      'type' => 'image_image',
      'settings' => array(
        'progress_indicator' => 'throbber',
        'preview_image_style' => 'thumbnail',
      ),
      'weight' => -1,
    ),

    'display' => array(
      'default' => array(
        'label' => 'inline',
        'type' => 'image',
        'settings' => array('image_style' => 'large', 'image_link' => ''),
        'weight' => -1,
      ),
      'teaser' => array(
        'label' => 'hidden',
        'type' => 'image',
        'settings' => array('image_style' => 'medium', 'image_link' => 'content'),
        'weight' => -1,
      ),
    ),
  ),
  array(
    'field_name' => 'field_image_exhibition',
    'entity_type' => 'node',
    'label' => 'Image',
    'bundle' => 'exhibition',
    'description' => st('Upload an image to go with this exhibition.'),
    'required' => FALSE,

    'settings' => array(
      'file_directory' => 'field/images/exhibition',
      'file_extensions' => 'png gif jpg jpeg',
      'max_filesize' => '',
      'max_resolution' => '',
      'min_resolution' => '',
      'alt_field' => TRUE,
      'title_field' => '',
    ),

    'widget' => array(
      'type' => 'image_image',
      'settings' => array(
        'progress_indicator' => 'throbber',
        'preview_image_style' => 'thumbnail',
      ),
      'weight' => -1,
    ),

    'display' => array(
      'default' => array(
        'label' => 'inline',
        'type' => 'image',
        'settings' => array('image_style' => 'large', 'image_link' => ''),
        'weight' => -1,
      ),
      'teaser' => array(
        'label' => 'hidden',
        'type' => 'image',
        'settings' => array('image_style' => 'medium', 'image_link' => 'content'),
        'weight' => -1,
      ),
    ),
  ),
);
foreach ($instance as $instance) {field_create_instance($instance);}

// file
$instance = array(
  array(
    'field_name' => 'field_file_product',
    'entity_type' => 'node',
    'label' => 'File',
    'bundle' => 'product',
    'description' => st('Upload an file to go with this product.'),
    'required' => FALSE,

    'settings' => array(
      'file_directory' => 'field/file/product',
      'file_extensions' => 'txt rar zip pdf',
      'alt_field' => TRUE,
    ),

    'widget' => array(
      'type' => 'file_generic',
      'settings' => array(
        'progress_indicator' => 'throbber',
      ),
    ),

    'display' => array(
      'default' => array(
        'label' => 'inline',
        'type' => 'file_default',
        'weight' => 99,
      ),
      'teaser' => array(
        'label' => 'hidden',
        'type' => 'file_url_plain',
        'weight' => 99,
      ),
    ),
  ),
);
foreach ($instance as $instance) {field_create_instance($instance);}


// text
$instance = array(
  array(
    'field_name' => 'field_text_product',
    'entity_type' => 'node',
    'label' => 'Text',
    'bundle' => 'product',
    'description' => st('Create parameter description for this product.'),
    'required' => FALSE,

    'settings' => array(),

    'widget' => array(
      'type' => 'text_textfield',
      'settings' => array(
        'size' => '59',
      ),
    ),

    'display' => array(
      'default' => array(
        'label' => 'inline',
        'type' => 'text_default',
        'weight' => 99,
      ),
      'teaser' => array(
        'label' => 'inline',
        'type' => 'text_trimmed',
        'weight' => 99,
      ),
    ),
  ),
);
foreach ($instance as $instance) {field_create_instance($instance);}


// text_long
$instance = array(
  array(
    'field_name' => 'field_text_long_product',
    'entity_type' => 'node',
    'label' => 'Text Long',
    'bundle' => 'product',
    'description' => st('Create description for this product.'),
    'required' => FALSE,

    'settings' => array(),

    'widget' => array(
      'type' => 'text_textarea',
      'settings' => array(
        'rows' => '16',
      ),
    ),

    'display' => array(
      'default' => array(
        'label' => 'inline',
        'type' => 'text_default',
        'weight' => 99,
      ),
      'teaser' => array(
        'label' => 'inline',
        'type' => 'text_trimmed',
        'weight' => 99,
      ),
    ),
  ),
);
foreach ($instance as $instance) {field_create_instance($instance);}
