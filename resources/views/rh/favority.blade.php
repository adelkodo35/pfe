@extends("layout_rh")
@section("title","liste favorite")
@section("content")


@foreach ($lists as $list )
<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
    <div class="card-body">
      <h3 class="card-title">titre de liste: <b>{{$list->titre_liste}}</b></h3>
      <p class="card-text">date creation de liste: {{$list->created_at}}</p>
      <form action="{{route("Liste.show", $list->id)}}" method="GET">
        @csrf
            <input type="submit" value="show  " class="btn btn-outline-info" >
        </form>
        <form action="{{route("Liste.destroy", $list->id)}}" method="post">
            @csrf
            @method("DELETE")

                <input type="submit" value="delete" class="btn btn-outline-danger" >
            </form>
    </div>
  </div>
@endforeach






@endsection
