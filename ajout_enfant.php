<?php
if (isset($_POST['submit'])){
    $nom=$_POST['n'];
    $prenom=$_POST['p'];
    $date_n=$_POST['d'];
     
     $sexe=$_POST['s'];
    require_once('conn.php');
    $sel=mysqli_query($conn,"SELECT * FROM parent ORDER BY id_p DESC LIMIT 1");
    if(mysqli_num_rows($sel)>0){
        while($row=mysqli_fetch_assoc($sel)){
            $id_p=$row["id_p"];
        }
    }
     
       $ins=mysqli_query($conn,"INSERT INTO enfant VALUES('','$id_p','$nom','$prenom','$date_n','$sexe')");
        header("location:consultation_form.php");
    }
    

?>