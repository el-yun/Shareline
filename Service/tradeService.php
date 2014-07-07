<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 14. 7. 2
 * Time: 오전 2:11
 */

namespace share;


class tradeService {
    private $tradeDao = "";
    private $productService = "";

    public function __construct(){
    }

    public function setDao($trade){
        $this->tradeDao = $trade;
    }

    public function setService($product){
        $this->productService = $product;
    }
} 