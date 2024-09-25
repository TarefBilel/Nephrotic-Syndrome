<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Inscription / Connecter </title>
    <link rel="stylesheet" href="./style.css">

</head>

<body>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Slide Navbar</title>
        <link rel="stylesheet" type="text/css" href="slide navbar style.css">
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    </head>

    <body>
        <div class="main">
            <input type="checkbox" id="chk" aria-hidden="true">

            <div class="signup">
                <form action="ins_doc.php" method="POST">
                    <label for="chk" aria-hidden="true">Inscription</label>
                    <input type="text" name="n" placeholder="Nom" required="">
                    <input type="text" name="p" placeholder="Prenom" required="">
                    <input type="tel" name="t" placeholder="Telephone" required="">
                    <input type="email" name="e" placeholder="Email" required="">
                    <input type="password" name="s" placeholder="Password" required="">
                    <button type="submit" name="submit">Inscription</button>
                </form>
            </div>

            <div class="login">
                <form action="con_doc.php" method="POST">
                    <label for="chk" aria-hidden="true">Connecter</label>
                    <input type="email" name="e" placeholder="Email" required="">
                    <input type="password" name="p" placeholder="Password" required="">
                    <button type="submit" name="submit">Connecter</button>
                </form>
            </div>
        </div>
    </body>
</html>