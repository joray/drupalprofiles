<?php
// Create custom menu.
$item = array(
  array(
    'title' => st('Menu Terms Product'),
    'menu_name' => 'menu-terms-product',
    'description' => 'Menu product terms link',
  ),
  array(
    'title' => st('Menu Terms Case'),
    'menu_name' => 'menu-terms-case',
    'description' => 'Menu case terms link',
  ),
  array(
    'title' => st('Menu Terms News'),
    'menu_name' => 'menu-terms-news',
    'description' => 'Menu news terms link',
  ),
);
foreach ($item as $item) {menu_save($item);}

// Create a Home link in the main menu.
$item = array(
  array(
    'link_title' => st('Home'),
    'link_path' => '<front>',
    'menu_name' => 'main-menu',
    'weight' => 0,
  ),
  array(
    'link_title' => st('Coat'),
    'link_path' => 'taxonomy/term/3',
    'menu_name' => 'main-menu',
    'weight' => 100,
    'parent' => 'main-menu:283',
    'enabled' => 1,
    'module' => 'menu',
    'weight' => 300,
    'plid' => 283,
  ),
  array(
    'link_title' => st('Pants'),
    'link_path' => 'taxonomy/term/4',
    'menu_name' => 'main-menu',
    'weight' => 200,
    'parent' => 'main-menu:283',
    'enabled' => 1,
    'module' => 'menu',
    'weight' => 400,
    'plid' => 283,
  ),
  array(
    'link_title' => st('Trousers'),
    'link_path' => 'taxonomy/term/5',
    'menu_name' => 'main-menu',
    'weight' => 300,
    'parent' => 'main-menu:283',
    'enabled' => 1,
    'module' => 'menu',
    'weight' => 600,
    'plid' => 283,
  ),
  array(
    'link_title' => st('Contact'),
    'link_path' => 'contact',
    'menu_name' => 'main-menu',
    'weight' => 500,
    'description' => st('Contact us by send email'),
    'parent' => 'main-menu:286',
    'enabled' => 1,
    'module' => 'menu',
    'weight' => 600,
    'plid' => 286,
  ),
);
foreach ($item as $item) {menu_link_save($item);}
