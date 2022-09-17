@extends('layout_rh')
@section('title','liste candidat disponible')
@section('content')
@php
     $count =count($fav);
@endphp
@foreach ($candidats as $c)
@for ($i = 0; $i < $count; $i++)
@if ($c->id == $fav[$i])
@foreach ($profil as $p)
@if ($c->id_profil == $p->id)
<div class="container-fluid">
    <div id="travel" class="traveling">
      <div class="container">
         <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="traveling-box">
                   <i><img style="height:150px " src="{{asset('storage/imgProfil/'.$p->image_profil)}}" /></i>
                   <h6><b> {{ $p->nom.' '.$p->prenom }}</b></h6>

               {{$p->age}} ans  </p><br>

                   <form action="{{route("candidat.profile",$p->id)}}" method="GET">
                       @csrf

                           <input type="submit" value="show  " class="btn btn-outline-success">

                       </form>

           <br><br>



@endif
@endforeach
                    </div></div>
@endif
  @endfor
                   @endforeach

  @endsection
