<?php
/**
 * Created by PhpStorm.
 * User: henry
 * Date: 2019/3/28
 * Time: 1:20 PM
 */

namespace App\HttpController;


use EasySwoole\Http\AbstractInterface\Controller;

class Index extends Controller {
    public function index(){
        // TODO: Implement index() method.
        return $this->response()->write(' welcome easyswool');
    }
}