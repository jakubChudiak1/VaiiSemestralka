@extends('layout.index')

@section('Content')
<div class="container">
<div class="col-lg-12">
    @if (session('status'))
        <h6 class="alert alert-success">{{session('status')}}</h6>
    @endif

    <div class="review-form add_games">
        <form action="{{url('addGame')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Názov</label>
                <input type="text" class="form-control" id="name" name="name" required>
              </div>
              <div class="form-group">
                <label for="date">Dátum vydania</label>
                <input type="date" class="form-control" id="date" name="date"  required>
              </div>
            <div class="form-group">
              <label for="count">Počet hráčov</label>
              <input type="text" class="form-control" id="count" name="count" required>
            </div>
            <div class="form-group">
                <label for="picture">Počet hráčov</label>
                <input type="file" class="form-control" id="picture" name="image"  required>
              </div>
            
            <button type="submit" class="send-review">
                Send
            </button>

          </form>

    </div>

</div>
</div>







@endsection