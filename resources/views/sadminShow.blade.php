@extends("layout_admin")
@section("title",$admin->nom_utilisateur)
@section("content")

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">History of sous admin</h1>

</div>


    nom_utilisateur :{{$admin->nom_utilisateur}}


<br>
     etat :

    @if ( $admin->etat==1 )
active
@else
desactive
@endif




@endsection

