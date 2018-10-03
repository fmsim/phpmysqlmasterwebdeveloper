<?php
// Validation
if (_VALID != 'Yes') {
  // Restricted access
  include_once($_SERVER[ 'DOCUMENT_ROOT'] . '/404.php');
  exit();
}

/** Default settings **/
$config = array();
// Website
$config['SITE_NAME'] = 'PHP Shopping Cart';
$config['SITE_NAME_SHOW'] = '1';
$config['SITE_LANG'] = 'en_US';
$config['SITE_THEME'] = 'Default';
$config['SITE_META_TAGS'] = 'PHP Shopping Cart, learn code, php, mysqli, html, css, more';
$config['SITE_META_DESC'] = 'Learn how to create a amazing PHP Shopping Cart';
$config['SITE_META_CHARSET'] = 'UTF-8';
$config['SITE_COPY'] = '&copy; 2018 Eduard Stefanescu';
$config['SITE_DEV_MODE'] = '1';
$config['SITE_PAGE_HOME'] = '1';
$config['SITE_UPDATE'] = '19-06-2018';
// Shop
$config['SHOP_STATUS'] = '1';
$config['SHOP_CURRENCY'] = 'USD';
$config['SHOP_CURRENCY_ICON'] = 'fa fa-usd';
$config['SHOP_CURRENCY_TS'] = 'c';
$config['SHOP_CURRENCY_DS'] = 'd';
$config['SHOP_CURRENCY_ND'] = '2';
$config['SHOP_ORDER_MIN'] = 10.00;
$config['SHOP_ORDER_MAX'] = 100000.00;
$config['SHOP_ORDER_MEMBERS'] = '0';
$config['SHOP_ORDER_SHIPPING'] = '0';
$config['SHOP_ORDER_TAXES'] = '1';
$config['SHOP_ORDER_COUPONS'] = '1';
$config['SHOP_UNIT_WEIGHT'] = 'lb';
$config['SHOP_UNIT_DIM'] = 'in';
$config['SHOP_COST_WEIGHT'] = '1.00';
$config['SHOP_COST_DIM'] = '1.50';
$config['SHOP_REVIEWS_AUTO'] = '1';
// Layout
$config['LAYOUT_MENU_TOP'] = '1';
$config['LAYOUT_MENU_MAIN'] = '1';
$config['LAYOUT_MENU_BOTTOM'] = '1';
$config['LAYOUT_SIDE'] = '1';
$config['LAYOUT_SIDE_POSITION'] = 'right';
?>
