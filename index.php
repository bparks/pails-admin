<?php
/*
admin is a metaplugin of sorts; it aggregates common admin functionality into
menus and other navigational structures
*/
define ('ADMIN_MENU_SLUG', 'admin-menu');

Menu::add_static_item(ADMIN_MENU_SLUG, 'Admin', '/admin');
?>