<?php


define('__THEME_DIR__',__DIR__);
define('__SRC_DIR__',__THEME_DIR__.'/src');
define('__FUNCTIONS_DIR__',__SRC_DIR__.'/functions');
define('__VIEW_DIR__',__SRC_DIR__.'/view');

include __FUNCTIONS_DIR__.'/functions-init.php';
include __FUNCTIONS_DIR__.'/functions-remove.php';
include __FUNCTIONS_DIR__.'/functions-import.php';
include __FUNCTIONS_DIR__.'/functions-options.php';
include __FUNCTIONS_DIR__.'/functions-acf.php';