@extends('layout.index')

@section('Content')
<div class="container">
    <div class="col-lg-12">
        <div class="row">
            <div class="reviews-header edit-header">
                <h1>Edit</h1>
                
            </div>
        </div>
    </div>
<div class="col-lg-12">
    @if (session('status'))
        <h6 class="alert alert-success">{{session('status')}}</h6>
    @endif

    <div class="review-form add_games">
        <form action="{{url('edit'.$game->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <div class="form-group">
                <label for="name">Názov</label>
                <input type="text" class="form-control" id="name" value="{{$game->name}}" name="name" required>
              </div>
              <div class="form-group">
                <label for="date">Dátum vydania</label>
                <input type="date" class="form-control" id="date" name="date" value="{{$game->date}}" required>
              </div>
            <div class="form-group">
              <label for="count">Počet hráčov</label>
              <input type="text" class="form-control" id="count" name="count" value="{{$game->count}}" required>
            </div>
            <div class="form-group">
                <label for="picture">Počet hráčov</label>
                <input type="file" class="form-control" id="picture" name="pic"  >
                <img src="{{ asset('uploads/zoznam/'.$game->image) }}" alt="image">
              </div>
            
            <button type="submit" class="send-review">
                Edit
            </button>

          </form>

    </div>

</div>
</div>







@endsection