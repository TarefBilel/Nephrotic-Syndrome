<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./stylep.css">
</head>

<body>
    <div class="main">
        <div class="content">
            <form action="ajout_enfant.php" method="POST">
                <label for="chk" aria-hidden="true"> Ajoutez les informations du l'enfant </label>
                <input type="text" name="n" placeholder="Nom" required="">
                <input type="text" name="p" placeholder="Prenom" required="">
                Date-Naissance :<input type="date" name="d" placeholder="Date-Naissance" required="">
                <input type="text" name="s" placeholder="Sexe" required="">


                <button type="submit" name="submit"> Ajouter</button>
            </form>
        </div>
    </div>
</body>

</html>