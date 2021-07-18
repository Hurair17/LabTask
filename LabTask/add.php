<?php include 'header.php';
include 'connOop.php';
include 'showOop.php'; 
include 'extraOop.php';

if(isset($_POST['insert'])){
    $cid = $_POST['cid'];
    $cname = $_POST['cname'];
    $bid = $_POST['class'];
    $query = "insert into client values('$cid','$cname','$bid')";

    $inuser = new insertUser();
    $inuser->iUser($cid,$cname,$bid,$query);

}

?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="#" method="post">
        <div class="form-group">
            <label>Client ID</label>
            <input type="number" name="cid" />
        </div>
        <div class="form-group">
            <label>Client Name</label>
            <input type="text" name="cname" />
        </div>
        <div class="form-group">
            <label>Branch ID</label>
            <select name="class">
                <option value="" selected disabled>Select Branch</option>
                <?php $bid = new showbranchid();
                $bid -> showbid();
                ?>
         
            </select>
        </div>
        <input class="submit" type="submit" value="Save" name="insert" />
    </form>
</div>
</div>
</body>
</html>
