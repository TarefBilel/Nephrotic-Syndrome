<?php
if (isset($_POST['submit'])){
    
    $nom=$_POST['n'];
    $desc=$_POST['d'];
     
    require_once('conn.php');
    $sel=mysqli_query($conn,"SELECT * FROM consultation ORDER BY id_c DESC LIMIT 1");
    if(mysqli_num_rows($sel)>0){
        while($row=mysqli_fetch_assoc($sel)){
            $id_c=$row["id_c"];
        }
    }
    
       $ins=mysqli_query($conn,"INSERT INTO desiction VALUES('','$id_c','$nom','$desc')");

       if($desc=='G'){
        header("location:medicament_form.php");
       } if($desc=='H') {
        header("location:hospitalisation.php");
       }
        
    }
    

?>