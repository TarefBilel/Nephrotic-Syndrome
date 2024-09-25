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
            <form action="medicament.php" method="POST">
                <label for="chk" aria-hidden="true">  Proposez-vous un medicament: </label>
                <input type="text" name="n" placeholder="Nom" required="">
                <input type="text" name="t" placeholder="Type" required="">

                <button type="submit" name="submit"> ajouter </button>
            </form>
        </div>
    </div>
</body>

</html>