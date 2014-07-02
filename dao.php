<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 14. 7. 2
 * Time: 오전 12:52
 */
interface dao {
    public function add( $conn, $obj);
    public function update( $conn, $obj);
    public function delete( $conn, $obj);
    public function lists( $conn, $obj);
    public function listscount( $conn, $obj);
    public function getobj( $conn, $obj);
}