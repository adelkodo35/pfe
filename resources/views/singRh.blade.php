<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title> Inscription Resource Human</title>

    <!-- css stylesheets -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body class="body3" >
    <img class="logo1" src="img/logo.png" alt="logo"  >

<form  class="blank" action="{{route("singRh.c")}}" method="post">
    @csrf
    <h3 class="into" style="left: 30%;">Inscription Ressources Humaines </h3>

    <input class="in"  type="text"  name="Nom"  placeholder="Nom" value="{{@old("Nom")}}" >
    <div class="erour1" >  @error("Nom")  {{$message}}  @enderror</div>
    <input   class="in" type="text" name="prenom" placeholder="Prénom" value="{{@old("prenom")}}" >
    <div class="erour1" style="left: 40% ; "> @error("prenom") {{$message}}  @enderror </div>
    <select class="in" name="sexe" >
        <option  value="mal">Mme</option>
        <option value="femelle">Mr</option>
      </select>
    <input class="in"   type="text" placeholder="Téléphone"  name="num_téléphone"value="{{@old("num_téléphone")}}">
    <div class="erour1"style="left: 40%"> @error("num_téléphone")  {{$message}}  @enderror </div>
    <input class="in"   type="text" placeholder="Adresse e-mail" name="email" value="{{@old("email")}}">
    <div class="erour1"  > @error("email")  {{$message}}  @enderror </div>

    <input class="in"   type="text" placeholder="Nom Utilisateur" name="nom_utilisateur" value="{{@old("nom_utilisateur")}}">
    <div class="erour1" style="left: 40%" > @error("nom_utilisateur")  {{$message}}  @enderror </div>
    <input class="in"   type="password" placeholder="Mot de passe" name="mot_passe" >
    <div class="erour1"  > @error("mot_passe")  {{$message}}  @enderror </div>
    <input class="in"  type="password" placeholder="Confirmer Mot de passe" name="mot_passe_confirmation">
    <input  class="sb"  type="submit" value="ENREGISTRER" >
        <a class="sb" style="padding: 1em 6em" >PLUS</a>
</form>
</div>

</body>
</html>
