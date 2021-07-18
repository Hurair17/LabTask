<?php include 'header.php';


    if(isset($_POST['delete'])){
    //if(null !== 'delete'){

        include 'connOop.php';

        $sid = $_POST['sid'];
        $del = new deleteUser();
        $del->duser($sid);
    }



    ?>


<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="delete" value="Delete" />
    </form>
</div>
</div>


</body>
</html>
