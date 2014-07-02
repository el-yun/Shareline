<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 14. 7. 2
 * Time: 오전 2:11
 */

namespace share;


class tradeServiceImpt implements tradeService {
    public function __construct(){}
    private $tradeDao = "";

    public function setTradeDao($trade){
        $this->tradeDao = $trade;
    }

    private $productService = "";
    public function setProductService($product){
        $this->productService = $product;
    }

    public function add($conn, $obj){
        $resultOfAdd = 0;
        $resultOfAdd = $this->tradeDao->add($conn, $obj);
    }
} 