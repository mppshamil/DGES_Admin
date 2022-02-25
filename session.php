
<?php
include('db_connect.php');
session_start();
$loginst = 0;
if ($_SESSION['login_user']){ 

        $user_check = $_SESSION['login_user'];

        $ses_sql = mysqli_query($conn,"select * from tbl_admin_mgt where email = '$user_check' ");

        $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

        $name = $row['Name'];







if(!empty($name)) 
{
   $loginst = 1;
  
}



}
if(!isset($_SESSION['login_user'])){
    header("location:index.php");
    die();
    
}
?>
