<?php
/**
 * Created by PhpStorm.
 * User: henry
 * Date: 2019/3/24
 * Time: 9:13 AM
 */

namespace App\HttpController\Api;


use EasySwoole\Http\AbstractInterface\Controller;

class Base extends Controller{
    protected function onRequest($action): ?bool{
        //$this->writeJson(404, [], '你没有权限访问！');
        return true;
    }
    public function index(){
        // TODO: Implement index() method.
    }
    protected function onException(\Throwable $throwable): void{
        //$this->writeJson(404,[], $throwable);
        throw $throwable;
    }
    public function jsonp($data = [], $code = 200, $msg ='OK'){
        return $this->writeJson($code,$data, $msg);
    }

}