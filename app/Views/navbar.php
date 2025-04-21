<nav class="navbar fixed-top py-3 navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid d-flex align-items-center">

        <a class="navbar-brand" href="#"><img src="assets/img/svg/icon_eyeglasses.svg" width="38" height="38"> G&G Óptica</a>


        <!-- Botón hamburguesa SOLO visible en pantallas chicas -->
        <button class="navbar-toggler d-lg-none ms-auto" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>



        <!-- Menú para ESCRITORIO (pantallas grandes) -->
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <form class="d-flex me-5" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                </form>
                <a class="nav-link" href="#">Catálogo</a>
                <a class="nav-link" href="#">Contacto</a>
                <a class="nav-link" href="#">Crear cuenta</a>
                <a class="nav-link" href="#">Iniciar sesión</a>
                <div class="px-4">
                    <a href="#"><img class="nav-link" src="assets/img/svg/icon_cart.svg" width="48" height="48"></a>
                </div>
            </div>
        </div>

    </div>
</nav>

<!-- Menú hamburguesa OFFCANVAS solo en móviles -->
<div class="offcanvas offcanvas-start d-lg-none bg-dark text-light" tabindex="-1" id="offcanvasNavbar"
    aria-labelledby="offcanvasNavbarLabel" data-bs-theme="dark">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
        <img src="assets/img/svg/icon_eyeglasses.svg" width="38" height="38">
            G&G Óptica</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Cerrar"></button>
    </div>
    <div class="offcanvas-body">
        <form class="d-flex mb-3" role="search">
            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        </form>
        <a class="nav-link" href="#">Catálogo</a>
        <a class="nav-link" href="#">Contacto</a>
        <a class="nav-link" href="#">Crear cuenta</a>
        <a class="nav-link" href="#">Iniciar sesión</a>
        
    </div>
</div>