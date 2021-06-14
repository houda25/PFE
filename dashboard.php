<?php
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
    <div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>WELCOME TO US!  ORDER NOW </p>
        <p><a href="menu.php">Go to menu</a></p>
        <p><a href="logout.php">Logout</a></p>
    </div>
</body>
</html>

<style>
     html{
        margin:0px;
	padding:0px;
	background-image:url(images/rotate.gif);
	background-size:cover;
			background-repeat:no-repeat;
			background-attachment:fixed;}        
</style>


