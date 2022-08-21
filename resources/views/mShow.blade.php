@extends("layout_admin")
@section("title",$moderateur->nom_utilisateur)
@section("content")

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">History of moderateur </h1>

</div>


    nom_utilisateur :{{$moderateur->nom_utilisateur}}


<br>
     etat :

    @if ( $moderateur->etat==1 )
active
@else
desactive
@endif




@endsection

