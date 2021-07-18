<?php
include 'header.php';
include 'connOop.php';
include 'showOop.php';
include 'extraOop.php';


?>
<div id="main-content">
    <h2>All Client Records</h2>
    <table cellpadding="7px">
            
        
        <thead>
        <th>Client ID</th>
        <th>Client Name</th>
        <th>Branch ID</th>
        </thead>
        <tbody>

            <?php
            $users = new view();
            $users->showall();
            ?>
    
      
        </tbody>
    </table>
    

</div>
</div>
</body>
</html>
