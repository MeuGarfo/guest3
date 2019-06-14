<?php
require 'basic/basic.php';
inc([
    'env',
    'error',
    'controller',
]);
error(true);
require 'home/index.php';
