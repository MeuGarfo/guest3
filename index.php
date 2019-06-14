<?php
require 'basic/basic.php';
inc([
    'env',
    'error',
    'controller',
    'view'
]);
error(true);
require 'home/index.php';
