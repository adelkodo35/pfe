@extends("layout_rh")
@section("title","liste favorite")
@section("content")

<h1 class="h4 text-gray-900 mb-4">Ajouter  une list favorite</h1>

<form class="user" action="{{route("Liste.store")}}" method="POST">
    @csrf
    <div class="form-group row">
         <input type="text" class="form-control form-control-user"  placeholder="titre liste" name="titre_liste" >




    <input type="submit" value="ajouter"   class="btn btn-primary btn-user btn-block">

    </div>


</form>

@endsection
