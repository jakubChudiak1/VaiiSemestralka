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
                <form onclick="strenght()" >
                    <label for="mail">Váš Mail</label>
                    <input type="email" id="mail" placeholder="example@gmail.com">
                    <label for="pass">Vaše heslo</label>
                    <input type="password" placeholder="Heslo" id="pass">
                    <p id="sprava"> <span id="sila"></span> </p>
                    <label for="pass-conf">Potvrďte heslo</label>
                    <input type="password" id="pass-conf" placeholder="heslo">
                    <button id="regist">Vytvorte účet</button>
                </form>
            </div>
        </div>

    </div>

</div>
<script>
    function strenght(){
    const pass = document.getElementById('pass');
    const msg = document.getElementById('sprava');
    const sil = document.getElementById('sila');
    const btn = document.getElementById('regist');
    pass.addEventListener('click', ()=> {
        if (pass.value.length >0){
            msg.style.display = "block";
        }
        else{
            msg.style.display = "none";
            btn.style.display = "none";
        }
        if(sil.value.length < 5){
            msg.innerHTML = "SLABÉ";
            btn.style.display = "none";
        }
        else if(sil.value.length >10){
            msg.innerHTML = "SILNÉ";
            btn.style.display = "block";
        }



    }

    }




</script>
</section>
@endsection
