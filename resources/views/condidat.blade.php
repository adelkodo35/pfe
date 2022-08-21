<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>cv</title>


    <script type="text/javascript" src="js/script.js"></script>

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- Google Font -->


      <!-- <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>



    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/pillar-6.css">



</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: rgb(49, 163, 93);">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <img id="logo" src="img/logo-smal-black.png" style="top: 5px;">
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{route("profile")}}">


                    <span>
                        voir mon cv       </span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Gérer
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">

                    <span>  telecharger cv</span>
                </a>


            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">

                    <span> Gérer mon profil</span>
                </a>

            </li>










        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <button style="position: absolute;
left: 47%;
border-radius: 27%;
background-color: mediumseagreen;
color: white;" onclick="changer()">change</button>
                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>


                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"> candidat: </span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{route("logout")}}" >
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <article class="resume-wrapper text-center position-relative">
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
                                                    <li class="mb-3"><span class="fa-container text-center me-2"><i class="fa-solid fa-cake-candles"></i></span> <a>date de naissance : {{$info->date_naissance}}</a></li>
                                                    <li class="mb-3"><a ><span class="fa-container text-center me-2"><i class="fa-solid fa-location-dot"></i></span> adresse:{{$info->adresse}} </a></li>
                                                    <li class="mb-3"><a ><span class="fa-container text-center me-2"><i class="fa-solid fa-map"></i></span>lieu de naissance : {{$info->lieu_naissance}}</a></li>
                                                    <li><a ><span class="fa-container text-center me-2"><i class="fa-solid fa-user-graduate"></i></span>age : {{$info->age}} ans</a></li>
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
                                                            <div class="d-flex flex-column flex-md-row">
                                                                <h3 class="resume-position-title font-weight-bold mb-1">Titre post;{{$experience->titre_post}}</h3>
                                                            </div><!--//row-->
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
                                                        <div class="d-flex flex-column flex-md-row">
                                                            <h3 class="resume-position-title font-weight-bold mb-1">
                                                                {{$diplome->titre_diplome}}</h3>

                                                        </div><!--//row-->
                                                        <div class="resume-position-time"><b>type diplome :</b>  {{$diplome->domaine_diplome}}</div>
                                                        <div class="resume-position-time"><b>domaine diplome :</b> {{$diplome->type_diplome}}</div>
                                                        <div class="resume-position-time"><b>ecole :</b> {{$diplome->ecole}}</div>
                                                        <div class="resume-position-time"><b>niveau_etude :</b> {{$diplome->niveau_etude}}</div>
                                                        <div class="resume-position-time"><b>annee debut :</b> {{$diplome->annee_debut}}</div>
                                                        <div class="resume-position-time"><b>annee fin :</b> {{$diplome->annee_fin}}</div>
                                                        <div class="resume-position-time"><b>description :</b> {{$diplome->description}}</div>
                                                        <img  style="width: 100%;height: 50%;"  src="{{asset('storage/imgdiplome/'.$diplome->image_dip)}}" >
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













































    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.blade.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

</body>

</html>
