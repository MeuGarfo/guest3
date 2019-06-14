<?php
if(!defined('ROOT')){
    require_once '../basic/basic.php';
}
inc([
    'env',
    'controller',
    'error',
    'model',
    'view'
]);
error(true);
controller('guest3/home');
