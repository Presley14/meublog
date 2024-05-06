<footer class="footer">
    <div class="footer_caixa">
        <div class="footer_grupo">
            <div class="footer_categorias">
                <h3 class="footer_categoria">Categorias</h3>
                <ul>   
                    <a class="footer_a" href="{{ route('desenvolvimento_pessoal')}}"><li class="footer_li">Desenvolvimento pessoal</li></a>
                    <a class="footer_a" href="{{ route('categoriaTecnolongia')}}"><li class="footer_li">Novidades tecnológicas</li></a>
                    <a class="footer_a" href="{{ route('programadorHabilidoso')}}"><li class="footer_li">Programador habilidoso</li></a>
                    <a class="footer_a" href="{{ route('softSkills')}}"><li class="footer_li">Soft skills</li></a>
                </ul>
            </div>
            <div class="footer_redator">
                <h3 class="footer_redator">Administrativo</h3>
                <ul>
                    <a class="footer_a" href="{{ asset('login') }}"><li class="footer_li">Redator</li></a>
                </ul>
            </div>           
        </div>
        <div class="footer_site">
           &copy; linesofcode <span id="ano"></span>
        </div>
    </div>
    
</footer>

<script>
    let ano_span = document.querySelector('#ano')
    let ano = new Date().getFullYear()

    ano_span.textContent = ano
</script>