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
            <form action="consultation.php" method="POST">
                <label for="chk" aria-hidden="true"> Ajoutez une Consultation   </label> Consultation :
                <input type="date" name="d" placeholder="Date-De-Consultation" required="">
                <input type="number" name="a" placeholder="Age-Enfant" required="">
                <input type="number" name="p" placeholder="Poids-De-l'enfant" required="">
                <input type="text" name="o" placeholder="Observation" required=""> Rendez-vous :
                <input type="date" name="r" placeholder="Prochain Rendez-vous" required="">
                <button type="submit" name="submit"> Ajouter</button>
            </form>
        </div>
    </div>
</body>

</html>