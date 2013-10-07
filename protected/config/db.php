<?php
return YII_DEBUG ? array(
    'connectionString'=>'mysql:host=localhost;dbname=carcure',
    'username'=>'root',
    'password'=>'',
    'charset'=>'utf8',
    'enableParamLogging'=>true,
    'enableProfiling'=>true,
) : array(
    'connectionString'=>'mysql:host=localhost;dbname=carcure',
    'username'=>'root',
    'password'=>'',
    'charset'=>'utf8',
    'schemaCachingDuration'=>3600,
);

