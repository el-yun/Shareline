<?php
interface tradeService {
    public function add( $conn, $obj);
    public function update( $conn, $obj);
    public function delete( $conn, $obj);
    public function lists( $conn, $obj);
    public function listscount( $conn, $obj);
    public function getobj( $conn, $obj);
}