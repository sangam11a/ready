<?php 
include_once "../classes/dbh.class.php";
class Dynamic extends Dbh {
    private $host = "localhost";
    private $user = "thapasan_sangam11";
    private $pwd = "S@ng@m865421";
    private $dbName = "thapasan_hotel_eternity";
    public function own_query($sql){
        $statement=$this->connect()->query($sql);
        $result=$statement->fetchAll();
         return $result;
    }
    public function total_rows($table_name,$param="*",$condition=""){
        $sql="Select $param from $table_name $condition";
        // echo $sql;
        $statement=$this->connect()->query($sql);
        $result=$statement->fetchAll();
        if($param=="count(*)") {
            return $result[0]['count(*)'];
        }
        else return $result;
    }
    
} 