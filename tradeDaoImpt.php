<?php
/**
 * 거래 부분 인터페이스
 */

namespace share;
require_once("dao.php");

class tradeDao implements dao {
    public function __construct(){}

    public function add( $conn, $obj ){
        $resultOfvalue = 0;
        $sql = "INSERT INTO shareline_trade (idx) VALUES";
        $sql .= "('".$obj->get()."')";
        $resultOfvalue = mysql_query($sql, $conn) or die ("location: trade data add error : ".mysql_error());
        return $resultOfvalue;
    }

    public function update( $conn, $obj ){
        $resultOfvalue = 0;
        $resultOfvalue = mysql_query($sql, $conn) or die ("location: trade data update error : ".mysql_error());
        return $resultOfvalue;
    }
}