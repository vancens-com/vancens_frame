<?php
/**
 * Created by 盐城网诚信息科技有限公司(vancens.com)
 * User: 阿强(550096055@qq.com)
 * Date: 2020/7/1
 * Time: 13:02
 * Info: 入口文件
 */

//项目根目录
define('ROOT_PATH',realpath('../'));
//框架核心目录
define('FRAME_PATH',realpath('../frame'));
//公共函数目录
define('FUNC_PATH',realpath('../func'));
//错误信息显示
define('DEBUG',true);

if (DEBUG) {
    ini_set('display_errors','On');
} else {
    ini_set('display_errors','Off');
}

//加载公共函数
require FUNC_PATH.'/common.php';

p(FUNC_PATH);
p(FRAME_PATH);