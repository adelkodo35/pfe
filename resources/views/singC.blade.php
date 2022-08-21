<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title> Inscription Candidat</title>
    <script type="text/javascript" src="js/script.js"></script>
    <!-- css stylesheets -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body class="body4" >
  <nav><img id="logo" src="img/logo-smal.png"></nav>

<h3 class="into" style="left:40%;top: 1%;">Informations personnelles </h3>
<div class="prog"></div>
<div class="prog" id="prog" style="background-color: rgba(0, 101, 101, 100); width: 80px; transition-delay: 100ms; "></div>
<div class="balle" style="left: 32%; background-color: rgba(0, 101, 101, 100);"><img  src="img/info.png" ></div><h3 class="into"style="font-size: 12px;top: 16%;left: 30%;" > Personnelles </h3>
<div class="balle" style="left: 42%;"><img class="img" style="width:30px; " src="img/fv.png" ></div><h3 class="into" style="font-size: 12px;top: 16%;left: 41%;"> Diplôme </h3>
<div class="balle" style="left: 52%;"><img id="img3"  style="width:30px ; "  src="img/exv.png" ></div><h3 class="into" style="font-size: 12px;top: 16%;left: 51%;"> Expérience </h3>
<div class="balle" style="left: 62%;"><img id="img4" style="width:30px  ; "  src="img/xv.png" ></div><h3 class="into" style="font-size: 12px;top: 16%;left: 60%;">Compétence</h3>
<form style="height: 100%;" class="blankc" action="{{route("create")}}" method="post" enctype="multipart/form-data">
 @csrf


    <input id="x" class="inc"  type="text" name="Nom"  placeholder="Nom" value="{{@old("Nom")}}">
    <div class="erour" >  @error("Nom")  {{$message}}  @enderror</div>
    <input id="x"  class="inc" type="text" name="prenom" placeholder="Prénom" value="{{@old("prenom")}}" >
    <div class="erour" style="left: 40% ; "> @error("prenom") {{$message}}  @enderror </div>
    <input id="x" class="inc"  name="lieu_naissance"  type="text" placeholder="Lieu de naissance" value="{{@old("lieu_naissance")}}">
  <div class="erour" > @error("lieu_naissance")  {{$message}}  @enderror </div>
   <label class="lab" >Civilité :</label>
    <select class="inc" name="sexe"  >
        <option  value="mal">Mme</option>
        <option value="femelle">Mr</option>
      </select>
    <input class="inc"   type="text" placeholder="Téléphone"  name="num_téléphone"value="{{@old("num_téléphone")}}">
    <div class="erour" > @error("num_téléphone")  {{$message}}  @enderror </div>
     <label class="lab" >Date de naissance :</label>
      <input class="inc"   type="date" name="date_naissance" value="{{@old("date_naissance")}}">
    <div class="erour"  style="left: 40%" > @error("date_naissance")  {{$message}}  @enderror </div>
       <input class="inc"   type="text" placeholder="Age" name="age" value="{{@old("age")}}">
    <div class="erour" > @error("age")  {{$message}}  @enderror </div>
      <input class="inc"   type="text" placeholder="Adresse " name="adresse" value="{{@old("adresse")}}" >
    <div class="erour"  style="left: 40%" > @error("adresse")  {{$message}}  @enderror </div>
    <input class="inc"   type="text" placeholder="Adresse e-mail" name="email" value="{{@old("email")}}">
    <div class="erour" style="margin-top:-7%" > @error("email")  {{$message}}  @enderror </div>
    <label class="lab" >image de profile :</label>
    <input id="x" class="inc"  type="file" accept="image/*" name="image_profil" value="{{@old("image_profil")}}" >
    <div class="erour"  style="left: 40%" > @error("image_profil")  {{$message}}  @enderror </div>
    <input class="inc"   type="text" placeholder="Nom Utilisateur" name="nom_utilisateur" value="{{@old("nom_utilisateur")}}">
    <div class="erour" > @error("nom_utilisateur")  {{$message}}  @enderror </div>
    <input class="inc"   type="password" placeholder="Mot de passe" name="mot_passe" >
    <div class="erour"  style="left: 40%"> @error("mot_passe")  {{$message}}  @enderror </div>
    <input style="left: -9%;
    position: relative;  "
    class="inc"  type="password" placeholder="Confirmer Mot de passe" name="mot_passe_confirmation">
    <div class="erour"   > @error("mot_passe_confirmation")  {{$message}}  @enderror </div>
    <input type="hidden" value="candidat" name="type_profile" >
    <input type="hidden" value="candidat" name="type" >
  </div>
    <button type="submit" class="st"  >suivant</button>

</form>


</body>


</html>
