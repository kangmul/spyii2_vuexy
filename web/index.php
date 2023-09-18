<?php

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

// error_reporting(E_ERROR || E_PARSE || E_ALL);

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

// $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
// $dotenv->load();

// var_dump(getenv());exit;

date_default_timezone_set("Asia/Jakarta");

$config = require __DIR__ . '/../config/web.php';

(new yii\web\Application($config))->run();
