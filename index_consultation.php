<?php 
include_once('conn.php'); 
$query="SELECT par.prenom,enf.nom,enf.prenom,enf.date_n,enf.sexe FROM enfant AS enf LEFT JOIN parent AS par ON enf.id_p=par.id_p"; 
$result=mysqli_query($conn,$query); 
?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style1.css">
</head>

<body>
    
    <div class="main">
        <div class="navbar">
            <div class="menu">
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="#">Déconnexion</a></li>
                    <!-- <li class="content"><button class="cn"><a href="consultation_form.php">Premiere Consultation</a></button></li>
                    <li class="content"><button class="cn"><a href="#">Pas la premiere</a></button></li> -->
                </ul>

                <div class="content">
                    <br><br><br><br><br><br><br><br>
                    <h1> Bienvenue <br><span>Docteur</span></h1>
                    <br><br>
                    <button class="cn"><a href="ajout_parent_form.php">Premiere Consultation</a></button>
                    <br><br> <button class="cn"><a href="list_patient.php">Liste des patients</a></button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>

</html>