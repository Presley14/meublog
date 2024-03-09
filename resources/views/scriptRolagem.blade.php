<script>

    /*****  Voltar para o topo *****/
    document.addEventListener("DOMContentLoaded", function() {
        const scrollToTopButton = document.querySelector('.scroll-to-top')

        scrollToTopButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'linear'
            })
        })
    })

    /****  Visibilidade da imagem topo depois da metade ****/
    document.addEventListener("DOMContentLoaded", function() {
        const scrollToTopButton = document.querySelector('.scroll-to-top')
        
       
        function checkHalfPageView() {
         
            const pageHeight = document.documentElement.scrollHeight
            
          
            const scrollTop = window.scrollY || document.documentElement.scrollTop
            
           
            if (scrollTop >= pageHeight / 2) {
                scrollToTopButton.style.display = 'block'
            } else {
                scrollToTopButton.style.display = 'none'
            }
        }
        
        window.addEventListener('scroll', checkHalfPageView)
    })


</script>