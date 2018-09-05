<?php
// Create a default vocabulary named "Tags", enabled for the 'article' content type.
$description = st('Use tags to group content on similar topics into categories.');
$vocabulary =  array(
 (object) array(
  'name' => st('article'),
  'description' => $description,
  'machine_name' => 'tags_article',
),
 (object) array(
  'name' => st('product'),
  'description' => $description,
  'machine_name' => 'tags_product',
),
 (object) array(
  'name' => st('news'),
  'description' => $description,
  'machine_name' => 'tags_news',
),
 (object) array(
  'name' => st('case'),
  'description' => $description,
  'machine_name' => 'tags_case',
),
 (object) array(
  'name' => st('exhibition'),
  'description' => $description,
  'machine_name' => 'tags_exhibition',
),
);
//$vocabulary = (object) $vocabulary;
foreach ($vocabulary as $vocabulary) {taxonomy_vocabulary_save($vocabulary);}
