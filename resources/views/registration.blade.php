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
                <form  >
                    <label for="mail">Váš Mail</label>
                    <input type="email" id="mail" placeholder="example@gmail.com">
                    <label for="pass">Vaše heslo</label>
                    <input type="password" placeholder="Heslo" id="pass">
                    <p id="sprava"> Heslo je:<span id="sila"></span> </p>


                    <label for="pass-conf">Potvrďte heslo</label>
                    <input type="password" id="pass-conf" placeholder="heslo">
                    <button id="regist" type="submit">Vytvorte účet</button>
                </form>
            </div>
        </div>

    </div>

</div>
<script>
    var passs = document.getElementById('pass');
    var msg = document.getElementById('sprava');
    var sil = document.getElementById('sila');

    passs.addEventListener('input', () => {
        if (passs.value.length > 0){
            msg.style.display = "block";
            
        }
        else{
            sila.style.color ="yellow";
            msg.style.display = "none";
           
        }
        if(passs.value.length < 5){
            sil.innerHTML = "SLABÉ";
            msg.style.color ="red";
        }
        else if(passs.value.length <10 && passs.value.length >5){
            sil.innerHTML = "STREDNÉ";
            msg.style.color ="yellow";
        }
        else if(passs.value.length >10){
            sil.innerHTML = "SILNÉ";
            msg.style.color ="green";
        }
    })
</script>
</section>
@endsection
