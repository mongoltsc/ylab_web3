<?php
IncludeModuleLangFile(__FILE__);
$aMenu = array();
global $APPLICATION;

use Bitrix\Main\Loader;
if (!Loader::includeModule('digitalwand.admin_helper') || !Loader::includeModule('ylab.fruits')) return;


return array(
    'parent_menu'   => 'global_menu_content',
    'sort'          => 300,
    'text'          => GetMessage('YLAB_FRUITS_MENU_TEXT'),
    'title'         => GetMessage('YLAB_FRUITS_MENU_TITLE'),
    'url'           => ylab\fruits\fruits\AdminInterface\FruitsListHelper::getUrl(),
    'icon'          => 'learning_menu_icon',
    'page_icon'     => 'learning_menu_icon',
    'items_id'      => 'menu_ylab_fruits',
    'items'         => array()
);