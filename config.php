<?php
    $config['db'] = array(
    'host' => 'localhost',
    'username' => 'root',
    'password' => '',
    'dbname' => 'music'
    );
    
    $db = new PDO('mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['dbname'], $config['db']['username'], $config['db']['password']);
    $db->exec('set names utf8');    
?>