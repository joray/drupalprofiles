<?php

//////////////////////////////////////////////////////////////////////////////////
global $user;
$node = new stdClass();
$node =node_load($nid);
$node->type = 'product';
$node->uid = $user->uid;
$node->title = '产品A1';
$node->language = 'zh-hans';  //$node->language = 'und'; // Or e.g. 'en' if locale is enabled.
$node->body['und'][0]['value'] = '产品A1产品A1产品A1产品A1产品A1产品A1';
$node->body['und'][0]['summary'] = '产品A1产品A1产品A1产品A1产品A1产品A1';
$node->body['und'][0]['format'] = 'full_html';

// Term reference (taxonomy) field
$node->field_tags_product['und'][1]['tid'] = '3';//$node->field_tags_product[$node->language][0]['tid'] ='4';
$node->field_tags_product['und'][2]['tid'] = '4';//$node->field_some_text[$node->language][]['value'] = "YOUR TEXT";

$node->path['alias'] = 'ProductA1';
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
$filepath_first = DRUPAL_ROOT . '/profiles/imreser/images/field/images/product/a.jpg';
$filepath_second = DRUPAL_ROOT . '/profiles/imreser/images/field/images/product/b.jpg';
//images dst
$filepath_first_dst = 'public://field/images/';
$filepath_second_dst = 'public://field/images/';

//move file to  public://field/image/ and create  FID
$fid_first = imreser_file_upload($filepath_first,$filepath_first_dst);
$fid_second = imreser_file_upload($filepath_second,$filepath_second_dst);

