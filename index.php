<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p>Welcome <?php echo $_SESSION['email']; ?>!</p>
<p>This is secure area.</p>
<p><a href="mens_list.php">Dashboard</a></p>
<a href="logout.php">Logout</a>
</div>
</body>
</html>