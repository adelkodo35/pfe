@extends("layout_admin")
@section("title","update moderateur")

@section("content")
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">


        <div class="p-5"style="left: 300px;
        position: relative;" >
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">update moderateur</h1>

            </div>
            <form class="user" action="{{route('moderateur.update', $moderateur->id)}}" method="POST">
                @csrf
                @method("PUT")
                <div class="form-group row">
                    <div class="col-sm-12 mb-3 mb-sm-0">
                        <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Nom de utilisateur" name="nom_utilisateur" value="{{$moderateur->nom_utilisateur}}">

                    </div>

                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="mot de passe" name="mot_passe">

                    </div>
                    <div class="col-sm-6">
                        <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Confirmer mot de passe" name="mot_passe_confirmation">
                    </div>
                </div>

                <input type="submit" value="update"   class="btn btn-primary btn-user btn-block">


            </form>
            <br>

            <br>
            <div class="erour" > @error("nom_utilisateur")  {{$message}}  @enderror </div>
            <br>
<div class="erour" > @error("mot_passe")  {{$message}}  @enderror </div>
        </div>



    </div>
@endsection

