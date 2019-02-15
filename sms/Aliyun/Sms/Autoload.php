<?php
/**
 * Created by PhpStorm.
 * User: 钊鑫
 * Date: 2019/2/15
 * Time: 16:44
 */
namespace Zzx\Aliyun\Sms;

class Autoload {
    public static function config()
    {
        /**
         * include config.php
         */
        if (!defined("SMS_PATH")) {
            define("SMS_PATH", dirname(__FILE__) . '/');
        }

        include( SMS_PATH . 'Config.php');
    }
}