<?php
require 'basic/basic.php';
inc([
    'env',
    'error',
    'segment',
    'view'
]);
error(true);
$controller=segment(1);
switch ($controller) {
    case 'auth':
    require 'auth/index.php';
    break;
    case '/':
    case 'mensagem':
    require 'mensagem/index.php';
    break;
    default:
    view('home/404');
    break;
}
