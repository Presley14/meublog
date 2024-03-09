<footer class="footer">
    <div class="footer_caixa">
        <div class="footer_grupo">
            <div class="footer_categorias">
                <h3 class="footer_categoria">Categorias</h3>
                <ul>   
                    <a class="footer_a" href="{{ route('desenvolvimento_pessoal')}}"><li class="footer_li">Desenvolvimento pessoal</li></a>
                    <a class="footer_a" href="{{ route('categoriaTecnolongia')}}"><li class="footer_li">Tecnologia-vital</li></a>
                    <a class="footer_a" href="{{ route('bemEstar')}}"><li class="footer_li">Bem-estar</li></a>
                    <a class="footer_a" href="{{ route('viagem')}}"><li class="footer_li">Férias</li></a>
                </ul>
            </div>
            <div class="footer_redator">
                <h3 class="footer_redator">Redatores</h3>
                <ul>
                    <a class="footer_a" href=""><li class="footer_li">Presley Oliveira</li></a>
                </ul>
            </div>           
        </div>
        <div class="footer_site">
            &copy; conexãoUniverso <span id="ano"></span>
        </div>
    </div>
    
</footer>

<script>
    let ano_span = document.querySelector('#ano')
    let ano = new Date().getFullYear()

    ano_span.textContent = ano
</script>