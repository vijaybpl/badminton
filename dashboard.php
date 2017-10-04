<?php 
error_reporting(0);
    require('db.php');
    include("auth.php");
?>
<?php
// create a variable
$can_name=$_SESSION['name'];
$user_email = $_SESSION['email'];
$number=$_SESSION['num'];
$partner_email=$_SESSION['partner_email'];

// $email = $_POST['email'];
// if($partner_email != "") {
//     $result = mysql_query("SELECT * FROM matchdetails where partner_email='".$partner_email."'");
//     $num_rows = mysql_num_rows($result);
//     if($num_rows >= 1){
//         echo "email exist";
//     }else{
//         $sql = mysql_query ("INSERT INTO matchdetails (partner_email) VALUES ('$partner_email')");
//         echo "Thank you for Submitting. Redirecting back to Home Page";
//     }
// }



//Execute the query

/**************************/
if(trim($_POST['mens_sin'])!="")
{
    $user_own_email = $user_email;
    $cat = 'mens_sin';//array_key();
    $partner_email ="";
    $sql_query ="INSERT INTO matchdetails(user_email,category,partner_email) VALUES('$user_own_email','$cat','$partner_email')";
mysqli_query($con,$sql_query); 
}
/**************************/


/**************************/
if(trim($_POST['mens_dou'])!="")
{
    $user_own_email = $user_email;
    $cat1 = 'mens_dou';//array_key();
    $partner_email =$_POST['mens_dou_em'];
    $sql_query ="INSERT INTO matchdetails(user_email,category,partner_email) VALUES('$user_own_email','$cat1','$partner_email')";
mysqli_query($con,$sql_query); 
}
/**************************/


/**************************/
if(trim($_POST['mens_mix'])!="")
{
    $user_own_email = $user_email;
    $cat2 = 'mens_mix';//array_key();
    $partner_email =$_POST['mens_mix_em'];
    $sql_query ="INSERT INTO matchdetails(user_email,category,partner_email) VALUES('$user_own_email','$cat2','$partner_email')";
mysqli_query($con,$sql_query); 
}
/**************************/

// Retreiving data

$sql_query = "SELECT * FROM matchdetails";
$result = mysqli_query($con, $sql_query);

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" />
    <style type="text/css">
    form {
        margin: 0 auto;
        width: 60%;
    }
    </style>
</head>
<body>
    <div class="container">

        <h2>Match Details</h2>
        <table class="table table-bordered">
            <thead>
              <tr>
                <th>Email</th>
                <th>Category</th>
                <th>Partner Email</th>
              </tr>
            </thead>
        <tbody>
        <?php
            while($row=mysqli_fetch_array($result)){ ?>
          <tr>
            <td><?php echo $row['user_email']; ?></td>
            <td><?php echo $row['category']; ?></td>
            <td><?php echo $row['partner_email']; ?></td>
          </tr>
        <?php } ?>
        </tbody>
        </table>
        <a href="index.php" class="btn btn-primary">Go to Home</a>

    </div>
<script src="https://code.jquery.com/jquery-3.2.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
