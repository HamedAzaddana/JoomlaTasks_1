<?php

// no direct access
defined('_JEXEC') or die;
JLoader::register('ModJHaUsersHelper', __DIR__ . '/helper.php');
$users = ModJHaUsersHelper::getListOfUsers($params);
$document = JFactory::getDocument();
$document->addStyleSheet(JURI::root() . 'modules/mod_ha_listusers/assets/index.css');
$default_avatar_url = JURI::root() . 'modules/mod_ha_listusers/assets/avatar.png';
$avatar_url = $params->get('image_avatar', '');
if (!$avatar_url) {
    $avatar_url = $default_avatar_url;
} else {
    $avatar_url = JURI::root() . $avatar_url;
}

if ($params->get('layout', 'default') == "_:slider") {
    $document->addStyleSheet(JURI::root() . 'modules/mod_ha_listusers/assets/slick/slick.css');
    $document->addStyleSheet(JURI::root() . 'modules/mod_ha_listusers/assets/slick/slick-theme.css');
    $document->addScript(JURI::root() . 'modules/mod_ha_listusers/assets/slick/slick.min.js');
}

require JModuleHelper::getLayoutPath('mod_ha_listusers', $params->get('layout', 'default'));
