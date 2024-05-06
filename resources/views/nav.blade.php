<nav class="nav">
    <div class="nav_bar">
        <div class="conexaoUniversal_a_caixa">
            <a class="conexaoUniversal_a" href="{{ route('index')}}"><h1 class="titulo_nav">linesOfCode</h1></a>
        </div>
        <div class="input_caixa">
            <form class="input_caixa_form" action="{{ route('pesquisar') }}" method="POST">
                @csrf
                <div class="caixxa_pes">
                    <input id="pesquisa" name="input_pesquisa" type="text" class="pes_text" placeholder="O que você estar procurando?">
                    <button id="btn_pesquisar" class="pes_btnn" type="submit">
                        <img src="{{ asset('images/lupa2.png') }}" alt="" width="20" height="20">
                    </button>
                </div>
                    <img id="x" class="img_x" src="{{ asset('images/x.png') }}" alt="x">
                    <img id="img_tracov" class="img_tracov" src="{{ asset('images/ou.png') }}" alt="barra">
                    <img id="lupa" class="img_lupa" src="{{ asset('images/lupa2.png') }}" alt="lupa">
                    <img id="img_menu_tablete" class="img_menu_tablete" src="{{ asset('images/menu.png') }}" alt="menu">                   
                </div>

            </form>
        </div>       
    </div>
    <section class="sub_nav">
        <ul class="ul_sub_nav">
            <li class="li_sub_nav"><a href="{{ route('index')}}">Início</a></li>
            <li class="li_sub_nav"><a href="{{ route('desenvolvimento_pessoal')}}">Desenvolvimento pessoal</a></li>
            <li class="li_sub_nav"><a href="{{ route('programadorHabilidoso')}}">Programador habilidoso</a></li>
            <li class="li_sub_nav"><a href="{{ route('categoriaTecnolongia')}}">Novidades tecnológicas</a></li>
            <li class="li_sub_nav"><a href="{{ route('softSkills')}}">Soft skills</a></li>
        </ul> 
    </section>
    <section class="sub_nav_menu" id="sub_nav_menu">
        <img id="x_menu" class="x_menu" src="{{ asset('images/x.png') }}" alt="x">
        <ul class="ul_sub_nav_menu" id="ul_sub_nav_menu">
            <a href="{{ route('index')}}"><li class="li_sub_nav_menu">Início</li></a>
            <a href="{{ route('desenvolvimento_pessoal')}}"><li class="li_sub_nav_menu">Desenvolvimento pessoal</li></a>
            <a href="{{ route('categoriaTecnolongia')}}"><li class="li_sub_nav_menu">Novidades tecnológicas</li></a>
            <a href="{{ route('programadorHabilidoso')}}"><li class="li_sub_nav_menu">Programador habilidoso</li></a>
            <a href="{{ route('softSkills')}}"><li class="li_sub_nav_menu">Soft Skills</li></a>
        </ul> 
    </section>
    <section class="caixa_form_cel">
        <form class="input_caixa_form_cel" action="{{ route('pesquisar') }}" method="POST">
            @csrf
            <div class="caixxa_pes_cel">
                <input id="pesquisa" name="input_pesquisa" type="text" class="pes_text_cel" placeholder="pesquise">
                <button id="btn_pesquisar" class="pes_btnn_cel" type="submit">
                    <img src="{{ asset('images/lupa2.png') }}" alt="" width="20" height="20">
                </button>
            </div>

        </form>
    </section>
</nav>

<script>
    let lupa = document.querySelector('#lupa')
    let x = document.querySelector('#x')
    let pesquisa = document.querySelector('#pesquisa')
    let img_tracov = document.querySelector('#img_tracov')
    let btn_pesquisar = document.querySelector('#btn_pesquisar')

    lupa.addEventListener('click', ()=>{
        if(lupa.style.display === 'block' || lupa.style.display === ''){
            lupa.style.display = 'none'
            x.style.display = 'block'
            pesquisa.style.display = 'block'
            img_tracov.style.display = 'none'
            btn_pesquisar.style.display = 'block'
        }else{
            x.style.display = 'none'
            lupa.style.display = 'block'
            pesquisa.style.display = 'none'
            img_tracov.style.display = 'block'
            btn_pesquisar.style.display = 'none'
        }
    })

    x.addEventListener('click', ()=>{
        if(x.style.display === 'block'){
            x.style.display = 'none'
            lupa.style.display = 'block'
            pesquisa.style.display = 'none'
            img_tracov.style.display = 'block'
            btn_pesquisar.style.display = 'none'
        }else{
            lupa.style.display = 'none'
            x.style.display = 'block'
            pesquisa.style.display = 'block'
            img_tracov.style.display = 'none'
            btn_pesquisar.style.display = 'block'
        }
    })

    /***** menu humburguer ******/

    let img_menu_tablete = document.querySelector('#img_menu_tablete')
    let sub_nav_menu = document.querySelector('#sub_nav_menu')
    let x_menu = document.querySelector('#x_menu')

    img_menu_tablete.addEventListener('click', ()=>{
        if(img_menu_tablete.style.display === 'block' || img_menu_tablete.style.display === ''){
            img_menu_tablete.style.display = 'none'
            sub_nav_menu.style.display = 'block'
            x_menu.style.display = 'block'
        }else{
            img_menu_tablete.style.display = 'block'
            sub_nav_menu.style.display = 'none'
            x_menu.style.display = 'none'
        }
    })

    x_menu.addEventListener('click', ()=>{
        if(x_menu.style.display === 'block'){
            sub_nav_menu.style.display = 'none'
            x_menu.style.display = 'none'
            img_menu_tablete.style.display = 'block'
        }else{
            x_menu.style.display = 'none'
            sub_nav_menu.style.display = 'block'
            img_menu_tablete.style.display = 'none'
        }
    })

    // Função para ocultar as imagens em telas maiores que 992px
        function hideImagesOnLargeScreens() {
        const screenWidth = window.innerWidth;
        const imgMenuTablete = document.querySelector('#img_menu_tablete');
        const xMenu = document.querySelector('#x_menu');
        
        if (screenWidth >= 992) {
            imgMenuTablete.style.display = 'none';
            xMenu.style.display = 'none';
        } else {
            imgMenuTablete.style.display = 'block'; 
            xMenu.style.display = 'block'; 
        }
        }

        hideImagesOnLargeScreens();
        window.addEventListener('resize', hideImagesOnLargeScreens);

</script>