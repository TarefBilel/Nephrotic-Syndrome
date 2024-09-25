<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./stylep.css">
    <title>Document</title>
</head>
<body>
<div class="main">
        <div class="content">
            <form action="traitement.php" method="POST">
                <label for="chk" aria-hidden="true"> Ajoutez un nouveau traitement   </label> Traitement :
                <input type="date" name="date_d" placeholder="Date-De-Debut" required="">
                <input type="date" name="date_f" placeholder="Date-De-Fin" required="">
                <input type="number" name="dose" placeholder="Dose" required="">
                <input type="number" name="rep" placeholder="Repittion" required="">
                <button type="submit" name="submit"> Ajouter</button>
            </form>
        </div>
    </div>
</body>
</html>