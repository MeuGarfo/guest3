<?php
//Criado por Anderson Ismael
//08 de abril de 2019

require __DIR__.'/vendor/autoload.php';

use Dotenv\Dotenv;

$filename=ROOT.'.env';
$rootUp=explode('/',ROOT);
end($rootUp);
$key=key($rootUp);
unset($rootUp[$key-1]);
$rootUp=implode('/',$rootUp);
$filenameUp=$rootUp.'.env';
if(file_exists($filename)){
    $dotenv = Dotenv::create(ROOT);
    $dotenv->load();
}elseif(file_exists($filenameUp)){
    $dotenv = Dotenv::create($rootUp);
    $dotenv->load();
}else{
    die('nano .env'.PHP_EOL);
}
