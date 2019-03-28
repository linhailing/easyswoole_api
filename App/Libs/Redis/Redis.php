<?php
/**
 * Created by PhpStorm.
 * User: henry
 * Date: 2019/3/28
 * Time: 9:20 AM
 */

namespace App\Libs\Redis;


use EasySwoole\Component\Singleton;
use EasySwoole\EasySwoole\Config;

class Redis{
    use Singleton;
    private $redis;
    private function __construct(){
        if (!extension_loaded('redis')) {
            new \Exception('redis.so没有找到');
        }
        try{
            $this->redis = new \Redis();
            $redisConfig = Config::getInstance()->getConf('REDIS');
            $this->redis->connect($redisConfig['host'],$redisConfig['port'],$redisConfig['POOL_TIME_OUT']);
        }catch (\Exception $e){
            new \Exception('redis服务异常');
        }
    }
    public function get($key){
        if (empty($key)) return '';
        return $this->redis->get($key);
    }
}