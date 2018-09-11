<?php
//Create some default content
//////////////////////////////////////////////////////////////////////////////////
global $user;
$node = new stdClass();
$node =node_load($nid);
$node->type = 'page';
$node->uid = $user->uid;
$node->title = '关于我们';
$node->language = 'zh-hans';
$node->body['und'][0]['value'] = '上海嘉乐装饰工程有限公司创立于1995年，新厂坐拥风景秀美的上海市海湾旅游区，占地50亩，建筑面积51800平方米。
上海嘉乐上海嘉乐上海嘉乐上海嘉乐上海嘉乐上海嘉乐上海嘉乐公司是中国目前专业生产装饰艺术石膏制品、GRG、GRC、科技石材、雕塑、硅钙天花板、无纸面石膏大板等欧式装饰材料，是中国规模大、品种全面的企业之一，集研发、生产、销售、安装、服务为一体，真诚为客户创造完美价值。产品主要服务于中国和欧美市场。上海嘉乐上海嘉乐上海嘉乐上海嘉乐上海嘉乐上海嘉乐上海嘉乐公司以“品牌，人才，共赢”为发展战略，以“唯美创造尊贵”为核心价值观，秉承“品牌至上、质量至精、服务至诚”的经营理念，融合中西建筑文化精髓，开拓奋进、锐意创新、经过20年的卓越努力，建设成为管理先进、技术精良、服务优质、团队职业化水平和市场占有率较高的优秀企业，公司及其产品荣获“全国工程建材首选品牌500强重点推广单位”、“中国著名品牌”、“中国绿色建材推荐产品”、“上海优秀产品奖”、“中国艺术造型石膏应用奖”等国家、省部级荣誉称号，并荣获2015年度网络评选“中国石膏线十大品牌”榜首，并荣获2015年度网络评选“中国石膏线十大品牌”榜首，并荣获2015年度网络评选“中国石膏线十大品牌”榜首，2015年承办中国·首届艺术石膏发展高峰论坛。
上海嘉乐公司于2002年，第一个定制了中国石膏线行业的企业标准，并于2010年10月应邀参加国家工信部，制订了石膏线的国家行业标准；2016年参与制定中国GRG国家行业标准，是中国建筑装饰装修材料协会石膏纸制品分会发起单位之一。';
$node->body['und'][0]['summary'] = '上海嘉乐装饰工程有限公司创立于1995年，新厂坐拥风景秀美的上海市海湾旅游区，占地50亩，建筑面积51800平方米。
上海嘉乐上海嘉乐上海嘉乐上海嘉乐上海嘉乐上海嘉乐上海嘉乐公司是中国目前专业生产装饰艺术石膏制品、GRG、GRC、科技石材、雕塑、硅钙天花板、无纸面石膏大板等欧式装饰材料，是中国规模大、品种全面的企业之一，集研发、生产、销售、安装、服务为一体，真诚为客户创造完美价值。产品主要服务于中国和欧美市场。上海嘉乐上海嘉乐上海嘉乐上海嘉乐上海嘉乐上海嘉乐上海嘉乐公司以“品牌，人才，共赢”为发展战略，以“唯美创造尊贵”为核心价值观，秉承“品牌至上、质量至精、服务至诚”的经营理念，融合中西建筑文化精髓，开拓奋进、锐意创新、经过20年的卓越努力，建设成为管理先进、技术精良、服务优质、团队职业化水平和市场占有率较高的优秀企业，公司及其产品荣获“全国工程建材首选品牌500强重点推广单位”、“中国著名品牌”、“中国绿色建材推荐产品”、“上海优秀产品奖”、“中国艺术造型石膏应用奖”等国家、省部级荣誉称号，并荣获2015年度网络评选“中国石膏线十大品牌”榜首，并荣获2015年度网络评选“中国石膏线十大品牌”榜首，并荣获2015年度网络评选“中国石膏线十大品牌”榜首，2015年承办中国·首届艺术石膏发展高峰论坛。
上海嘉乐公司于2002年，第一个定制了中国石膏线行业的企业标准，并于2010年10月应邀参加国家工信部，制订了石膏线的国家行业标准；2016年参与制定中国GRG国家行业标准，是中国建筑装饰装修材料协会石膏纸制品分会发起单位之一。';
$node->body['und'][0]['format'] = 'full_html';

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
node_object_prepare($node);
node_submit($node);
node_save($node);

//////////////////////////////////////////////////////////////////////////////////
global $user;
$node = new stdClass();
$node->type = 'page';
$node->uid = $user->uid;
$node->title = '产品展示';
$node->language = 'zh-hans';
$node->field_tags_product['und'][0]['tid'] = '3';
$node->body['und'][0]['value'] = '产品展示内容';
$node->body['und'][0]['summary'] = '产品展示内容';
$node->body['und'][0]['format'] = 'full_html';

