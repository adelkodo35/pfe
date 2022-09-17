@extends("layout_sous_admin")
@section("title")
@section("content")

<div class="container-fluid">

    <!-- Page Heading -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List inscription rh</h6>
        </div>
        @if (count($rhs)!=0)


        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>

                            <th>nom utilisateur</th>
                            <th>etat</th>


                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>nom utilisateur</th>
                            <th>etat</th>


                        </tr>
                    </tfoot>
                    <tbody>

                        @foreach ($rhs as  $rh)


                        <tr>

                            <td>{{$rh["nom_utilisateur"]}}</td>
                          

                            @if ($rh["etat"]==0)
<td>no chick</td>
@else
<td>accipte</td>
@endif

<td>

                                <form action="{{route("RH.show", $rh->id)}}" method="GET">
                                    @csrf

                                        <input type="submit" value="show  " class="btn btn-outline-info" >

                                    </form>
</td><td>
<form action="{{route("sousadmin.destroy.rh",$rh->id)}}" method="post">
@csrf
<input type="submit" value="Delete" class=" btn btn-outline-danger">

</form>

                                        @if ($rh["etat"]=="0")
                                        <form action="{{route("sousadmin.deblock",$rh->id)}}" method="GET">
                                            @csrf
                                                <input type="submit" value="accepte  " class="btn btn-outline-warning" >

                                            </form>

                                        @else
                                        <form action="{{route('sousadmin.block',$rh->id)}}" method="GET">
                                            @csrf

                                                <input type="submit" value="refause"  class="btn btn-outline-dark">

                                            </form>

                                       @endif

</td>

                        </tr>
                        @endforeach




                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@else
there is no demende inscription rh
@endif


    <!-- Content Row -->


@endsection
