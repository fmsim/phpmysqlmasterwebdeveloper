<?php
// Validation
if ( _VALID != 'Yes' ) {
  // Restricted access
  include_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/404.php' );
  exit();
}

/** Paths to directories **/
// Website URL
$GLOBALS[ 'URL' ] = '';
// Website root
$GLOBALS[ 'ROOT_PATH' ] = $_SERVER[ 'DOCUMENT_ROOT' ];
// Languages path
$GLOBALS[ 'LANG_PATH' ] = $GLOBALS[ 'ROOT_PATH' ] . '/include/config/languages';
// Assets path
$GLOBALS[ 'ASSETS_PATH' ] = $GLOBALS[ 'ROOT_PATH' ] . '/assets';
// Media path
$GLOBALS[ 'MEDIA_PATH' ] = $GLOBALS[ 'ROOT_PATH' ] . '/uploads/media';
// Themes path
$GLOBALS[ 'THEMES_PATH' ] = $GLOBALS[ 'ROOT_PATH' ] . '/uploads/themes';
?>
