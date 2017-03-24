<?php

/**
 * @file
 * Template overrides as well as (pre-)process and alter hooks for the
 * islandimagined theme.
 */


//######################
// Manipulation of menus
//######################


//main menu (top) using the menu block module
function islandimagined_menu_tree__menu_block__1(&$variables) {
    return '<ul class="main-menu__items dropdown menu" data-dropdown-menu>' . $variables['tree'] . '</ul>';
}


