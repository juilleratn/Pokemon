<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="login.css">
    <title>Login dresseur 2</title>
</head>
<body>
<div class="container">


    <h1>Login dresseur 2</h1>
    <div class="Formulaire">
        <form  action="verification_d2.php" method="post">
            <input type="text" name="name_d2" placeholder="Votre login" required >
            <br>
            <input type="password" name="mdp_d2" placeholder="Votre mot de passe" required>
            <br>
            <input type="submit" name="envoie" value="Go !">
        </form>
    </div>
    <?php
    session_start();
    $_SESSION[$pokemon_d1]=$_POST[$pokemon_d1];
    ?>
</div>
</body>
</html>
