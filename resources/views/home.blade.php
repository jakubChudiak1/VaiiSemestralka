@extends('layout.index')
@section('Content')
<div class="container">
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
        <div class="col-lg-12">
            <div class="row">
                <div class="favourite-game">
                    <h1>Obľúbené <span>hry</span> </h1>
                </div>
            </div>
        </div>
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


<section id="reviews">
    <div class="col-lg-12">
        <div class="row">
            <div class="reviews-header">
                <h1>Tu Možete Napísať <span>Recenziu</span> na Hru</h1>
            </div>
        </div>
    </div>

    <div class="col-lg-12">
            <div class="review-form">
                <form >
                    <div class="form-group">
                        <label for="name">Vaše Meno</label>
                        <input type="text" class="form-control" id="name" placeholder="Jakub" required>
                      </div>
                      <div class="form-group">
                        <label for="surname">Vaše Priezvisko</label>
                        <input type="text" class="form-control" id="surname" placeholder="Chudiak" required>
                      </div>
                    <div class="form-group">
                      <label for="mail">Váš Email</label>
                      <input type="email" class="form-control" id="mail" placeholder="name@example.com" required>
                    </div>

                    <div class="form-group">
                      <label for="recenzia">Vaša recenzia</label>
                      <textarea class="form-control" id="recenzia" rows="6" required></textarea>
                    </div>
                    <button class="send-review">
                        Send
                    </button>

                  </form>

            </div>

    </div>







</section>

</div>






@endsection
