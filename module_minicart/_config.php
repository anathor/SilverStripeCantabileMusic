<?php

define('MODULE_MINICART_DIR', 'module_minicart');

DataObject::add_extension('SiteTree', 'MiniCart');

ShortcodeParser::get()->register('mini_cart_item', array('MiniCart', 'MiniCartItemShortcodeHandler'));

MiniCart::set_business_email("sell_1286679004_biz@cantabilemusic.com.au");
MiniCart::set_currency_code("AUD");
MiniCart::set_return_url("http://ec2-176-32-77-19.ap-northeast-1.compute.amazonaws.com/ticketfinish.php");
MiniCart::set_cancel_return_url("http://ec2-176-32-77-19.ap-northeast-1.compute.amazonaws.com/ticketfinish.php");
