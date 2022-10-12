@extends("layout.index")
@section("Content")
<section id="registration">
<div class="container">
    <div class="col-lg-12">
        <div class="registration-content">
            <div class="registration-header">
                <h1>Registrácia</h1>
            </div>
            <div class="registration-form">
                <form >
                    <label for="mail">Váš Mail</label>
                    <input type="email" id="mail" placeholder="example@gmail.com">
                    <label for="pass">Vaše heslo</label>
                    <input type="password" placeholder="Heslo" id="pass">
                    <label for="pass-conf">Potvrďte heslo</label>
                    <input type="password" id="pass-conf" placeholder="heslo">
                    <button>Vytvorte účet</button>
                </form>
            </div>
        </div>

    </div>

</div>
</section>
@endsection
