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

<h3 class="into" style="left:40%;top: 1%;">Compétence </h3>
<div class="prog"></div>
<div class="prog" id="prog" style="background-color: rgba(0, 101, 101, 100); width: 10%; transition-delay: 100ms; "></div>
<div class="balle" style="left: 32%; background-color: rgba(0, 101, 101, 100);"><img  src="img/info.png" ></div><h3 class="into"style="font-size: 12px;top: 16%;left: 30%;" > Personnelles </h3>
<div class="balle" style="left: 42%;"><img class="img" style="width:30px; " src="img/fv.png" ></div><h3 class="into" style="font-size: 12px;top: 16%;left: 41%;"> Diplôme </h3>
<div class="balle" style="left: 52%;"><img id="img3"  style="width:30px ; "  src="img/exv.png" ></div><h3 class="into" style="font-size: 12px;top: 16%;left: 51%;"> Expérience </h3>
<div class="balle" style="left: 62%;"><img id="img4" style="width:30px  ; "  src="img/xv.png" ></div><h3 class="into" style="font-size: 12px;top: 16%;left: 60%;">Compétence</h3>


<form style="height: 100%;" id="comp" class="blankc" action="competence.create" method="post" >
    @csrf
    <input  class="inc"  type="text" placeholder="compétence" name="compétence">
    <div class="erour" >  @error("compétence")  {{$message}}  @enderror</div>
    <label class="lab" >niveau compétence :</label>
    <select class="inc" name="niveau_compétence" >
        <option  value="Bien">Bien</option>
        <option value="faible">faible</option>
        <option value="moyen">moyen</option>
        <option value="Très bien">Très bien</option>
        <option value="Excellent">Excellent</option>
    </select>
    </div>
    <button class="st" type="submit" >ajouter</button>
    <button class="st" href="{{route("login")}}"   >ignorer</button>
</form>
