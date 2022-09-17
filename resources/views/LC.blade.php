@extends('layout_rh')
@section('title','liste candidat disponible')
@section('content')
                <div class="container-fluid">
                  <div id="travel" class="traveling">
                    <div class="container">
                       <div class="row">
                        @foreach ($candidats as $candidat )
                        @if ($candidat->type_profil=="candidat")


                          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                             <div class="traveling-box">
                                <i><img style="height:150px " src="{{asset('storage/imgProfil/'.$candidat->image_profil)}}" /></i>
                                <h6><b> {{ $candidat->nom.' '.$candidat->prenom }}</b></h6>
                                <p>
                                    @foreach ($diplome as $d )
                                    @if ($d->id_profil== $candidat->id)
                               {{$d->titre_diplome}}
                                    @endif
                                    @endforeach
                                {{$candidat->age}} ans  </p><br>
                                <div class="read-more">
                                    <form action="{{route("candidat.profile",$candidat->id)}}" method="GET">
                                        @csrf

                                            <input type="submit" value="show  " class="btn btn-outline-success">

                                        </form>

                              </div>
                           </div>
                        </div>

@endif
                           @endforeach


                       </div>
                    </div>
                 </div>




    </div>
  @endsection
