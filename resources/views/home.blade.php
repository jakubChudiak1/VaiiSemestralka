@extends('layout.index')
@section('Content')
<section id="home">
<div class="row">
    <div class="col-lg-12">


            <div class="home-banner">
                <div class="col-lg-6">
                    <div class="banner-content">
                        <h1>Vitajte v <span>Cyborg</span> </h1>
                        <p>Cyborg je herny portál kde môžete nás recenzie na všetky hry</p>
                        <button>
                            Recenzie
                        </button>
                    </div>

                </div>

            </div>

        </div>
    </div>
</section>

<section id="game-list">

    <div class="container-fluid">

        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-6">
                <div class=" game-item">
                    <h1>Dota 2</h1>
                    <img src="{{ asset("images/game-01.jpg") }}" alt="">
                    <div class="game-content">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet minus quia eius non. Ratione optio quo veniam placeat ipsum! Placeat quisquam tempora ipsum officia dolores. A nam expedita maxime id.
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class=" game-item">
                    <h1>Rust</h1>
                    <img src="{{ asset("images/game-02.jpg") }}" alt="">
                    <div class="game-content">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia deserunt voluptate animi, provident dolores harum. Similique placeat quidem distinctio illum modi asperiores perferendis animi aut,
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class=" game-item">
                    <h1>Minecraft</h1>
                    <img src="{{ asset("images/game-03.jpg") }}" alt="">
                    <div class="game-content">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti nobis temporibus a, provident quibusdam dolorem repellat pariatur voluptatum consequatur deleniti officiis in debitis doloribus ex repellendus delectus sed eos et!
                    </div>
                </div>
            </div>
        </div>

</div>



</section>










@endsection
