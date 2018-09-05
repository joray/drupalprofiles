<?php
// Create terms for the glossary,Used for various node types.
$terms = array();
$vocabulary = taxonomy_vocabulary_machine_name_load('tags_article');
$terms[] = 'Note';
$terms[] = 'Introduction';
foreach ($terms as $name) {
  $term = new stdClass();
  $term->vid = $vocabulary->vid;
  $term->name = $name;
  taxonomy_term_save($term);
}
$terms = array();
$vocabulary = taxonomy_vocabulary_machine_name_load('tags_product');
$terms[] = 'Coat';
$terms[] = 'Pants';
$terms[] = 'Trousers';
foreach ($terms as $name) {
  $term = new stdClass();
  $term->vid = $vocabulary->vid;
  $term->name = $name;
  taxonomy_term_save($term);
}
$terms = array();
$vocabulary = taxonomy_vocabulary_machine_name_load('tags_news');
$terms[] = 'Company news';
$terms[] = 'Industry information';
foreach ($terms as $name) {
  $term = new stdClass();
  $term->vid = $vocabulary->vid;
  $term->name = $name;
  taxonomy_term_save($term);
}
$terms = array();
$vocabulary = taxonomy_vocabulary_machine_name_load('tags_case');
$terms[] = 'Classic Case';
$terms[] = 'Famous Customer';
foreach ($terms as $name) {
  $term = new stdClass();
  $term->vid = $vocabulary->vid;
  $term->name = $name;
  taxonomy_term_save($term);
}
$terms = array();
$vocabulary = taxonomy_vocabulary_machine_name_load('tags_exhibition');
$terms[] = 'Home';
$terms[] = 'Contact';
$terms[] = 'News';
$terms[] = 'Case';
foreach ($terms as $name) {
  $term = new stdClass();
  $term->vid = $vocabulary->vid;
  $term->name = $name;
  taxonomy_term_save($term);
}
