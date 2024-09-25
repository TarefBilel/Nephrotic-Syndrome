<?php
if (isset($_POST['submit'])){
$nom=$_POST['n'];
$prenom=$_POST['p'];
$telephone=$_POST['t'];
$email=$_POST['e'];
$password=$_POST['s'];
 
require_once('conn.php');

$test= mysqli_query($conn, " SELECT * FROM medecin WHERE email='$email' OR password ='$password' ");
if (mysqli_num_rows($test)>0 ){
    echo" <script> alert('email ou password existe deja'); </script>" ;
    
}
else {
    $ins=mysqli_query($conn,"INSERT INTO medecin VALUES('','$nom','$prenom','','$telephone','$email','$password')");
    header("location:ins_doc.php");
}
}


?>