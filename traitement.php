<?php
if (isset($_POST['submit'])){
    
    $date_d=$_POST['date_d'];
     $date_f=$_POST['date_f'];
     $dose=$_POST['dose'];
     $rep=$_POST['rep'];
    require_once('conn.php');
    $sel=mysqli_query($conn,"SELECT * FROM consultation ORDER BY id DESC LIMIT 1");
    if(mysqli_num_rows($sel)>0){
        while($row=mysqli_fetch_assoc($sel)){
            $id_c=$row["id_c"];
        }
    }
    $sel=mysqli_query($conn,"SELECT * FROM medicament ORDER BY id_med DESC LIMIT 1");
    if(mysqli_num_rows($sel)>0){
        while($row=mysqli_fetch_assoc($sel)){
            $id_med=$row["id_med"];
        }
    }
       $ins=mysqli_query($conn,"INSERT INTO psologie VALUES('','$id_med','$id_c','$dose','$rep','$date_d','$date_f')");
        header("location:index_consultation.php");
    }
    


?>