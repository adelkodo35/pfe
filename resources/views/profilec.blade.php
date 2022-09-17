@extends('layout_rh')
@section('title','profile')
@section('content')

<article class="resume-wrapper text-center position-relative">

        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="float: right">ajouter au favorite
        </button>
        <div class="dropdown-menu">
            @foreach ($List as $l )
            <form action="{{route("liste.star")}}" method="post">
                @csrf

                <button type="submit" class="dropdown-item" >{{$l->titre_liste}}</button>
<input type="hidden" name="id_profil" value="{{ $info->id}}">
<input type="hidden" name="id_list" value="{{ $l->id}}">
                </form>



           @endforeach

      </div>


    <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
        <header class="resume-header pt-4 pt-md-0">
            <div class="row">
                <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
                    <img  style="width: 215px;height: 219px;" class="picture" src="{{asset('storage/imgProfil/'.$info->image_profil)}}" >
                </div><!--//col-->
                <div class="col">
                    <div class="row p-4 justify-content-center justify-content-md-between">
                        <div class="primary-info col-auto">
                            <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase">
                                {{ $info->nom." ".$info->prenom }}    </h1>
                            <div class="title mb-3"> </div>
                            <ul class="list-unstyled">
                                <li class="mb-2"><a class="text-link" href="#"><i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i>{{$info->email}}</a></li>
                                <li><a class="text-link" href="#"><i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i>{{$info->num_téléphone}}</a></li>
                            </ul>
                        </div><!--//primary-info-->
                        <div class="secondary-info col-auto mt-2">
                            <ul class="resume-social list-unstyled">
                                <li class="mb-3">date de naissance : {{$info->date_naissance}}</li>
                                <li class="mb-3">adresse:{{$info->adresse}}</li>
                                <li class="mb-3">lieu de naissance : {{$info->lieu_naissance}}</a></li>
                                <li class="mb-3 ">age : {{$info->age}} ans</a></li>
                            </ul>
                        </div><!--//secondary-info-->
                    </div><!--//row-->

                </div><!--//col-->
            </div><!--//row-->
        </header>
        <br>
            </section><!--//summary-section-->
            <div class="row">
                <div class="col-lg-4" style="padding-left: 3%;">
                    @if($experience)                           <section class="resume-section experience-section mb-5">
                        <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">  Expérience</h2>
                        <div class="resume-section-content">
                            <div class="resume-timeline position-relative">
                                <article class="resume-timeline-item position-relative pb-3">

                                    <div class="resume-timeline-item-header mb-2">

                                            <div class="resume-position-time font-weight-bold "> post :{{$experience->titre_post}}</div>

                                        <div class="resume-position-time"><b>date début:</b>{{$experience->date_début}}</div>
                                        <div class="resume-position-time"><b>date fin :</b>{{$experience->date_fin}}</div>
                                        <div class="resume-position-time"><b>entreprise: </b>{{$experience->entreprise}}</div>
                                        <div class="resume-position-time"><b>type entrprise: </b>{{$experience->type_entrprise}}</div>
                                        <div class="resume-position-time"><b>fonction: </b>{{$experience->fonction}}</div>
                                        <div class="resume-position-time"><b>secteur_activité: </b>{{$experience->secteur_activité}}</div>
                                        <div class="resume-position-time"><b>description: </b>{{$experience->description}}</div>

                                    </div><!--//resume-timeline-item-header-->
                                @endif

                            </div><!--//resume-timeline-->






                        </div>
                    </section><!--//experience-section-->
                </div>

                <div class="col-lg-4">
                    @if($diplome)
                    <section class="resume-section experience-section mb-5">
                        <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">  Diplome</h2>
                        <div class="resume-section-content">
                            <article class="resume-timeline-item position-relative pb-5">

                                <div class="resume-timeline-item-header mb-2">

                                        <div class="resume-position-time font-weight-bold ">
                                            {{$diplome->titre_diplome}}</div>


                                    <div class="resume-position-time"><b>type diplome :</b>  {{$diplome->domaine_diplome}}</div>
                                    <div class="resume-position-time"><b>domaine diplome :</b> {{$diplome->type_diplome}}</div>
                                    <div class="resume-position-time"><b>ecole :</b> {{$diplome->ecole}}</div>
                                    <div class="resume-position-time"><b>niveau_etude :</b> {{$diplome->niveau_etude}}</div>
                                    <div class="resume-position-time"><b>annee debut :</b> {{$diplome->annee_debut}}</div>
                                    <div class="resume-position-time"><b>annee fin :</b> {{$diplome->annee_fin}}</div>
                                    <div class="resume-position-time"><b>description :</b> {{$diplome->description}}</div>
                                    <img    src="{{asset('storage/imgdiplome/'.$diplome->image_dip)}}" >
                                </div><!--//resume-timeline-item-header-->

                            </article><!--//resume-timeline-item-->

                        </div>
                    </section><!--//experience-section-->
                    @endif
                </div>



                <div class="col-lg-3">
                   @if($diplome)
                    <section class="resume-section skills-section mb-5">
                        <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">compétences</h2>
                        <div class="resume-section-content">
                            <div class="resume-skill-item">
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2">
                                        <div class="resume-skill-name font-weight-bold ">{{$competence->compétence.' ('.$competence->niveau_compétence.')'}}</div>
                                        <div class="resume-skill-name"></div>
                                    </li>

                                </ul>
                            </div><!--//resume-skill-item-->




                </div>
                    @endif
            </div><!--//row-->
        </div><!--//resume-body-->


    </div>
</article>


@endsection
