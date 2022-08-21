<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title> login</title>

    <!-- css stylesheets -->
    <link href="css/style.css" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
</head>
<body class="body1" >
<a href="{{route("home")}}"><i style="color: #006565 ; scale: 1.5;" class="fas fa-home"></i></a>
<div class="bla" >
    <img class="logo" src="img/logo.png" alt="logo"  >
    <h4>Se Connecter</h4>
<form action="{{route("login.verify")}}" method="post">

 @csrf
    <div class="input-item"><img class="icon" src="img/user1.png"> <input name="nom_utilisateur" id="input" type="text" placeholder="Nom Utilisateur" value="{{@old("nom_utilisateur")}}" ></div>
    <div style="color: red ;font-size: small;padding-top: 1%;" class="error">  @if(session()->get("fail1")) {{session()->get("fail1") }}@endif   @error("nom_utilisateur"){{$message}} @enderror  </div>

 <div class="input-item"><img class="icon" src="img/luck.png"><input id="input" type="password" name="mot_passe" placeholder="Mot de Passe" ></div>
    <div class="error" style="color: red;font-size: small;padding-top: 1%;"> @if(session()->get("fail2")) {{session()->get("fail2") }}@endif  @error("mot_passe"){{$message}}  @enderror  </div>
 <input class='sub'  type="submit" name="submit" value="Connecter">

</form>
</div>

</body>
</html>
