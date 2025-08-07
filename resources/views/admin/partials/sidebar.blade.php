<!-- Sidebar -->

    <ul class="sidebar-nav">
          <div class="d-flex">
        <!-- Sidebar -->
        <div class="sidebar w-250">
            <div class="sidebar-brand">
                <a href="{{ route('admin.dashboard') }}" class="text-decoration-none " style="color: bleu;">
                    <i class="fas fa-shield-alt me-2"></i>
                    Évoluation Forever
                </a>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="sidebar-nav-link active">
                        <i class="fas fa-tachometer-alt"></i>
                        Dashboard
                    </a>
                </li>
                
                <!-- Gestion Immobilière -->
                <li class="sidebar-nav-item">
                    <a href="#immobilierCollapse" class="sidebar-nav-link" data-bs-toggle="collapse">
                        <i class="fas fa-building"></i>
                        Immobilier
                        <i class="fas fa-angle-down ms-auto"></i>
                    </a>
                    <div class="collapse show" id="immobilierCollapse">
                        <ul class="sidebar-nav">
<li class="sidebar-nav-item">
    <a href="{{ route('admin.bienimmos.index') }}" class="sidebar-nav-link">
        <i class="fas fa-home"></i>
        Propriétés et Contrats
    </a>
</li>
                         <li class="sidebar-nav-item">
                                <a href="{{ route('admin.reservations.index') }}" class="sidebar-nav-link">
                                    <i class="fas fa-file-contract"></i>
                                    Réservations
                                </a>
                            </li> 
                            {{-- <li class="sidebar-nav-item">
                                <a href="#" class="sidebar-nav-link">
                                    <i class="fas fa-money-bill-wave"></i>
                                    Paiements
                                </a>
                            </li> --}}
                        </ul>
                    </div>
                </li>
                
                <!-- Événementiel -->
                <li class="sidebar-nav-item">
                    <a href="#eventCollapse" class="sidebar-nav-link" data-bs-toggle="collapse">
                        <i class="fas fa-calendar-alt"></i>
                        Événementiel
                        <i class="fas fa-angle-down ms-auto"></i>
                    </a>
                    <div class="collapse" id="eventCollapse">
                        <ul class="sidebar-nav">
                            <li class="sidebar-nav-item">
                                <a href="{{ route('admin.events.index') }}" class="sidebar-nav-link">
                                    <i class="fas fa-chair"></i>
                                    Accessoires et Décoration
                                </a>
                            </li>
                            {{-- <li class="sidebar-nav-item">
                                <a href="#" class="sidebar-nav-link">
                                    <i class="fas fa-paint-brush"></i>
                                    Décoration
                                </a>
                            </li>
                            <li class="sidebar-nav-item">
                                <a href="#" class="sidebar-nav-link">
                                    <i class="fas fa-calendar-check"></i>
                                    Événements
                                </a>
                            </li> --}}
                        </ul>
                    </div>
                </li>
                
                <!-- Location de Voitures -->
                <li class="sidebar-nav-item">
                    <a href="#voitureCollapse" class="sidebar-nav-link" data-bs-toggle="collapse">
                        <i class="fas fa-car"></i>
                        Location Voitures
                        <i class="fas fa-angle-down ms-auto"></i>
                    </a>
                    <div class="collapse" id="voitureCollapse">
                        <ul class="sidebar-nav">
                            <li class="sidebar-nav-item">
                                <a href="{{ route('admin.cars.index') }}" class="sidebar-nav-link">
                                    <i class="fas fa-car-side"></i>
                                    Véhicules
                                </a>
                            </li>
                            <li class="sidebar-nav-item">
                                <a href="#" class="sidebar-nav-link">
                                    <i class="fas fa-clipboard-list"></i>
                                    Réservations
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                
                <!-- Pressing -->
                <li class="sidebar-nav-item">
                    <a href="#" class="sidebar-nav-link">
                        <i class="fas fa-tshirt"></i>
                        Pressing
                    </a>
                </li>
                
                <!-- SOBEBRA -->
                <li class="sidebar-nav-item">
                    <a href="#" class="sidebar-nav-link">
                        <i class="fas fa-shopping-basket"></i>
                        SOBEBRA
                    </a>
                </li>
                
                <!-- Déménagement -->
                <li class="sidebar-nav-item">
                    <a href="#" class="sidebar-nav-link">
                        <i class="fas fa-truck-moving"></i>
                        Déménagement
                    </a>
                </li>
                
                <!-- Administration -->
                <li class="sidebar-nav-item mt-4">
                    <a href="#adminCollapse" class="sidebar-nav-link" data-bs-toggle="collapse">
                        <i class="fas fa-cog"></i>
                        Administration
                        <i class="fas fa-angle-down ms-auto"></i>
                    </a>
                    <div class="collapse" id="adminCollapse">
                        <ul class="sidebar-nav">
                            {{-- <li class="sidebar-nav-item">
                                <a href="#" class="sidebar-nav-link">
                                    <i class="fas fa-users"></i>
                                    Utilisateurs
                                </a>
                            </li>
                            <li class="sidebar-nav-item">
                                <a href="#" class="sidebar-nav-link">
                                    <i class="fas fa-chart-line"></i>
                                    Statistiques
                                </a>
                            </li> --}}
                            <li class="sidebar-nav-item">
                                <a href="#" class="sidebar-nav-link">
                                    <i class="fas fa-file-invoice-dollar"></i>
                                    Facturation
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        
        <!-- Main Content -->
        <div class="main-content w-100">

            <!-- Header -->
            <div class="header">
                <h1 class="header-title">Tableau de Bord</h1>
                <div class="user-profile" style="position:relative;">
                    <div class="user-avatar" id="userAvatar" style="cursor:pointer;" onclick="document.getElementById('userMenu').classList.toggle('show');">AD</div>
                    <div id="userMenu" class="dropdown-menu" style="position:absolute; right:0; top:40px; min-width:150px; display:none; background:#fff; border:1px solid #ddd; border-radius:6px; box-shadow:0 2px 8px rgba(0,0,0,0.1); z-index:1000;">
                        <form method="POST" action="{{ route('logout') }}" style="margin:0;">
                            @csrf
                            <button type="submit" class="dropdown-item" style="width:100%; border:none; background:none; padding:10px 20px; text-align:left; cursor:pointer;">Déconnexion</button>
                        </form>
                    </div>
                </div>
                <script>
                document.addEventListener('click', function(e) {
                    var avatar = document.getElementById('userAvatar');
                    var menu = document.getElementById('userMenu');
                    if (!avatar.contains(e.target) && !menu.contains(e.target)) {
                        menu.classList.remove('show');
                        menu.style.display = 'none';
                    } else if (avatar.contains(e.target)) {
                        menu.classList.toggle('show');
                        menu.style.display = menu.classList.contains('show') ? 'block' : 'none';
                    }
                });
                </script>
            </div>






