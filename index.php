<?php
require 'basic/basic.php';
inc([
    'env',
    'error',
    'segment'
]);
error(true);
$controller=segment(1);
switch ($controller) {
    case 'auth':
    require 'auth/index.php';
    break;
    default:
    require 'mensagem/index.php';
    break;
}
