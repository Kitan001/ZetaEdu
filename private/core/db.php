<?php

class Database {
    private function connect() {
        $string = DBDriver.":host=".HOST.";dbname=".DBName;
        if(!$con = new PDO($string, DBUser, DBpswrd)){
            die("Could Not Connect to database");
        }
        return $con;
    }
    public function query($query, $data=array(), $data_type="object"){

        $con = $this->connect();
        $stm = $con->prepare($query );
        if($stm){
            $check = $stm->execute($data);
            if($check){
                if($data_type == "object"){
                    $data= $stm->fetchAll(PDO::FETCH_OBJ);
                }else{
                    $data= $stm->fetchAll(PDO::FETCH_ASSOC);
                }
                if(is_array($data) && count($data) >0){
                    return $data;
                }
            }
        }
        return false;
    }
 
}

?>