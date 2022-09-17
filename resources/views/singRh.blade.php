<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title> Inscription Resource Human</title>
<!-- CSS only -->
<link rel="stylesheet" href="{{ asset("st.css") }}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">


</head>
<body  >
    <div class="container">
		<div class="row">
			<div class="col-xl-12">

				<div class="multistep-container">

					<div class="mutistep-form-area">
                        <form action="{{route('singRh.c')}}" method="post" enctype="multipart/form-data">
                            @csrf
						<!--  -->
								<div class="form-box" id="f1">

								<!--  -->
									<ul class="active-button">
										<li class="active">
											<span class="round-btn">1</span>
										</li>
										<li>
											<span class="round-btn">2</span>
										</li>
										<li>
											<span class="round-btn">3</span>
										</li>
									</ul>


										<h4>Informations personnelles</h4>


											<div class="form-group">
												<label >Nom</label>
												<input type="text" name="Nom" placeholder="Nom" value="{{@old("Nom")}}"  class="form-control">
                                                <div class="erour" >  @error("Nom")  {{$message}}  @enderror</div>
											</div>
											<div class="form-group">
												<label >Prénom</label>
												<input type="text" name="prenom"placeholder="Prénom" value="{{@old("prenom")}}" class="form-control">
                                                <div  class="erour" > @error("prenom") {{$message}}  @enderror </div>
											</div>
											<div class="form-group">
												<label >sexe</label>
												<select class="custom-select myinput" name="sexe" >
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                </select>
											</div>
											<div class="form-group">
												<label >Lieu de naissance</label><br>
                                                <input  class="form-control"   name="lieu_naissance"  type="text" placeholder="Lieu de naissance" value="{{@old("lieu_naissance")}}">
                                                <div  class="erour" > @error("lieu_naissance")  {{$message}}  @enderror </div>
											</div>



									         <div class="form-group">
												<label >Date de naissance</label><br>
                                                <input  class="form-control"  type="date" name="date_naissance" value="{{@old("date_naissance")}}">
                                                <div class="erour"  > @error("date_naissance")  {{$message}}  @enderror </div>
                                              </div>


                                              <div class="form-group">
												<label for="">Age</label><br>
                                                <input  class="form-control"  type="text" placeholder="Age" name="age" value="{{@old("age")}}">
                                             <div class="erour" > @error("age")  {{$message}}  @enderror </div>
                                              </div>
                                              <div class="form-group">
												<label for="">Adresse</label>
                                                  <input  class="form-control"  type="text" placeholder="Adresse " name="adresse" value="{{@old("adresse")}}" >
                                                <div  class="erour"> @error("adresse")  {{$message}}  @enderror </div>
                                              </div>

                                              <div class="form-group">
												<label >Téléphone</label><br>
                                                <input  class="form-control"  type="text" placeholder="Téléphone"  name="num_téléphone"value="{{@old("num_téléphone")}}">
                                                <div  class="erour" > @error("num_téléphone")  {{$message}}  @enderror </div>
                                            </div>

                                              <div class="form-group">
												<label for="">Adresse email</label>
                                                  <input  class="form-control"  type="text" placeholder="Adresse email " name="email" value="{{@old("email")}}" >
                                                <div class="erour" > @error("email")  {{$message}}  @enderror </div>
                                              </div>


											<div class="button-row">
												<input type="button" value="Next" class="next">
											</div>




								</div>
								<!--  -->

								<!--  -->
								<div class="form-box" id="f2">

								<!--  -->
									<ul class="active-button">
										<li class="active">
											<span class="round-btn">1</span>
										</li>
										<li class="active">
											<span class="round-btn">2</span>
										</li>
										<li>
											<span class="round-btn">3</span>
										</li>
									</ul>
								<!--  -->

										<h4>Diplôme</h4>


		                                        <div class="form-group">
												<label for="">Titre Diplôme</label>
                                                <input class="form-control" type="text" placeholder="Titre Diplôme" name="titre_diplome"  value="{{@old('titre_diplome')}}">
                                                <div class="erour" >  @error("titre_diplome")  {{$message}}  @enderror</div>

											</div>
											<div class="form-group">
												<label for="">Domaine Diplôme</label>
                                                <input   class="form-control" type="text" placeholder="Domaine Diplôme" name="domaine_diplome"  value="{{@old('domaine_diplome')}}">
                                                <div class="erour"   >  @error("domaine_diplome")  {{$message}}  @enderror</div>
                                               </div>
											<div class="form-group">
												<label for="">Type Diplôm</label>

                                                <input  class="form-control" type="text" placeholder="Type Diplôme" name="type_diplome"  value="{{@old('type_diplome')}}">
                                                <div class="erour" >  @error("type_diplome")  {{$message}}  @enderror</div>

                                            </div>

											<div class="form-group">
												<label for="">Ecole</label>
                                                <input class="form-control"   type="text" placeholder="Ecole" name="ecole"  value="{{@old('ecole')}}" >
                                                <div class="erour"  >  @error("ecole")  {{$message}}  @enderror</div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="">Date debut:</label>
                                                        <input class="form-control"   type="date" name="annee_debut"   value="{{@old('annee_debut')}}">
                                                        <div class="erour" >  @error("annee_debut")  {{$message}}  @enderror</div>
                                                        </div>

                                            <div class="form-group">
												<label for="">Date fin:</label>
                                                <input class="form-control"   type="date" name="annee_fin">
                                                <div class="erour" >  @error("annee_fin")  {{$message}}  @enderror</div>
                                               </div>

                                            <div class="form-group">
												<label for="">Niveau D'etude</label>
                                                <input class="form-control"   type="text" placeholder="Niveau D'etude" name="niveau_etude"  value="{{@old('niveau_etude')}}">
                                                <div class="erour" style="left: 40%" >  @error("niveau_etude")  {{$message}}  @enderror</div>

                                            </div>
                                            <div class="form-group">
												<label for="">Description</label>

                                                <input class="form-control"  type="text" placeholder="Description"  name="description">
                                            </div>
                                            <div class="form-group">
												<label >Image de Diplome:</label>
                                                <input    type="file" accept="image/*" name="image_dip" value="{{@old("image_dip")}}">
                                            <div class="erour" >  @error("image_dip")  {{$message}}  @enderror</div>
                                            </div>


											<div class="button-row">
												<input type="button" value="Previous" class="previous">
												<input type="button" value="Next" class="Next">
											</div>



								</div>

								<div class="form-box" id="f3">


								<!--  -->
									<ul class="active-button">
										<li class="active">
											<span class="round-btn">1</span>
										</li>
										<li class="active">
											<span class="round-btn">2</span>
										</li>
										<li class="active">
											<span class="round-btn">3</span>
										</li>
									</ul>
								<!--  -->

										<h4>Login Detail</h4>

											<div class="form-group">
												<label>Nom Utilisateur</label>
                                                <input class="form-control"   type="text" placeholder="Nom Utilisateur" name="nom_utilisateur" value="{{@old("nom_utilisateur")}}">
                                                <div class="erour" > @error("nom_utilisateur")  {{$message}}  @enderror </div>
                                               </div>

											<div class='form-group'>
												<label >Mot de passe</label>
                                                <input class="form-control"   type="password" placeholder="Mot de passe" name="mot_passe" >
                                                <div class="erour"  style="left: 40%"> @error("mot_passe")  {{$message}}  @enderror </div>
                                                  </div>
                                                  <div class="from-group">
                                                    <label for="">Confirmer Mot de passe</label>
                                                    <input class="form-control" type="password" placeholder="Confirmer Mot de passe" name="mot_passe_confirmation">
                                                    <div class="erour"   > @error("mot_passe_confirmation")  {{$message}}  @enderror </div>
                                                  </div>

											<div class="form-group">
												<label for="">Image de profile :</label>
                                                <input class="form-control"  type="file" accept="image/*" name="image_profil" value="{{@old("image_profil")}}" >
                                                <div class="erour"   > @error("image_profil")  {{$message}}  @enderror </div>
                                              </div>


											<div class="button-row">
												<input type="button" value="Previous" class="Previous">
												<input type="submit" value="Submit" class="submit">
											</div>



								</div>
								<!--  -->
                        </form>
                            </div>

				</div>

			</div>
		</div>
	</div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="{{asset('sc.js')}}" ></script>
</body>
</html>
