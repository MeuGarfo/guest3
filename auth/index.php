<?php
if(!defined('ROOT')){
    require_once '../basic/basic.php';
}
inc([
    'env',
    'error',
    'controller',
    'model',
    'view'
]);
error(true);
controller('auth/signup');
?>
