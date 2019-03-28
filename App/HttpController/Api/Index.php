<?php
/**
 * Created by PhpStorm.
 * User: henry
 * Date: 2019/3/24
 * Time: 12:15 AM
 */

namespace App\HttpController\Api;


use App\Libs\Redis\Redis;
use EasySwoole\EasySwoole\Config;
use EasySwoole\Mysqli\Mysqli;

class Index extends Base {
    public function test(){
        $conf = new \EasySwoole\Mysqli\Config(Config::getInstance()->getConf('MYSQL'));
        $db =  new Mysqli($conf);
        $data = $db->get('test');
        return $this->jsonp($data);
    }
    public function getRedis(){
        $redis = Redis::getInstance();
        $name =$redis->get('henry');
        return $this->jsonp($name);
    }
}