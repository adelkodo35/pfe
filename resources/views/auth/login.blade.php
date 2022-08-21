<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title> login</title>

    <!-- css stylesheets -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body class="body1" >
<div class="bla" >
    <img class="logo" src="img/logo.png" alt="logo"  >
    <h4>Se Connecter</h4>
<form action="/login" method="post">

 @csrf
    <div class="input-item"><img class="icon" src="img/user1.png"> <input name="user" id="input" type="text" placeholder="Nom Utilisateur" required></div>

 <div class="input-item"><img class="icon" src="img/luck.png"><input id="input" type="password" name="pass" placeholder="Mot de Passe" required></div>
 <input class='sub'  type="submit" name="submit" value="Connecter">

</form>
</div>

</body></html>
