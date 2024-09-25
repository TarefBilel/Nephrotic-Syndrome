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
            <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>


            <form action="ajout_parent.php" method="POST">
                <label for="chk" aria-hidden="true">Entrez les informations du Parent</label>
                <input type="text" name="n" placeholder="Nom" required="">
                <input type="text" name="p" placeholder="Prenom" required="">
                <input type="text" name="t" placeholder="Telephone" required="">
                <input type="text" name="l" placeholder="Lien-Parent" required="">
                <input type="email" name="e" placeholder="E-mail" required="">
                <input type="password" name="s" placeholder="Password" required="">

                <button class="cn" type="submit" name="submit"> Ajouter </button>
            </form>
        </div>
</body>

</html>