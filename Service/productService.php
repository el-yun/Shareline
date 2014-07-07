<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 14. 7. 2
 * Time: 오전 2:11
 */

namespace share;


class productService {
    private $pm = "";

    public function __construct(){
        $this->pm = new productManager();
    }
    public function setDao($trade){
        $this->pm = $trade;
    }
} 