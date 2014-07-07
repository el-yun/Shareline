<?php
/**
 * 상품 부분 인터페이스
 */
namespace share;

class productManager implements dao, product {
    public function __construct(){}
    public $table_name = "`SH_PRODUCT`";
    public function add( $conn, $obj ){
        $resultOfvalue = 0;
        // 추상화 객체를 SQL에 맞춤
        $sql = "INSERT INTO ".$this->table_name;
        $key = "";
        $val = "";
        $count = 0;
        foreach($obj as $col => $value){
            if($count>0) $key.= ",`".$col."`";
            else $key.= "`".$col."`";
            if($count>0) $val.= ",`".$value."`";
            else $val.= "`".$value."`";
            $count++;
        }
        $sql.= " (".$key.") VALUES (".$val.")";
        $resultOfvalue = mysql_query($sql, $conn) or die ("location: product data add error : ".mysql_error());
        return $resultOfvalue;
    }

    public function update( $conn, $obj, $condition ){
        $resultOfvalue = 0;
        // 추상화 객체를 SQL에 맞춤
        $sql = "UPDATE ".$this->table_name;
        $key = "";
        $con = "";
        $count = 0;
        foreach($obj as $col => $val){
            if($count>0) $key.= ",`".$col."` = '".$val."'";
            else $key.= "`".$col."` = '".$val."'";
            $count++;
        }
        foreach($condition as $col => $val){
            if($count>0) $con.= " AND (`".$col."` = '".$val."')";
            else $con.= "(`".$col."` = '".$val."')";
            $count++;
        }
        $sql.= " SET ".$key." WHERE ".$con;
        $resultOfvalue = mysql_query($sql, $conn) or die ("location: product data update error : ".mysql_error());
        return $resultOfvalue;
    }

    public function delete( $conn, $condition ){
        $resultOfvalue = 0;
        // 추상화 객체를 SQL에 맞춤
        $sql = "DELETE FROM ".$this->table_name;
        $con = "";
        $count = 0;
        foreach($condition as $col => $val){
            if($count>0) $con.= " AND (`".$col."` = '".$val."')";
            else $con.= "(`".$col."` = '".$val."')";
            $count++;
        }
        $sql.= " WHERE ".$con;
        $resultOfvalue = mysql_query($sql, $conn) or die ("location: product data delete error : ".mysql_error());
        return $resultOfvalue;
    }
    public function lists( $conn, $condition ){
        $resultOfvalue = 0;
        // 추상화 객체를 SQL에 맞춤
        $sql = "SELECT * FROM `SH_PRODUCT`";
        $con = "";
        $count = 0;
        foreach($condition as $col => $val){
            if($count>0) $con.= " AND (`".$col."` = '".$val."')";
            else $con.= "(`".$col."` = '".$val."')";
            $count++;
        }
        $sql.= " WHERE ".$con;
        $resultOfvalue = mysql_query($sql, $conn) or die ("location: product data get list array error : ".mysql_error());
        return mysql_fetch_array($resultOfvalue);
    }
    public function listscount( $conn, $condition ){
        $resultOfvalue = 0;
        // 추상화 객체를 SQL에 맞춤
        $sql = "SELECT COUNT(*) as 'COUNTS' FROM ".$this->table_name;
        $con = "";
        $count = 0;
        foreach($condition as $col => $val){
            if($count>0) $con.= " AND (`".$col."` = '".$val."')";
            else $con.= "(`".$col."` = '".$val."')";
            $count++;
        }
        $sql.= " WHERE ".$con;
        $resultOfvalue = mysql_query($sql, $conn) or die ("location: product data get list array error : ".mysql_error());
        $result = mysql_fetch_array($resultOfvalue);
        return $result['COUNTS'];
    }
    public function getobj( $conn, $condition ){
        $resultOfvalue = 0;
        // 추상화 객체를 SQL에 맞춤
        $sql = "SELECT * FROM ".$this->table_name;
        $con = "";
        $count = 0;
        foreach($condition as $col => $val){
            if($count>0) $con.= " AND (`".$col."` = '".$val."')";
            else $con.= "(`".$col."` = '".$val."')";
            $count++;
        }
        $sql.= " WHERE ".$con." LIMIT 1";
        $resultOfvalue = mysql_query($sql, $conn) or die ("location: product data get list array error : ".mysql_error());
        return mysql_fetch_array($resultOfvalue);
    }

    public function addcategory( $conn, $obj ){

    }

    public function delcategory( $conn, $obj ){}
    public function addcolumn( $conn, $obj ){
        $resultOfvalue = 0;
        $sql = "alter table ".$this->table_name;
        foreach($obj as $col => $type){
            $sql.= " add column ".$col." ".$type;
        }
        $resultOfvalue = mysql_query($sql, $conn) or die ("location: product add column error : ".mysql_error());
        return $resultOfvalue;
    }

    // 테이블 컬럼 삭제
    public function delcolumn( $conn, $obj ){
        $resultOfvalue = 0;
        $sql = "alter table ".$this->table_name;
        foreach($obj as $col => $type){
            $sql.= " drop column ".$col;
        }
        $resultOfvalue = mysql_query($sql, $conn) or die ("location: product delete column error : ".mysql_error());
        return $resultOfvalue;
    }
} 