<?php
if(!defined('ROOT')){
    require_once '../basic/basic.php';
}
inc([
    'auth',
    'e',
    'env',
    'error',
    'controller',
    'method',
    'model',
    'redirect',
    'segment',
    'view'
]);
$controller=segment(2);
switch ($controller) {
    case 'signup':
    controller('auth/signup');
    break;
    default:
    view('home/404');
    break;
}

?>
