<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en"></html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<div >
<body style="background-image: url('bg.jpg'); background-repeat: no-repeat; background-attachment: fixed;background-size: cover; text-align: center;padding-top: 50px;">
    <?php echo "<h1 style='align-items: center; color: #4ef500; opacity :.7;'>Welcome " . $_SESSION['username'] . "</h1>"; ?>
    <h3></h3><a href="logout.php" style="color: #00ccff;" >Logout</a></h3>
</body>
</div>
</html>