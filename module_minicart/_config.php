<?php

define('MODULE_MINICART_DIR', 'module_minicart');

DataObject::add_extension('SiteTree', 'MiniCart');

ShortcodeParser::get()->register('mini_cart_item', array('MiniCart', 'MiniCartItemShortcodeHandler'));

MiniCart::set_business_email("natalie@cantabilemusic.com.au");
MiniCart::set_currency_code("AUD");
MiniCart::set_return_url("http://www.cantabilemusic.com.au/ticketfinish.php");
MiniCart::set_cancel_return_url("http://www.cantabilemusic.com.au//ticketfinish.php");
