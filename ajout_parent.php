<?php

if (isset($_POST['submit'])){
    $nom=$_POST['n'];
    $prenom=$_POST['p'];
    $telephone=$_POST['t'];
    $lien_parent=$_POST['l'];
    $email=$_POST['e'];
    $password=$_POST['s'];
     
    require_once('conn.php');
    
       $ins=mysqli_query($conn,"INSERT INTO parent VALUES('','$nom','$prenom','$lien_parent','$telephone','$email','$password')");
        header("location:ajout_enfant_form.php");
    }
    

?>