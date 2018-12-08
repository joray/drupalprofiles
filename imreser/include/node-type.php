<?php
// Insert default pre-defined node types into the database. For a complete
// list of available node type attributes, refer to the node type API
// documentation at: http://api.drupal.org/api/HEAD/function/hook_node_info.
$types = array(
  array(
    'type' => 'page',
    'name' => st('Basic page'),
    'base' => 'node_content',
    'description' => st("Use <em>basic pages</em> for your static content, such as an 'About us' page."),
    'custom' => 1,
    'modified' => 1,
    'locked' => 0,
  ),
  array(
    'type' => 'article',
    'name' => st('Article'),
    'base' => 'node_content',
    'description' => st('Use <em>articles</em> for time-sensitive content like news, press releases or blog posts.'),
    'custom' => 1,
    'modified' => 1,
    'locked' => 0,
  ),
  array(
    'type' => 'product',
    'name' => st('Product'),
    'base' => 'node_content',
    'description' => st('Use <em>product</em> to post your products, such as clothes and shoes.'),
    'custom' => 1,
    'modified' => 1,
    'locked' => 0,
  ),
  array(
    'type' => 'news',
    'name' => st('News'),
    'base' => 'node_content',
    'description' => st('Use <em>news</em> to publish current affairs news, industry news and company news.'),
    'custom' => 1,
    'modified' => 1,
    'locked' => 0,
  ),
  array(
    'type' => 'case',
    'name' => st('Case'),
    'base' => 'node_content',
    'description' => st('Use <em>case</em> to showcase your success stories and case studies.'),
    'custom' => 1,
    'modified' => 1,
    'locked' => 0,
  ),
  array(
    'type' => 'advertisement',
    'name' => st('advertisement'),
    'base' => 'node_content',
    'description' => st('Use <em>advertisement</em> to display important content of the website, such as the content displayed in the window, the content of the slide show.'),
    'custom' => 1,
    'modified' => 1,
    'locked' => 0,
  ),
);
foreach ($types as $type) {
  $type = node_type_set_defaults($type);
  node_type_save($type);
  node_add_body_field($type);
}

// Insert default pre-defined RDF mapping into the database.
$rdf_mappings = array(
  array(
    'type' => 'node',
    'bundle' => 'page',
    'mapping' => array(
      'rdftype' => array('foaf:Document'),
    ),
  ),
  array(
    'type' => 'node',
    'bundle' => 'article',
    'mapping' => array(
      'field_image_article' => array(
        'predicates' => array('og:image', 'rdfs:seeAlso'),
        'type' => 'rel',
      ),
      'field_tags_article' => array(
        'predicates' => array('dc:subject'),
        'type' => 'rel',
      ),
    ),
  ),
  array(
    'type' => 'node',
    'bundle' => 'product',
    'mapping' => array(
      'field_image_product' => array(
        'predicates' => array('og:image', 'rdfs:seeAlso'),
        'type' => 'rel',
      ),
      'field_tags_product' => array(
        'predicates' => array('dc:subject'),
        'type' => 'rel',
      ),
    ),
  ),
  array(
    'type' => 'node',
    'bundle' => 'news',
    'mapping' => array(
      'field_image_news' => array(
        'predicates' => array('og:image', 'rdfs:seeAlso'),
        'type' => 'rel',
      ),
      'field_tags_news' => array(
        'predicates' => array('dc:subject'),
        'type' => 'rel',
      ),
    ),
  ),
  array(
    'type' => 'node',
    'bundle' => 'case',
    'mapping' => array(
      'field_image_case' => array(
        'predicates' => array('og:image', 'rdfs:seeAlso'),
        'type' => 'rel',
      ),
      'field_tags_case' => array(
        'predicates' => array('dc:subject'),
        'type' => 'rel',
      ),
    ),
  ),
  array(
    'type' => 'node',
    'bundle' => 'advertisement',
    'mapping' => array(
      'field_image_advertisement' => array(
        'predicates' => array('og:image', 'rdfs:seeAlso'),
        'type' => 'rel',
      ),
      'field_tags_advertisement' => array(
        'predicates' => array('dc:subject'),
        'type' => 'rel',
      ),
    ),
  ),
);
foreach ($rdf_mappings as $rdf_mapping) {rdf_mapping_save($rdf_mapping);}
