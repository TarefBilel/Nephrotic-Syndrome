<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desicion</title>
    <link rel="stylesheet" href="./stylep.css">
</head>

<body>
    <div class="main">
        <div class="content">
            <form action="desicion.php" method="POST">
                <label for="chk" aria-hidden="true"> Prendre une desicion  : </label>
                <input type="text" name="n" placeholder="Nom" required=""> Hospitalisation :<input type="radio" name="d" value="H"> Garder Le Malade :<input type="radio" name="d" value="G">

                <button type="submit" name="submit"> Prenez Votre Decision </button>
            </form>
</body>

</html>