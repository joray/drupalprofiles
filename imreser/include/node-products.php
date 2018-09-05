<?php

/*
********Snippet********
$node = (object) NULL; //Create a node object,
$node->uid = 0;
$file = file_copy($file, 'public://field/image/product');

$node->field_image_product['und']['fid']  ='3';
$node->field_image_product['und']['fid']  ='4';

$filepath_first = drupal_realpath('public://field/images/product/a.jpg');
$filepath_second = drupal_realpath('public://field/images/product/b.jpg');

$node->field_image_product['und']= (array)$file;
$node->field_image_product['und'][0][$fid] = $fid_first;
$node->field_image_product['und'][1][$fid] = $fid_second;
product SKU
product code product style product ean product upc
激光测距仪
NAME:
GLM 30 Professional
GLM 100 Professional
GLM 500 Professional
GLM 7000 Professional
GLM 250 VF Professional

产品代码	0 601 072 100
EAN 代码	3165140548007
激光测距仪
博世 GLM 250 VF Professional

********Snippet********
*/

//////////////////////////////////////////////////////////////////////////////////
global $user;
$node = new stdClass();
$node =node_load($nid);
$node->type = 'product';
$node->uid = $user->uid;
$node->title = '博世 GLM 250 VF Professional';
$node->language = 'zh-hans';  //$node->language = 'und'; // Or e.g. 'en' if locale is enabled.
$node->body['und'][0]['value'] = '博世 GLM 250 VF Professional';
$node->body['und'][0]['summary'] = '博世 GLM 250 VF Professional';
$node->body['und'][0]['format'] = 'full_html';

// Term reference (taxonomy) field
$node->field_tags_product['und'][1]['tid'] = '3';//$node->field_tags_product[$node->language][0]['tid'] ='4';
$node->field_tags_product['und'][2]['tid'] = '4';//$node->field_some_text[$node->language][]['value'] = "YOUR TEXT";

$node->path['alias'] = 'boschGLM250VF';
$node->comment = 1;       // Comment is 0, 1, 2; 0 = disabled, 1 = read only, or 2 = read/write.
$node->status = 1;        // 1 means published
$node->promote = 1;
$node->revision = 0;
$node->moderate = 0;
$node->sticky = 0;

$node->changed = $_SERVER['REQUEST_TIME'];
//$node->created = strtotime("now");
$node->created = $_SERVER['REQUEST_TIME'];
//$node->changed = strtotime("now");


//images
//images source
$filepath_first = DRUPAL_ROOT . '/profiles/imreser/images/field/images/product/boschGLM250VFa.jpg';
$filepath_second = DRUPAL_ROOT . '/profiles/imreser/images/field/images/product/boschGLM250VFb.jpg';
//images dst
$filepath_first_dst = 'public://field/images';
$filepath_second_dst = 'public://field/images';

//move file to  public://field/image/ and create  FID
$fid_first = imreser_file_upload($filepath_first,$filepath_first_dst);
$fid_second = imreser_file_upload($filepath_second,$filepath_second_dst);

$file = array(
    '0' => array(
      'fid' => $fid_first,
      'uid' => '1',
      'filename' => 'a.jpg',
      'uri' => 'public://field/images/product/boschGLM250VFa.jpg',
      'filemime' => 'image/jpeg',
      'filesize' => '383393',
      'status' => '1',
      'timestamp' => REQUEST_TIME,
      'rdf_mapping' => '',
      'alt' => '',
      'title' => '',
      'width' => '1920',
      'height' => '1200'
    ),
    '1' => array(
      'fid' => $fid_second,
      'uid' => '2',
      'filename' => 'b.jpg',
      'uri' => 'public://field/images/product/boschGLM250VFb.jpg',
      'filemime' => 'image/jpeg',
      'filesize' => '55699',
      'status' => '1',
      'timestamp' => REQUEST_TIME,
      'rdf_mapping' => '',
      'alt' => '',
      'title' => '',
      'width' => '2560',
      'height' => '1440'
    ),
  );

$node->field_image_product['und'][0]= $file[0];
$node->field_image_product['und'][1]= $file[1];




//File
//File source
$filespath_first = DRUPAL_ROOT . '/profiles/imreser/file/field/file/product/boschGLM250VFa.pdf';
$filespath_second = DRUPAL_ROOT . '/profiles/imreser/file/field/file/product/boschGLM250VFb.pdf';
//File dst
$filespath_first_dst = 'public://field/file';
$filespath_second_dst = 'public://field/file';

//move file to  public://field/file/ and create  FID
$fid_firsts = imreser_file_upload($filespath_first,$filespath_first_dst);
$fid_seconds = imreser_file_upload($filespath_second,$filespath_second_dst);

$files = array(
    '0' => array(
      'fid' => $fid_firsts,
      'uid' => '1',
      'filename' => 'boschGLM250VFa.pdf',
      'uri' => 'public://field/file/product/boschGLM250VFa.pdf',
      'filemime' => 'application/pdf',
      'filesize' => '',
      'status' => '1',
      'timestamp' => REQUEST_TIME,
      'rdf_mapping' => '',
      'alt' => '',
      'title' => '',
      'display' => '1',
    ),
    '1' => array(
      'fid' => $fid_seconds,
      'uid' => '2',
      'filename' => 'boschGLM250VFb.pdf',
      'uri' => 'public://field/file/product/boschGLM250VFb.pdf',
      'filemime' => 'application/pdf',
      'filesize' => '',
      'status' => '1',
      'timestamp' => REQUEST_TIME,
      'rdf_mapping' => '',
      'alt' => '',
      'title' => '',
      'display' => '1',
    ),
  );

$node->field_file_product['und'][0]= $files[0];
$node->field_file_product['und'][1]= $files[1];


node_object_prepare($node); // Sets some defaults. Invokes hook_prepare() and hook_node_prepare().
$node = node_submit($node); // Prepare node for saving
//  node_submit($node);
node_save($node);

//////////////////////////////////////////////////////////////////////////////////
