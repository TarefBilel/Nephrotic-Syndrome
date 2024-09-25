<?php
session_start();
require_once("conn.php");
if (isset($_POST['submit'])){
$email=$_POST['e'];
$pass=$_POST['p'];
$sql= "SELECT * FROM medecin WHERE email='$email' AND `password`='$pass'";
$exe_sql=mysqli_query($conn,$sql);
if($rows=mysqli_num_rows($exe_sql)){
    $num=mysqli_fetch_assoc($exe_sql);
$_SESSION['AdminId']= $num['id'];
echo "<script>alert('Bienvenue Docteur') </script>";
header("location:index_consultation.php");
// header("location:ajout_parent_form.php");
}else{
    echo "<script>alert('email or password is wrong') </script>";
}

}
?>