$file = array(
    '0' => array(
      'fid' => $fid_first,
      'uid' => '1',
      'filename' => 'a.jpg',
      'uri' => 'public://field/images/product/a.jpg',
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
      'uri' => 'public://field/images/product/b.jpg',
      'filemime' => 'image/jpeg',
      'filesize' => '558 699',
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


node_object_prepare($node); // Sets some defaults. Invokes hook_prepare() and hook_node_prepare().
$node = node_submit($node); // Prepare node for saving
//  node_submit($node);
node_save($node);

//////////////////////////////////////////////////////////////////////////////////











//创建一个内容，带菜单、分类、图片
global $user;
$node = new stdClass();
// $node = (object) NULL; // Create a node object,
$node =node_load($nid); // 创建一个 node object
$node->type = 'product';
$node->uid = $user->uid;  //  $node->uid = 0;
$node->title = 'node-content-v7';
$node->language = 'zh-hans';// Or e.g. 'en' if locale is enabled.
//$node->language = 'und';

$node->body['und'][0]['value'] = '上海嘉乐装饰工程有限公司创立于1995年';
$node->body['und'][0]['summary'] = '上海嘉乐装饰工程有限公司创立于1995年';
$node->body['und'][0]['format'] = 'full_html';

//enable providing a link in main menu
//$node->menu['enabled'] = 1;
//$node->menu['link_title'] = 'Your page link title';
//$node->menu['description'] = 'Your page description';
//$node->menu['parent'] = 'main-menu:0';
//$node->menu['weight'] = 5;

//enable providing a link in main menu
$node->menu = array(
  'enabled' => 1,
  'mlid' => 0,
  'module' => 'menu',
  'hidden' => 0,
  'has_children' => 0,
  'customized' => 0,
  'options' => array(),
  'expanded' => 0,
  'parent_depth_limit' => 8,
  'link_title' => 'node-content-v7',
  'description' => '',
  'parent' => 'main-menu:0',
  'weight' => 1,
  'plid' => 0,
  'menu_name' => 'main-menu'
 );

$taxonomyid='3'; // Text field
//$node->field_some_text[$node->language][]['value'] = "YOUR TEXT";
// Term reference (taxonomy) field
//$node->field_tags_product[$node->language][0]['tid'] ='4';
$node->field_tags_product['und'][1]['tid'] = '3';
$node->field_tags_product['und'][2]['tid'] = '4';


//图片
//$node->field_image_product['und']['fid']  ='3';
//$node->field_image_product['und']['fid']  ='4';
//移动指定文件到  public://field/image/product
//创建FID
//节点字段引用images FID

$node->path['alias'] = 'About-us7';
$node->comment = 1;       // Comment is 0, 1, 2; 0 = disabled, 1 = read only, or 2 = read/write.
$node->status = 1;        // 1 means published
$node->promote = 1;
$node->revision = 0;
$node->moderate = 0;
$node->sticky = 0;

$node->changed = $_SERVER['REQUEST_TIME'];
$node->created = $_SERVER['REQUEST_TIME'];

//$node->created = strtotime("now");
//$node->changed = strtotime("now");



$filepath_first = DRUPAL_ROOT . '/profiles/imreser/images/field/images/product/a.jpg';
$filepath_second = DRUPAL_ROOT . '/profiles/imreser/images/field/images/product/b.jpg';


// $filepath_first = drupal_realpath('public://field/images/product/a.jpg');
// $filepath_second = drupal_realpath('public://field/images/product/b.jpg');

$filepath_first_dst = 'public://field/images/';
$filepath_second_dst = 'public://field/images/';

//获得FID
$fid_first = imreser_file_upload($filepath_first,$filepath_first_dst);
$fid_second = imreser_file_upload($filepath_second,$filepath_second_dst);

//$file = file_copy($file, 'public://field/image/product');

$file = array(
    '0' => array(
      'fid' => $fid_first,
      'uid' => '1',
      'filename' => 'a.jpg',
      'uri' => 'public://field/images/product/a.jpg',
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
      'uri' => 'public://field/images/product/b.jpg',
      'filemime' => 'image/jpeg',
      'filesize' => '558 699',
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
  //$node->field_image_product['und']= (array)$file;


  //$node->field_image_product['und'][0][$fid] = $fid_first;
  //$node->field_image_product['und'][1][$fid] = $fid_second;




node_object_prepare($node); // Sets some defaults. Invokes hook_prepare() and hook_node_prepare().

$node = node_submit($node); // Prepare node for saving
//  node_submit($node);
node_save($node);












//****************************30***********************************************
global $user;

$node = new stdClass();
$node =node_load($nid); // 创建一个 node object
$node->type = 'page';
node_object_prepare($node);
$node->uid = $user->uid;
//$node->name = $user->name;

$node->title = '关于我们';
$node->language = 'zh-hans';
$node->body['und'][0]['value'] = '上海嘉乐装饰工程有限公司创立于1995年，新厂坐拥风景秀美的上海市海湾旅游区，占地50亩，建筑面积51800平方米。
上海嘉乐上海嘉乐上海嘉乐上海嘉乐上海嘉乐上海嘉乐上海嘉乐公司是中国目前专业生产装饰艺术石膏制品、GRG、GRC、科技石材、雕塑、硅钙天花板、无纸面石膏大板等欧式装饰材料，是中国规模大、品种全面的企业之一，集研发、生产、销售、安装、服务为一体，真诚为客户创造完美价值。产品主要服务于中国和欧美市场。上海嘉乐上海嘉乐上海嘉乐上海嘉乐上海嘉乐上海嘉乐上海嘉乐公司以“品牌，人才，共赢”为发展战略，以“唯美创造尊贵”为核心价值观，秉承“品牌至上、质量至精、服务至诚”的经营理念，融合中西建筑文化精髓，开拓奋进、锐意创新、经过20年的卓越努力，建设成为管理先进、技术精良、服务优质、团队职业化水平和市场占有率较高的优秀企业，公司及其产品荣获“全国工程建材首选品牌500强重点推广单位”、“中国著名品牌”、“中国绿色建材推荐产品”、“上海优秀产品奖”、“中国艺术造型石膏应用奖”等国家、省部级荣誉称号，并荣获2015年度网络评选“中国石膏线十大品牌”榜首，并荣获2015年度网络评选“中国石膏线十大品牌”榜首，并荣获2015年度网络评选“中国石膏线十大品牌”榜首，2015年承办中国·首届艺术石膏发展高峰论坛。
上海嘉乐公司于2002年，第一个定制了中国石膏线行业的企业标准，并于2010年10月应邀参加国家工信部，制订了石膏线的国家行业标准；2016年参与制定中国GRG国家行业标准，是中国建筑装饰装修材料协会石膏纸制品分会发起单位之一。';
$node->body['und'][0]['summary'] = '上海嘉乐装饰工程有限公司创立于1995年，新厂坐拥风景秀美的上海市海湾旅游区，占地50亩，建筑面积51800平方米。
上海嘉乐上海嘉乐上海嘉乐上海嘉乐上海嘉乐上海嘉乐上海嘉乐公司是中国目前专业生产装饰艺术石膏制品、GRG、GRC、科技石材、雕塑、硅钙天花板、无纸面石膏大板等欧式装饰材料，是中国规模大、品种全面的企业之一，集研发、生产、销售、安装、服务为一体，真诚为客户创造完美价值。产品主要服务于中国和欧美市场。上海嘉乐上海嘉乐上海嘉乐上海嘉乐上海嘉乐上海嘉乐上海嘉乐公司以“品牌，人才，共赢”为发展战略，以“唯美创造尊贵”为核心价值观，秉承“品牌至上、质量至精、服务至诚”的经营理念，融合中西建筑文化精髓，开拓奋进、锐意创新、经过20年的卓越努力，建设成为管理先进、技术精良、服务优质、团队职业化水平和市场占有率较高的优秀企业，公司及其产品荣获“全国工程建材首选品牌500强重点推广单位”、“中国著名品牌”、“中国绿色建材推荐产品”、“上海优秀产品奖”、“中国艺术造型石膏应用奖”等国家、省部级荣誉称号，并荣获2015年度网络评选“中国石膏线十大品牌”榜首，并荣获2015年度网络评选“中国石膏线十大品牌”榜首，并荣获2015年度网络评选“中国石膏线十大品牌”榜首，2015年承办中国·首届艺术石膏发展高峰论坛。
上海嘉乐公司于2002年，第一个定制了中国石膏线行业的企业标准，并于2010年10月应邀参加国家工信部，制订了石膏线的国家行业标准；2016年参与制定中国GRG国家行业标准，是中国建筑装饰装修材料协会石膏纸制品分会发起单位之一。';
$node->body['und'][0]['format'] = 'full_html';

//$node->menu['enabled'] = 1;       // 1 to enable providing a link in main menu
//$node->menu['link_title'] = 'Your page link title';
//$node->menu['description'] = 'Your page description';
//$node->menu['parent'] = 'main-menu:0';
//$node->menu['weight'] = 5;

$node->menu = array(
  'enabled' => 1,
  'mlid' => 0,
  'module' => 'menu',
  'hidden' => 0,
  'has_children' => 0,
  'customized' => 0,
  'options' => array(),
  'expanded' => 0,
  'parent_depth_limit' => 8,
  'link_title' => '关于我们',
  'description' => '',
  'parent' => 'main-menu:0',
  'weight' => 1,
  'plid' => 0,
  'menu_name' => 'main-menu'
 );


$node->path['alias'] = 'About-us';
$node->comment = 1;

$node->status = 1;        // 1 means published
$node->promote = 1;
$node->revision = 0;

$node->changed = $_SERVER['REQUEST_TIME'];
$node->created = $_SERVER['REQUEST_TIME'];

node_submit($node);
node_save($node);
