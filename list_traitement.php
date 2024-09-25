<?php 
include_once('conn.php'); 
 $currentid;
$currentid = intval($_GET['id']);
$query_patient="SELECT * FROM enfant WHERE (id_e=$currentid)";
$query="SELECT * FROM psologie
JOIN consultation
ON consultation.id_c = psologie.id_c
JOIN enfant
ON enfant.id_e = consultation.id_e WHERE(enfant.id_e=$currentid);";
$result=mysqli_query($conn,$query); 
$result_patient=mysqli_query($conn,$query_patient);
$patientdata=mysqli_fetch_assoc($result_patient);
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style4.css">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>
<section>
    <div class="flex-container">
        <div class="flex-child">
            <div><h2>Nom: <h4><?php echo $patientdata['nom']; ?></h4> </h2></div> 
            <div><h2>Prenom: <h4><?php echo $patientdata['Prenom']; ?></h4> </h2></div> 
            <div><h2>Date de naissance: <h4><?php echo $patientdata['date_n']; ?></h4> </h2></div> 
            <div><h2>Sexe: <h4><?php echo $patientdata['sexe']; ?></h4> </h2></div>     
        </div>
        <div class="float-child">
        <div><h2>Parent: <h4><?php $idm=$patientdata['id_p'];$querym="SELECT Prenom,lien_P,telephone FROM parent WHERE(id_p = $idm);"; $med=mysqli_query($conn,$querym); $par=mysqli_fetch_assoc($med); echo $par['Prenom']; ?></h4> </h2></div> 
            <div><h2>Lien Parent: <h4><?php echo $par['lien_P']; ?></h4> </h2></div> 
            <div><h2>Tel: <h4><?php echo $par['telephone']; ?></h4> </h2></div>  
        </div>
    </div>
</section>
        </li>
        <li>

<section>
  <div class="tbl-header">
  <table cellpadding="0" cellspacing="0" border="0">
        <thead>
	<tr> 
		</tr>
			  <th> medicament </th> 
			  <th> dose </th> 
              <th> repitition </th>
              <th> date_d </th>
              <th> date_f </th>
		</tr> 
		</thead>
        </table>
        </div>
        <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
        <tbody>
		<?php while($rows=mysqli_fetch_assoc($result)) 
		{ 
		?> 
		<tr> 
        <td><?php $idm=$rows['id_med'];$querym="SELECT nom FROM medicament WHERE(id_med = $idm);"; $med=mysqli_query($conn,$querym); $nom_m=mysqli_fetch_assoc($med); echo $nom_m['nom']; ?></td> 
		<td><?php echo $rows['dose']; ?></td>
        <td><?php echo $rows['repitition']; ?></td> 
		<td><?php echo $rows['date_d']; ?></td> 
        <td><?php echo $rows['date_f']; ?></td> 
        <?php $idc=$rows['id_c']; ?>
		</tr> 
	<?php 
               } 
          ?> 
        </tbody>
        </table>
  </div>
</section>
        </li>
        <li align="center">
        <button class="cn"><a href="ajoute_traitement_form.php?idm=<?php echo $idm;?>&idc=<?php echo $idc;?>">Ajouter un nouveau traitement</a></button>
        </li>

    </ul>

</body>
</html>