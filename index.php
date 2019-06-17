<?php
require 'basic/basic.php';
inc([
    'env',
    'error',
    'segment'
]);
error(true);
print '<pre>';
var_dump(segment());
//require 'home/index.php';
