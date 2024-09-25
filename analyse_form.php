<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les Analyses</title>
    <link rel="stylesheet" href="./stylep.css">
</head>

<body>
    <div class="main">
        <div class="content">
            <form action="analyse.php" method="POST">
                <label for="chk" aria-hidden="true"> Entrez les analyses du l'enfant : </label> Date :<input type="date" name="d" placeholder="Date" required="">
                <input type="text" name="p" placeholder="Protenierie" required="">
                <input type="text" name="c" placeholder=" Creatine" required="">

                <br>

                <button type="submit" name="submit">Entrez Les Analyses</button>
            </form>
        </div>
    </div>
</body>

</html>