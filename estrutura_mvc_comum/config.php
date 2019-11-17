<?php
require 'environment.php';

global $config;
$config = array();
if(ENVIRONMENT == 'desenvolvimento'){
    $config['dbname'] = 'treinamentos';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = 'm10021988@';
}else{
    $config['dbname'] = 'treinamentos';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = 'm10021988@';
}