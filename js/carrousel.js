(function(){
    console.log("carrousel.js");

    let heroRadios = document.querySelectorAll(".hero__radio__input");
    let carrousels = document.querySelectorAll(".hero__carrousel");
    let current = 0;
    let hero__animation = document.querySelectorAll(".hero__animation");
    const total = carrousels.length;


    // Initialisation : activer le premier carrousel
    carrousels[current].classList.add("active");
    if (heroRadios[current]) {
        heroRadios[current].checked = true;
    }

    // Fonction pour changer le carrousel en fonction de l'index courant
    function switchCarousel(index) {
        // Retirer la classe active de l'actuel
        carrousels[current].classList.remove("active");
        // Passer au nouveau carrousel
        current = index;
        // Ajouter la classe active au nouveau carrousel
        carrousels[current].classList.add("active");
        // Cocher le bouton radio correspondant
        if (heroRadios[current]) {
            heroRadios[current].checked = true;
        }
    }

    // Variable pour stocker l'ID de l'intervalle
    let interval;
    // Fonction pour démarrer l'intervalle
    function startInterval() {
        // Arrêter l'intervalle précédent s'il existe
        if (interval) {
            clearInterval(interval);
        }
        // Démarrer un nouvel intervalle
        interval = setInterval(() => {
            switchCarousel((current + 1) % total);
        }, 5000);
    }

    // Démarrer l'intervalle dès le début
    startInterval();

    //Changer manuellement le carrousel
    heroRadios.forEach((radio, index) => {
        radio.addEventListener("click", () => {

            switchCarousel(index);

            startInterval();
        });
    });
})();
