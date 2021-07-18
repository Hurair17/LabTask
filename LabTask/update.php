<?php 
    include 'header.php';
    include 'connOop.php';
    include 'extraOop.php';

    
 ?>
<div id="main-content">
    <h2>Edit Record</h2>
    <form class="post-form" action="" method="post">
        <div class="form-group">
            <label>Client Id</label>
            <input type="number" name="cid" />
        </div>
        <input class="submit" type="submit" name="show" value="Show" />
    </form>
<?php
if(isset($_POST['show']))
    {
    include 'showOop.php'; 
        

        $uid = $_POST['cid'];

        $suid = new showuserid();
        $suid->showuid($uid);
        
    }

?>



    <form class="post-form" action="" method="post">

        <div class="form-group">
            <label>Client ID</label>
            <input type="number" name="cid"  />
        </div>
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name"  />
        </div>
        <div class="form-group">
            <label>Branch ID</label>
            <select name="class">
                <option  selected disabled>Select Branch</option>
                
                    <?php $bid = new showbranchid();
                        $bid -> showbid();
                    ?>
                
                   
         
            </select>
        </div>
    <input class="submit" type="submit" name="update"  />
    </form>


    <?php
if(isset($_POST['update']))
    {
        include 'showOop.php';

        $uid = $_POST['cid'];
        $name = $_POST['name'];
        $class =$_POST['class'];

        $suid = new updateUserid();
        $suid->Uuid($uid,$name,$class);
        
    }

?>
</div>
</div>
</body>
</html>
