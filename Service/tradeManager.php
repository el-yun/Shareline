<?php
/**
 * 거래 부분 인터페이스
 */

namespace share;

class tradeManager implements dao {
    public function __construct(){}
    public function add( $conn, $obj){}
    public function update( $conn, $obj, $condition){}
    public function delete( $conn, $condition){}
    public function lists( $conn, $condition){}
    public function listscount( $conn, $condition){}
    public function getobj( $conn, $condition){}
}