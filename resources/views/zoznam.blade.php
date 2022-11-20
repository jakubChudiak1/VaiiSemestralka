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
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                           <td><img src="{{ asset("images/hearthstonel.png") }}" alt=""></td>
                          <td><p>Hearthstone</p> </td>
                          <td><p>11.03.2014</p> </td>
                          <td><p>300 mil.</p> </td>
                        </tr>
                        <tr>
                            <td><img src="{{ asset("images/lol.png") }}" alt=""></td>
                           <td><p>LoL</p> </td>
                           <td><p>01.01.2009</p> </td>
                           <td><p>1.9 mil.</p> </td>
                         </tr>
                         <tr>
                            <td><img src="{{ asset("images/dota2_social.png") }}" alt=""></td>
                           <td><p>Dota2</p> </td>
                           <td><p>02.03.2008</p> </td>
                           <td><p>800 mil.</p> </td>
                         </tr>
                         <tr>
                            <td><img src="{{ asset("images/apex.png") }}" alt=""></td>
                           <td><p>Apex</p> </td>
                           <td><p>11.06.2018</p> </td>
                           <td><p>120 mil.</p> </td>
                         </tr>
                         <tr>
                            <td><img src="{{ asset("images/roblox.png") }}" alt=""></td>
                           <td><p>Roblox</p> </td>
                           <td><p>02.05.2006</p> </td>
                           <td><p>30 mil.</p> </td>
                         </tr>
                      </tbody>


                </table>


            </div>
        </div>
    </div>
</div>










</section>









@endsection
