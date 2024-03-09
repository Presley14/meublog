<nav class="nav">
    <div class="nav_bar">
        <div>
            <a class="conexaoUniversal_a" href="{{ route('index')}}"><h1 class="titulo_nav">conexãoUniversal</h1></a>
        </div>
        <div class="input_caixa">
            <input id="pesquisa" class="input_pesquisa expandido" type="text" name="input_pesquisa" id="input_pesquisa" placeholder="Qual artigo você procura?">
            <div class="caixa_img">
                <img id="img_tracov" class="img_tracov" src="{{ asset('images/ou.png') }}" alt="barra">
                <img id="lupa" class="img_lupa" src="{{ asset('images/lupa2.png') }}" alt="lupa">
                <img id="x" class="img_x" src="{{ asset('images/x.png') }}" alt="x">                
            </div>
        </div>        
    </div>
    <section class="sub_nav">
        <ul class="ul_sub_nav">
            <li class="li_sub_nav"><a href="{{ route('index')}}">Início</a></li>
            <li class="li_sub_nav"><a href="{{ route('desenvolvimento_pessoal')}}">Desenvolvimento pessoal</a></li>
            <li class="li_sub_nav"><a href="{{ route('categoriaTecnolongia')}}">Tecnologia-vital</a></li>
            <li class="li_sub_nav"><a href="{{ route('bemEstar')}}">Bem-estar</a></li>
            <li class="li_sub_nav"><a href="{{ route('viagem')}}">Férias</a></li>
        </ul> 
    </section>
</nav>

<script>
    let lupa = document.querySelector('#lupa')
    let x = document.querySelector('#x')
    let pesquisa = document.querySelector('#pesquisa')
    let img_tracov = document.querySelector('#img_tracov')

    lupa.addEventListener('click', ()=>{
        if(lupa.style.display === 'block' || lupa.style.display === ''){
            lupa.style.display = 'none'
            x.style.display = 'block'
            pesquisa.style.display = 'block'
            img_tracov.style.display = 'none'
        }else{
            x.style.display = 'none'
            lupa.style.display = 'block'
            pesquisa.style.display = 'none'
            img_tracov.style.display = 'block' 
        }
    })

    x.addEventListener('click', ()=>{
        if(x.style.display === 'block'){
            x.style.display = 'none'
            lupa.style.display = 'block'
            pesquisa.style.display = 'none'
            img_tracov.style.display = 'block'
        }else{
            lupa.style.display = 'none'
            x.style.display = 'block'
            pesquisa.style.display = 'block'
            img_tracov.style.display = 'none'
        }
    })
</script>