const Elementos = document.querySelectorAll('.Hidden');
const Elemento2 = document.querySelectorAll('.Hidden2');

// observar para fazer o parallax, se for true ou false
const myObserver = new IntersectionObserver( (observar) => {
    observar.forEach( (Entrada) => {
        // Se estiver observando, ele mostra os elementos
        if(Entrada.isIntersecting) {
            Entrada.target.classList.add('Show');
        } else {
            Entrada.target.classList.remove('Show');
        }
    })
})

Elementos.forEach((Elemento) => {
    myObserver.observe(Elemento)
});

Elemento2.forEach((Elemento) => {
    myObserver.observe(Elemento)
});