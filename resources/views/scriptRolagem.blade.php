<script>

    /*****  Voltar para o topo *****/
    document.addEventListener("DOMContentLoaded", function() {
    const scrollToTopButton = document.querySelector('.scroll-to-top');

    scrollToTopButton.addEventListener('click', function(event) {
        event.preventDefault(); // Evitar o comportamento padrão do link
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    // Mostrar o botão apenas quando a página é rolada para baixo
    window.addEventListener('scroll', function() {
        scrollToTopButton.style.display = (window.scrollY > 100) ? 'block' : 'none';
    });
});



    /****  Visibilidade da imagem topo depois da metade ****/
    document.addEventListener("DOMContentLoaded", function() {
        const scrollToTopButton = document.querySelector('.scroll-to-top')
        
        scrollToTopButton.style.display = 'none';
        
        function checkHalfPageView() {
            const pageHeight = document.documentElement.scrollHeight
            const scrollTop = window.scrollY || document.documentElement.scrollTop

            if (scrollTop >= pageHeight / 2 ) {
                scrollToTopButton.style.display = 'block'
            } else {
                scrollToTopButton.style.display = 'none'
            }
        }
        
        window.addEventListener('scroll', checkHalfPageView)
    })


</script>