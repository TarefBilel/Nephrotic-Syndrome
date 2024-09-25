<?php 
include_once('conn.php'); 
$query="SELECT * FROM enfant"; 
$result=mysqli_query($conn,$query); 
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
<body class="main">
    <section>
    <h1>tous les patient</h1>
  <div class="tbl-header">
  <table cellpadding="0" cellspacing="0" border="0">
        <thead>
	<tr> 
		</tr>
			  <th> nom </th> 
			  <th> prenom </th> 
              <th> date naissance </th>
              <th> Sexe </th>
              <th></th>
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
        <td><?php echo $rows['nom']; ?></td> 
		<td><?php echo $rows['Prenom']; ?></td>
        <td><?php echo $rows['date_n']; ?></td> 
		<td><?php echo $rows['sexe']; ?></td> 
        <td><button class="cn"><a href="list_traitement.php?id=<?php echo $rows['id_e'];?>">traitement</a></button></td>
		</tr> 
	<?php 
               } 
          ?> 
        </tbody>
        </table>
  </div>
</section>

</body>
</html>