<?php
class Database{
    //private variable can not access from outside of the class
    private $host;
    private $dbusername;
    private $dbpassword;
    private $dbname;

   //Database connection function
    protected function connect(){
        $this->host='localhost';
        $this->dbusername='root';
        $this->dbpassword='';
        $this->dbname='oop';
        $con=new mysqli($this->host,$this->dbusername,$this->dbpassword,$this->dbname);
        return $con;

    }
}
class Query extends Database{
    //Retrive the data from database
    public function getData($table,$field="*",$condition_arr="",$order_by_field="",$order_by_type="desc",$limit="50"){
        $sql="select * from $table";//query for get all the data from table
        if($condition_arr!=""){
            $sql.=" where ";
            $i=1;
            $c=count($condition_arr);
            //print_r($c);
            foreach($condition_arr as $key=> $value){
            if($i==$c){
                $sql.="$key='$value' ";
            }
            else{
                $sql.="$key='$value' and ";
            }
            $i++;
        }
        }
        if($order_by_field!=""){
            $sql.=" order by $order_by_field $order_by_type";
        }
        else{
            $sql.=" order by $order_by_field desc";
        }
        if($limit!=""){
            $sql.=" limit $limit";
        }
        //die($sql);
        $result=$this->connect()->query($sql);//connect to database with sql
        //print_r($result);
        if($result->num_rows>0){
            $arr=array();
            while($row=$result->fetch_assoc()){//Fetch a result row as an associative array
                $arr[]=$row;//strore the array in new array
                //print_r($arr);
            }
            return $arr;//return the array
        }
        else{
            return 0;
        }
    }
   
}