$node->menu = array(
  'enabled' => 1,
  'mlid' => 0,
  'module' => 'menu',
  'hidden' => 0,
  'has_children' => 1,
  'customized' => 0,
  'options' => array(),
  'expanded' => 1,
  'parent_depth_limit' => 8,
  'link_title' => '产品展示',
  'description' => '',
  'parent' => 'main-menu:0',
  'weight' => 30,
  'plid' => 0,
  'menu_name' => 'main-menu'
 );

$node->path['alias'] = 'Products';
$node->comment = 1;
$node->status = 1;
$node->promote = 0;
$node->revision = 0;
$node->changed = $_SERVER['REQUEST_TIME'];
$node->created = $_SERVER['REQUEST_TIME'];
node_object_prepare($node);
node_submit($node);
node_save($node);

//////////////////////////////////////////////////////////////////////////////////
global $user;
$node = new stdClass();
$node->type = 'page';
$node->uid = $user->uid;
$node->title = '案例展示';
$node->language = 'zh-hans';
$node->body['und'][0]['value'] = '案例展示内容';
$node->body['und'][0]['summary'] = '案例展示内容';
$node->body['und'][0]['format'] = 'full_html';

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
  'link_title' => '案例展示',
  'description' => '',
  'parent' => 'main-menu:0',
  'weight' => 40,
  'plid' => 0,
  'menu_name' => 'main-menu'
 );

$node->path['alias'] = 'Case';
$node->comment = 1;
$node->status = 1;
$node->promote = 0;
$node->revision = 0;
$node->changed = $_SERVER['REQUEST_TIME'];
$node->created = $_SERVER['REQUEST_TIME'];
node_object_prepare($node);
node_submit($node);
node_save($node);

//////////////////////////////////////////////////////////////////////////////////
global $user;
$node = new stdClass();
$node->type = 'page';
$node->uid = $user->uid;
$node->title = '新闻资讯';
$node->language = 'zh-hans';
$node->body['und'][0]['value'] = '新闻资讯内容';
$node->body['und'][0]['summary'] = '新闻资讯内容';
$node->body['und'][0]['format'] = 'full_html';

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
  'link_title' => '新闻资讯',
  'description' => '',
  'parent' => 'main-menu:0',
  'weight' => 50,
  'plid' => 0,
  'menu_name' => 'main-menu'
 );

$node->path['alias'] = 'News';
$node->comment = 1;
$node->status = 1;
$node->promote = 0;
$node->revision = 0;
$node->changed = $_SERVER['REQUEST_TIME'];
$node->created = $_SERVER['REQUEST_TIME'];
node_object_prepare($node);
node_submit($node);
node_save($node);

//////////////////////////////////////////////////////////////////////////////////
global $user;
$node = new stdClass();
$node->type = 'page';

$node->uid = $user->uid;
$node->title = '联系我们';
$node->language = 'zh-hans';
$node->body['und'][0]['value'] = '上海嘉乐装饰工程有限公司
总机：021-66212688
传真：021-66212688
邮箱：webmaster@examples.com
邮箱：HR@examples.com
地址：上海市浦东新区东方路1668号
<p class="rteindent1"><iframe frameborder="0" height="440" marginheight="0" marginwidth="0" scrolling="no" src="http://f.amap.com/18C0B_0074MNl" width="700"></iframe></p>';
$node->body['und'][0]['summary'] = '上海嘉乐装饰工程有限公司
总机：021-66212688
传真：021-66212688
邮箱：webmaster@examples.com
邮箱：HR@examples.com
地址：上海市浦东新区东方路1668号';
$node->body['und'][0]['format'] = 'full_html';

$node->menu = array(
  'enabled' => 1,
  'mlid' => 0,
  'module' => 'menu',
  'hidden' => 0,
  'has_children' => 1,
  'customized' => 0,
  'options' => array(),
  'expanded' => 1,
  'parent_depth_limit' => 8,
  'link_title' => '联系我们',
  'description' => '',
  'parent' => 'main-menu:0',
  'weight' => 90,
  'plid' => 0,
  'menu_name' => 'main-menu'
 );

$node->path['alias'] = 'Contact-us';
$node->comment = 1;
$node->status = 1;
$node->promote = 0;
$node->revision = 0;
$node->changed = $_SERVER['REQUEST_TIME'];
$node->created = $_SERVER['REQUEST_TIME'];
node_object_prepare($node);
node_submit($node);
node_save($node);
