<?php
// Validation
if (_VALID != 'Yes') {
  // Restricted access
  include_once($_SERVER['DOCUMENT_ROOT'] . '/404.php');
  exit();
}

// Romana
$lang = array();
$lang['website_message_welcome'] = 'Salutare lume!';
?>
