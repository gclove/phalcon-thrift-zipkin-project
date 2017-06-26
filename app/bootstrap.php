<?php
// +----------------------------------------------------------------------
// | BOOTSTRAP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 limingxinleo All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <https://github.com/limingxinleo>
// +----------------------------------------------------------------------
defined('APP_PATH') || define('APP_PATH', __DIR__);
// use Phalcon\DI\FactoryDefault;
use App\DI;

/** Read the configuration */
$config = include APP_PATH . "/config/config.php";

/** Read auto-loader */
include APP_PATH . "/config/loader.php";

/** 设置时区 */
ini_set('date.timezone', $config->timezone);

/** @var phalcon 容器  $di */
// $di = new FactoryDefault();

/** Read services */
// include APP_PATH . "/config/services.php";

$di = (new DI($config))->getDI();
include APP_PATH . "/config/web/services.php";
return $di;