@extends("layout_sous_admin")
@section("title","profile rh")
@section("content")
     {{ $profile->nom." ".$profile->prenom }}    </h1>

                                    <li class="mb-2"><a class="text-link" href="#"><i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i>{{$profile->email}}</a></li>
                                    <li><a class="text-link" href="#"><i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i>{{$profile->num_téléphone}}</a></li>










@endsection



