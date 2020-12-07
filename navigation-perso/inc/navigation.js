document.addEventListener('DOMContentLoaded', function () {
    const hamburgerMenu = document.getElementById('nav-button');
    const menuContainer = document.getElementById( 'menu-container' );

    /*
        Lorsque l'utilisateur scroll le menu se rétracte
     */
    window.addEventListener('scroll', function () {
        menuContainer.classList.remove('menu--active');
    })

    /*
        Ajout d'un évènement sur le bouton pour activer l'apparition/disparition du menu
     */
    hamburgerMenu.addEventListener('click', function (event) {

        if (!menuContainer.classList.contains('menu--active')){
            menuContainer.classList.add('menu--active');
        }
        else  {
            menuContainer.classList.remove('menu--active');
        }
    })

    /*
        Ajout d'un évènement qui rétracte le menu lorsque l'on ne clique pas dans le menu
     */
    document.addEventListener('click', function (event) {
        const isClickInsideMenu = menuContainer.contains( event.target );
        const isClickInsideBurger = hamburgerMenu.contains( event.target );

        if (!isClickInsideMenu && !isClickInsideBurger){
            menuContainer.classList.remove('menu--active');
        }
    })
})