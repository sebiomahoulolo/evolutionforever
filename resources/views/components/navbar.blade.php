<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Chargement...</span>
    </div>
</div>
<!-- Spinner End -->

<!-- Topbar Start -->
<div id="topbar" class="container-fluid bg-dark px-5 d-none d-lg-block">
    <div class="row gx-0">
        <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>Porto-Novo, Gbôdjè carrefour douanier Aklé</small>
                <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>0147523655 / 0142317867</small>
                <small class="text-light"><i class="fa fa-envelope-open me-2"></i>adevolutionforever@gmail.com</small>
            </div>
        </div>
        <div class="col-lg-4 text-center text-lg-end">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.facebook.com/evolutionforever"><i class="fab fa-facebook-f fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->

<!-- Navbar Start -->
<nav id="mainNavbar" class="navbar navbar-expand-lg navbar-dark bg-white shadow-sm px-4 px-lg-5 py-3 sticky-top">
    <div class="container-fluid">
        <a href="{{ route('welcome') }}" class="navbar-brand d-flex align-items-center">
            <img src="/img/logo.png" alt="Evolution Forever" class="logo-img me-2" style="height: 50px;">
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" >
            <span class="navbar-toggler-icon" style="color: #0d6efd"></span>
        </button >
        
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ms-auto py-0 pe-4">
                <li class="nav-item">
                    <a href="{{ route('welcome') }}" class="nav-link {{ request()->routeIs('welcome') ? 'active' : '' }}">Accueil</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->is('immobilier*') ? 'active' : '' }}" href="#" id="immobilierDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Immobilier
                    </a>
                    <ul class="dropdown-menu border-0 shadow-sm" aria-labelledby="immobilierDropdown">
                        <li><a class="dropdown-item" href="{{ route('pages.immo') }}">Tous les biens</a></li>
                        <li><a class="dropdown-item" href="{{ route('pages.immo') }}?type=location">Locations</a></li>
                        <li><a class="dropdown-item" href="{{ route('pages.immo') }}?type=vente">Ventes</a></li>
                    </ul>
                </li>
                  <li class="nav-item">
                    <a href="{{ route('vehicule.index') }}" class="nav-link {{ request()->routeIs('vehicule.index') ? 'active' : '' }}">Véhicules</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.evenments') }}" class="nav-link {{ request()->routeIs('pages.evenments') ? 'active' : '' }}">Évènementiel</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->is('services*') ? 'active' : '' }}" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>
                    <ul class="dropdown-menu border-0 shadow-sm" aria-labelledby="servicesDropdown">
                        <li><a class="dropdown-item" href="{{ route('pages.pressing') }}">Pressing</a></li>
                        <li><a class="dropdown-item" href="{{ route('pages.demenagement') }}">Déménagement</a></li>
                        <li><a class="dropdown-item" href="{{ route('pages.produit') }}">Produits SOBEBRA</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.propos') }}" class="nav-link {{ request()->routeIs('pages.propos') ? 'active' : '' }}">À propos</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.contact') }}" class="nav-link {{ request()->routeIs('pages.contact') ? 'active' : '' }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Navbar End -->

<style>
    #topbar {
        position: sticky;
        top: 0;
        z-index: 1050;
        transition: all 0.3s ease;
    }
    
    #mainNavbar {
        position: sticky;
        top: 0;
        z-index: 1040;
        transition: all 0.3s ease;
    }
    
    .navbar {
        background-color: rgba(215, 209, 209, 0.95) !important;
        box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
    }

    .nav-link {
        font-weight: 500;
        color: #333 !important;
        padding: 0.5rem 1rem !important;
        margin: 0 0.2rem !important;
        position: relative;
    }

    .nav-link:before {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        bottom: 0;
        left: 0;
        background-color: #0dd5fd;
        visibility: hidden;
        transition: all 0.3s ease-in-out;
    }

    .nav-link:hover:before,
    .nav-link.active:before {
        visibility: visible;
        width: 100%;
    }

    .nav-link.active {
        color: #0d6efd !important;
        font-weight: 600;
    }

    .dropdown-menu {
        border-radius: 0.5rem;
        padding: 0.5rem 0;
    }

    .dropdown-item {
        padding: 0.5rem 1.5rem;
        font-weight: 500;
    }

    .dropdown-item:hover,
    .dropdown-item:focus {
        background-color: #f8f9fa;
        color: #0d6efd;
    }

    .logo-img {
        transition: all 0.3s ease;
    }

    .spinner-grow {
        animation-duration: 0.8s;
    }

    @media (max-width: 991.98px) {
        .navbar-collapse {
            padding: 1rem;
            background-color: white;
            border-radius: 0.5rem;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
            margin-top: 0.5rem;
        }

        .nav-item {
            margin: 0.3rem 0;
        }

        .dropdown-menu {
            margin-left: 1rem;
            border: none;
            box-shadow: none;
        }
    }
</style>

<script>
    window.addEventListener('scroll', function() {
        const topbar = document.getElementById('topbar');
        const navbar = document.getElementById('mainNavbar');
        
        if (window.scrollY > 50) {
            topbar.style.transform = 'translateY(-100%)';
            navbar.style.top = '0';
        } else {
            topbar.style.transform = 'translateY(0)';
            navbar.style.top = '45px';
        }
    });
    
    // Initialisation pour les petits écrans
    window.addEventListener('load', function() {
        if (window.innerWidth < 992) {
            document.getElementById('mainNavbar').style.top = '0';
        }
    });
</script>