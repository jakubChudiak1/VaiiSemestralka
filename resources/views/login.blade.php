@extends('layout.index')
@section('Content')
<section id="login">
    <div class="login-all">
    <div class="login-header">
        <h1>Prihlásenie</h1>
    </div>
<div class="login-content">
    <div class="col-lg-12">
        <form >
            <label for="email">Váš Mail</label>
            <input type="email" placeholder="example@gmail.com" id="email" required>
            <label for="password">Vaše heslo</label>
            <input type="password" placeholder="Heslo" id="password">

            <button>Prihlásiť</button>
            <br>
            <br>
            <a href="registration">Nemáte ešte účet?</a>
        </form>


    </div>
</div>
</div>






</section>

@endsection
