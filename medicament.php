<?php
if (isset($_POST['submit'])){
    
    $nom=$_POST['n'];
    $type=$_POST['t'];
     
    require_once('conn.php');
    $sel=mysqli_query($conn,"SELECT * FROM consultation ORDER BY id_c DESC LIMIT 1");
    if(mysqli_num_rows($sel)>0){
        while($row=mysqli_fetch_assoc($sel)){
            $id_c=$row["id_c"];
        }
    }
    
       $ins=mysqli_query($conn,"INSERT INTO medicament VALUES('','$id_c','$nom','$type')");
       header("location:traitement_form.php");
    }



?>