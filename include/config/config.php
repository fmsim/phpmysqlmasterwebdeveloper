<?php
// Validation
if ( _VALID != 'Yes' ) {
  // Restricted access
  include_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/404.php' );
  exit();
}

// Build configuration
require_once 'config.cache.php';
require_once 'config.db.php';
require_once 'config.paths.php';
require_once 'config.locals.php';
require_once 'config.options.php';
?>
