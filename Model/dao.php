<?php
namespace share;

// 데이터베이스 입출력 인터페이스
interface dao {
    public function add( $conn, $obj);
    public function update( $conn, $obj, $condition);
    public function delete( $conn, $condition);
    public function lists( $conn, $condition);
    public function listscount( $conn, $condition);
    public function getobj( $conn, $condition);
}

// 테이블 관리 인터페이스
interface product {
    public function addcolumn( $conn, $obj);
    public function delcolumn( $conn, $obj );
    public function addcategory( $conn, $obj );
    public function delcategory( $conn, $obj );
}