<?php
/**
 * @file
 * Enables modules and site configuration for a standard site installation.
 */

/**
 * Implements hook_form_FORM_ID_alter() for install_configure_form().
 *
 * Allows the profile to alter the site configuration form.
 */
function imreser_form_install_configure_form_alter(&$form, $form_state) {
  // Pre-populate the site name with the server name.
  $form['site_information']['site_name']['#default_value'] = $_SERVER['SERVER_NAME'];
}





//
//
// /**
//  * Implements hook_install_tasks().
//  */
// function imreser_install_tasks() {
//   return array(
//     'imreser_images_move' => array(
//       'display' => FALSE,
//     ),
//   );
// }
//
//
// /**
//  * Moves all images to the public:// folder.
//  */
// function imreser_images_move($install_state) {
//   $dir = drupal_get_path('profile', 'imreser') . '/images';
//   $images = file_scan_directory($dir, '/.*/');
//   foreach($images as $value) {
//   $file_path = $value->uri;
//     $file = (object)array(
//       "uid" => 1,
//       "uri" => $file_path,
//       "filemime" => file_get_mimetype($file_path),
//       "status" => 1
//     );
//     $file = file_copy($file, 'public://move', FILE_EXISTS_REPLACE);
//   }
// }
