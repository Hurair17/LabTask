<?php
class DataBase {
    private $servername;
    private $username;
    private $password;
    private $dbname;



    public function connect(){
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "company_database";

        $conn =  new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        return $conn;


    }
}


class user extends DataBase{
    public function getall(){
        
        $querry = 'select * from client';


        $result = $this->connect()->query($querry);

        $nrow = mysqli_num_rows($result);
        if($nrow>0){
            while($row = $result->fetch_assoc()){
                $data[] = $row;
            }
        return $result;

        }


    }
}


class getbranchid extends Database{
    public function getbid(){
        $querry = 'select  branch_id from branch';
        $conn = $this->connect();
        $result = mysqli_query($conn,$querry);
       
            while($row = $result->fetch_assoc()){
                $data[] = $row;
            }
        return $result;
        
    }
}

class deleteUser extends DataBase{
    public function duser($cid){
        $query = "delete from client where client_id= '$cid'";
        $conn = $this->connect();
        $result = mysqli_query($conn,$query);
        if ($result) {
            echo    "<div id='main-content'>
                <h2>Delete Data Of ID No : ".$cid."</h2> ";
            echo "<h3>Delete successfully</h3>";
          } 
        else{
            echo "failed ". mysqli_error($conn);
        }
    }
}


class insertUser extends DataBase{
    public function iUser($cid,$name,$bid,$query){
        //$query = 'insert into client client_id= "$cid",client_name=$name,branch_id=$bid';
        //$query = "insert into client values('$cid','$name','$bid')";
        $conn = $this->connect();

        $result = mysqli_query($conn,$query);
        if ($result) {
            echo    "<div id='main-content'>
                <h2>insert Data On ID No : ".$cid."</h2> ";
            echo "<h3>Insert successfully</h3>";
          } 
        else{
            echo "failed ". mysqli_error($conn);
        }
    }
}




?>