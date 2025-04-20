<nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">G&G Óptica</a>

        <!-- Botón hamburguesa SOLO visible en pantallas chicas -->
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" 
            aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menú para ESCRITORIO (pantallas grandes) -->
        <div class="collapse navbar-collapse d-none d-lg-flex" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <form class="d-flex me-5" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Buscar </button>
                </form>
                <a class="nav-link" href="#">Catálogo</a>
                <a class="nav-link" href="#">Contacto</a>
                <a class="nav-link" href="#">Crear cuenta</a>
                <a class="nav-link" href="#">Iniciar sesión</a>
            </div>
        </div>
    </div>
</nav>

<!-- Menú hamburguesa OFFCANVAS solo en móviles -->
<div class="offcanvas offcanvas-start d-lg-none bg-dark text-light" tabindex="-1" id="offcanvasNavbar"
    aria-labelledby="offcanvasNavbarLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">G&G Óptica</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Cerrar"></button>
    </div>
    <div class="offcanvas-body">
        <form class="d-flex mb-3" role="search">
            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-primary" type="submit">Buscar</button>
        </form>
        <a class="nav-link" href="#">Catálogo</a>
        <a class="nav-link" href="#">Contacto</a>
        <a class="nav-link" href="#">Crear cuenta</a>
        <a class="nav-link" href="#">Iniciar sesión</a>
    </div>
</div>