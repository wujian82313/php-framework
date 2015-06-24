<?php
//版本号
define('VERSION', '1.0.0');
//发布时间
define('RELEASE', '');
//用于访问检查
define('IN_APP', TRUE);
//运行模式: dev:开发环境, pro:生产环境, test:测试环境
defined('RUN_MODE') or define('RUN_MODE', 'dev');
//默认关闭Debug模式
defined('DEBUG') or define('DEBUG', FALSE);
//目录分隔符
define('DS', DIRECTORY_SEPARATOR);
//定义当前时间戳常量
define('NOW', isset($_SERVER['REQUEST_TIME']) ? $_SERVER['REQUEST_TIME'] : time());
//记录开始时间
define('START_TIME', microtime(TRUE));
//内存使用
define('START_MEMORY_USAGE', memory_get_usage());

/************* 应用目录 ***************/
//配置文件目录
defined('CONFIG_PATH') or define('CONFIG_PATH', APP_PATH . 'Config' . DS);
//语言包目录
defined('LANG_PATH') or define('LANG_PATH', APP_PATH . 'Lang' . DS);
//视图模板目录
defined('VIEW_PATH') or define('VIEW_PATH', APP_PATH . 'View' . DS);

/************* 字符集 ****************/
defined('CHARSET') or define('CHARSET', 'utf-8');

/************* 消息码 ****************/
define('MSG_NONE',     0x0); //无提示(默认)
define('MSG_OK',       0x1); //提示成功
define('MSG_ERR',      0x2); //提示失败
define('MSG_LOGIN',    0x3); //尚未登录
define('MSG_REDIRECT', 0x4); //跳转