<?php
    class view extends user{

        public function showall(){
            $datas = $this->getall();
            foreach($datas as $data){
                echo '<tr>';
                echo '<td>'.$data['client_id'].'</td>';
                echo '<td>'.$data['client_name'].'</td>';
                echo '<td>'.$data['branch_id'].'</td>';

                echo '</tr>';

            }
        }

    }








    class showuserid extends Database{
        public function showuid($id){
            $id = $_POST['cid'];
            echo    "<div id='main-content'>
                    <h2>Data Of ID No : ".$id."</h2> ";
            
            
            $query = "select * from client where client_id = $id";
            $conn = $this->connect();
            $result = mysqli_query($conn,$query);
            echo "<br>";
            
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                
            
                    echo "<div class='form-group'>
                    <label>Client ID : </label>
                    <label>".$row['client_id']."</label></div>";
            
            
                echo "<div class='form-group'>
                    <label>Client Name : </label>
                    <label>".$row['client_name']."</label></div>";
            
            
                echo "<div class='form-group'>
                    <label>Branch ID : </label><br>
                    <label>".$row['branch_id']."</label> </div> " ;
                }
            }
        }
    }

class updateUserid extends DataBase{
    public function Uuid($cid,$name,$bid){
        
        
        
        $conn = $this->connect();
        
       // $query = "update client set  client_name='" . $_POST['name'] . "',branch_id='" . $_POST['bid'] . "' WHERE client_id='" . $_POST['cid'] . "'";
        $query = "update client set client_name = '$name',branch_id='$bid' where client_id= $cid ";
        //$query = "update client set values($cid,$name,$bid) where client_id = '$cid'";
       $result = mysqli_query($conn,$query);
        echo "<br>";
        
        if ($result) {
            echo    "<div id='main-content'>
                <h2>Updated Data Of ID No : ".$cid."</h2> ";
            echo "<h3>updated successfully</h3>";
          } 
        else{
            echo "failed ". mysqli_error($conn);
        }
        
        echo "<br>";
    }
}





?>