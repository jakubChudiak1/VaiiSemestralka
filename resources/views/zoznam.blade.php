@extends('layout.index')
@section('Content')
<section id="games-table">
<div class=" container">
    <div class=" col-lg-12">
        <div class="game-table-content">
            <div class="game-table-header">
                <h1>Zoznam <span>Hier</span></h1>
                <button class="btn btn-primary pridaj"> <a href="{{url('addGame')}}">Pridaj Hru</a> </button>
            </div>

            
            <div class=" col-lg-12" >
            <div class="games">
                <table class="table">
                    <thead>
                        <tr>
                          <th scope="col"></th>
                          <th scope="col">Názov</th>
                          <th scope="col">Dátum vydania</th>
                          <th scope="col">Počet Stiahnutí</th>
                          <th scope="col">Edit</th>
                          <th scope="col">Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($games as $item)
                        <tr>
                           <td><img src="{{ asset('uploads/zoznam/'.$item->image) }}" style="width: 200px"   alt="image"></td>
                          <td><p>{{$item->name}}</p> </td>
                          <td><p>{{$item->date}}</p> </td>
                          <td><p>{{$item->count}}</p> </td>
                           <td><button style="width: 100%" type="submit" class="send-review">
                            <a href="{{url('edit'.$item->id)}}">Edit</a>  
                        </button></td>
                        <td><button   style="width: 100%"  type="submit" class="send-review">
                       <a href="{{url('delete'.$item->id)}}">Delete</a>   
                      </button></td>
                        </tr>
                        @endforeach
                      </tbody>


                </table>


            </div>
        </div>
    </div>
</div>










</section>









@endsection
