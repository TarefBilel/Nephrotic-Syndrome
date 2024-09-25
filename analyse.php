<?php
if (isset($_POST['submit'])){
    
    $date=$_POST['d'];
     $proteine=$_POST['p'];
     $creatine=$_POST['c'];
     
    require_once('conn.php');
    $sel=mysqli_query($conn,"SELECT * FROM consultation ORDER BY id_c DESC LIMIT 1");
    if(mysqli_num_rows($sel)>0){
        while($row=mysqli_fetch_assoc($sel)){
            $id_c=$row["id_c"];
        }
    }
    
       $ins=mysqli_query($conn,"INSERT INTO analyse VALUES('','$id_c','$date','$proteine','$creatine')");
        header("location:desicion_form.php");
    }
    


?>