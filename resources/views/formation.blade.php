
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

<h3 class="into" style="left:40%;top: 1%;">Diplôme </h3>
<div class="prog"></div>
<div class="prog" id="prog" style="background-color: rgba(0, 101, 101, 100); width: 10%; transition-delay: 100ms; "></div>
  <div class="balle" style="left: 32%; background-color: rgba(0, 101, 101, 100);"><img  src="img/info.png" ></div><h3 class="into"style="font-size: 12px;top: 16%;left: 30%;" > Personnelles </h3>
  <div class="balle" style="left: 42%;"><img class="img" style="width:30px; " src="img/fv.png" ></div><h3 class="into" style="font-size: 12px;top: 16%;left: 41%;"> Diplôme </h3>
  <div class="balle" style="left: 52%;"><img id="img3"  style="width:30px ; "  src="img/exv.png" ></div><h3 class="into" style="font-size: 12px;top: 16%;left: 51%;"> Expérience </h3>
  <div class="balle" style="left: 62%;"><img id="img4" style="width:30px  ; "  src="img/xv.png" ></div><h3 class="into" style="font-size: 12px;top: 16%;left: 60%;">Compétence</h3>

<form  style="height: 80%;" id="dip" class="blankc" action="formation.create" method="post" enctype="multipart/form-data">
    @csrf

    <input  class="inc"  type="text" placeholder="Titre Diplôme" name="titre_diplome"  value="{{@old('titre_diplome')}}">
    <div class="erour" >  @error("titre_diplome")  {{$message}}  @enderror</div>
    <input   class="inc" type="text" placeholder="Domaine Diplôme" name="domaine_diplome"  value="{{@old('domaine_diplome')}}">
    <div class="erour"  style="left: 40%" >  @error("domaine_diplome")  {{$message}}  @enderror</div>
    <input   class="inc" type="text" placeholder="Type Diplôme" name="type_diplome"  value="{{@old('type_diplome')}}">
    <div class="erour" >  @error("type_diplome")  {{$message}}  @enderror</div>
    <input class="inc"   type="text" placeholder="Ecole" name="ecole"  value="{{@old('ecole')}}" >
    <div class="erour"  style="left: 40%">  @error("ecole")  {{$message}}  @enderror</div>
    <input class="inc"   type="date" name="annee_debut"   value="{{@old('annee_debut')}}">
    <div class="erour" >  @error("annee_debut")  {{$message}}  @enderror</div>
    <label class="lab" style="position: absolute;
    top: 50%;
    left: -44%;
    " >Date debut:</label>
    <input class="inc"   type="text" placeholder="Niveau D'etude" name="niveau_etude"  value="{{@old('niveau_etude')}}">
    <div class="erour" style="left: 40%" >  @error("niveau_etude")  {{$message}}  @enderror</div>

    <label class="lab" style="position: absolute;
    top: 66%;
    left: -44%;
    " >Date fin:</label>
    <input class="inc"   type="date" name="annee_fin">
    <div class="erour" >  @error("annee_fin")  {{$message}}  @enderror</div>
    <input class="inc"   type="text" placeholder="Description"  name="description">
    <label class="lab" style="  top: 82%; left: -44%;" >Image de Diplome:</label>
    <input class="inc"  style=" top: 65%;left: 7%; position: absolute;"  type="file"  accept="image/*" name="image_dip">
    <div class="erour"  style="top: 94%" >  @error("image_dip")  {{$message}}  @enderror</div>

    </div>
    <button style="   top: 80%;
  left: 14%;
  position: absolute;" class="st" type="submit" >suivant</button>

    <a style=" top: 80%;
  left: 59%;
  position: absolute;text-decoration: none;
block-size: 5%;
padding-block: 10px;" class="st"   href="{{route("login.show")}}" >ignorer</a>
</form>


</body>


</html>
