<?php
if (isset($_POST['submit'])){
    
    $date_c=$_POST['d'];
     $age_e=$_POST['a'];
     $poids=$_POST['p'];
     $obs=$_POST['o'];
     $pro_rdv=$_POST['r'];
    require_once('conn.php');
    $sel=mysqli_query($conn,"SELECT * FROM medecin ORDER BY id DESC LIMIT 1");
    if(mysqli_num_rows($sel)>0){
        while($row=mysqli_fetch_assoc($sel)){
            $id=$row["id"];
        }
    }
    $sel=mysqli_query($conn,"SELECT * FROM enfant ORDER BY id_e DESC LIMIT 1");
    if(mysqli_num_rows($sel)>0){
        while($row=mysqli_fetch_assoc($sel)){
            $id_e=$row["id_e"];
        }
    }
    
       $ins=mysqli_query($conn,"INSERT INTO consultation VALUES('','$id','$id_e','$date_c','$age_e','$poids','$obs','$pro_rdv')");
        header("location:analyse_form.php");
    }
    


?>