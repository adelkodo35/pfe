<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title> Inscription Recruteur</title>
    <script src="https://use.fontawesome.com/3a2eaf6206.js"></script>
    <link href="css/style.css" rel="stylesheet">
</head>
<body class="body2" >
    <img class="logo1" src="img/logo.png" alt="logo"  >

<form  class="blank" action="{{route("singR.create")}}" method="post"  enctype="multipart/form-data">
    @csrf
<h3 class="into">Inscription Recruteur </h3>
<input  class="in"  type="text" placeholder="Nom Entreprise " name="entreprise">
    <div class="erour"  style="margin-left: 11%;
  margin-top: 15%;"  > @error("entreprise")  {{$message}}  @enderror </div>
    <input class="in"  type="text" placeholder="type entreprise " name="type_entreprise">
    <div class="erour" style="margin-left: 55%;
  margin-top: 15%;
"  > @error("type_entreprise")  {{$message}}  @enderror </div>
    <input  class="in" type="text" placeholder="pays" name="pays">

    <input class="in"   type="text" placeholder="Ville" name="Ville" >

    <input class="in"   type="text" placeholder="Rue" name="Rue">

    <input class="in"   type="text" placeholder="Région" name="Région">

 <label style="position: absolute;
 top: 56%;
 left: 20%;  font-family: font1;"   >logo  :</label>
          <input  class="in " id="inputTag" type="file"  name="image_logo" accept="image/*"   />
    <input class="in"   type="text" placeholder="Nom Utilisateur" name="nom_utilisateur">
    <div class="erour"  style="margin-left: 53%;margin-top: 15%;"  > @error("nom_utilisateur")  {{$message}}  @enderror </div>
    <input class="in"   type="password" placeholder="Mot de passe" name="mot_passe">
    <div class="erour" style="margin-left: 12%;margin-top: 15%;"  > @error("mot_passe")  {{$message}}  @enderror </div>
    <input  class="in"  type="password" placeholder="Confirmer Mot de passe" name="mot_passe_confirmation">
    <div class="erour"   > @error("mot_passe_confirmation")  {{$message}}  @enderror </div>
    <input  class="sb"  type="submit" value="ENREGISTRER" >
</form>
</div>

</body>
</html>
