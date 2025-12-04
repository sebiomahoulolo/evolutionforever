<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Évolution Forever</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Agence immobilière premium, propriétés de luxe, appartements, villas" name="keywords">
    <meta content="Découvrez notre sélection exclusive de biens immobiliers haut de gamme. Trouvez la propriété parfaite pour vos besoins." name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <link rel="icon" href="/img/logo.png" type="image/png">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #0d6efd;
            --secondary-color: #f8f9fa;
            --accent-color: #25D366;
        }
        
        /* Styles généraux */
        body {
            font-family: 'Rubik', sans-serif;
            color: #333;
        }
        
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Nunito', sans-serif;
            font-weight: 700;
        }
        
        .bg-header {
            background: linear-gradient(rgba(15, 66, 112, 0.9), rgba(15, 66, 112, 0.9)), 
                        url('https://images.unsplash.com/photo-1560518883-ce09059eeffa?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') no-repeat center center;
            background-size: cover;
            position: relative;
        }
        
        /* Styles des propriétés */
        .property-item {
            transition: all 0.3s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        
        .property-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.15);
        }
        
        .property-image-container {
            height: 250px;
            overflow: hidden;
            position: relative;
        }
        
        .property-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .property-item:hover .property-image {
            transform: scale(1.05);
        }
        
        .property-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            padding: 1.5rem;
            background: white;
        }
        
        .property-details {
            flex-grow: 1;
        }
        
        .price-tag {
            color: var(--primary-color);
            font-weight: 600;
            font-size: 1.25rem;
        }
        
        /* Styles du filtre */
        .filter-card {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            margin-bottom: 3rem;
        }
        
        .filter-card .card-header {
            background-color: var(--primary-color);
            padding: 1rem 1.5rem;
        }
        
        .filter-card .form-control, 
        .filter-card .form-select {
            border: 1px solid var(--primary-color);
            padding: 0.75rem 1rem;
            border-radius: 6px;
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            padding: 0.75rem 1.5rem;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            background-color: #0b5ed7;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(13, 110, 253, 0.3);
        }
        
        /* Bouton WhatsApp */
        .whatsapp-float {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color: var(--accent-color);
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
            z-index: 1000;
            transition: all 0.3s ease;
        }
        
        .whatsapp-float:hover {
            background-color: #1ebe5d;
            transform: scale(1.1);
        }
        
        /* Animations */
        .wow {
            visibility: visible !important;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .fadeIn {
            animation-name: fadeIn;
            animation-duration: 0.8s;
        }
        
        /* Section description */
        .about-img {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        
        .feature-item {
            margin-bottom: 0.5rem;
        }
        
        .feature-item i {
            color: var(--primary-color);
            font-size: 1.1rem;
        }
    </style>
</head>

<body>
    @include('components.navbar')

    <!-- Hero Header -->
    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">Nos Biens Immobiliers</h1>
                <nav aria-label="breadcrumb" class="d-inline-block">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="/" class="text-white">Accueil</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Nos Propriétés</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container-fluid py-5">
        <div class="container">
            <!-- Filtre de recherche -->
            <div class="filter-card wow fadeInUp" data-wow-delay="0.1s">
                <div class="card">
                    <div class="card-header text-white" style="  background-color: #25D366; color:white
">
                        <h5 class="mb-0"><i class="fas fa-filter me-2"></i>Recherche avancée</h5>
                    </div>
                    <div class="card-body">
                        <form method="GET" action="{{ route('pages.immo') }}" class="row g-3">
                            <div class="col-md-3">
                                <label for="titre" class="form-label fw-bold">Type de bien</label>
                                <input type="text" class="form-control" id="titre" name="titre" 
                                       value="{{ request('titre') }}" placeholder="Appartement, Villa...">
                            </div>
                            <div class="col-md-3">
                                <label for="adresse" class="form-label fw-bold">Localisation</label>
                                <input type="text" class="form-control" id="adresse" name="adresse" 
                                       value="{{ request('adresse') }}" placeholder="Ville, Quartier...">
                            </div>
                            <div class="col-md-2">
                                <label for="type" class="form-label fw-bold">Transaction</label>
                                <select class="form-select" id="type" name="type">
                                    <option value="">Tous types</option>
                                    <option value="location" {{ request('type') == 'location' ? 'selected' : '' }}>Location</option>
                                    <option value="vente" {{ request('type') == 'vente' ? 'selected' : '' }}>Vente</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label for="prix" class="form-label fw-bold">Budget max (FCFA)</label>
                                <input type="number" class="form-control" id="prix" name="prix" 
                                       value="{{ request('prix') }}" min="0" placeholder="Prix maximum">
                            </div>
                            <div class="col-md-2 d-flex align-items-end">
                                <button type="submit" class="btn  w-100" style="  background-color: #25D366;color:white
">
                                    <i class="fas fa-search me-2"></i>Filtrer
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Section Description -->
            <div class="row g-5 align-items-center mb-5 wow fadeIn" data-wow-delay="0.3s">
                <div class="col-lg-6">
                    <div class="about-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Nos biens immobiliers">
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="text-primary mb-4">Notre Sélection Immobilière Exclusive</h2>
                    <p class="mb-4">Chez Évolution Forever, nous mettons à votre disposition une collection soigneusement sélectionnée de propriétés répondant aux standards les plus élevés du marché. Chaque bien que nous proposons a été rigoureusement inspecté pour garantir qualité, confort et sécurité.</p>
                    
                    <div class="row g-3 mb-4">
                        <div class="col-sm-6">
                            <div class="feature-item d-flex align-items-center">
                                <i class="fa fa-check-circle text-primary me-2"></i>
                                <span>Maisons modernes et villas spacieuses</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="feature-item d-flex align-items-center">
                                <i class="fa fa-check-circle text-primary me-2"></i>
                                <span>Appartements haut de gamme</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="feature-item d-flex align-items-center">
                                <i class="fa fa-check-circle text-primary me-2"></i>
                                <span>Terrains viabilisés</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="feature-item d-flex align-items-center">
                                <i class="fa fa-check-circle text-primary me-2"></i>
                                <span>Locaux commerciaux premium</span>
                            </div>
                        </div>
                    </div>
                    
                    <p class="mb-4">Notre équipe d'experts est à votre écoute pour vous guider dans votre recherche de bien idéal, que ce soit pour investir, habiter ou développer votre activité professionnelle.</p>
                    <a class="btn  py-3 px-4" href="#properties" style="  background-color: #25D366; color:white
" >
                        <i class="fas fa-eye me-2"></i>Découvrir nos biens
                    </a>
                </div>
            </div>

            <!-- Liste des propriétés -->
            <div id="properties" class="wow fadeInUp" data-wow-delay="0.5s">
                <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 700px;">
                    <h5 class="fw-bold text-primary text-uppercase">Nos Références</h5>
                    <h2 class="mb-0">Découvrez notre sélection de propriétés</h2>
                </div>
                
                <div class="row g-4">
                    @foreach($bienimmos as $bien)
                    <div class="col-lg-4 col-md-6">
                        <div class="property-item rounded overflow-hidden h-100">
                            <div class="property-image-container">
                                @php
                                    $photos = is_array($bien->photos) ? $bien->photos : json_decode($bien->photos, true);
                                    $mainPhoto = isset($photos[0]) ? $photos[0] : ($bien->photo1 ?? null);
                                @endphp
                                <img class="property-image" src="{{ $mainPhoto ? asset($mainPhoto) : asset('img/property-default.jpg') }}" alt="{{ $bien->titre }}">
                                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">{{ $bien->statut ?? 'À louer' }}</div>
                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">{{ $bien->type ?? 'Bien immobilier' }}</div>
                            </div>
                            <div class="property-content">
                                <div class="property-details">
                                    <h5 class="price-tag mb-3" style="color:#25D366 "> Prix: {{ number_format($bien->prix ?? 0, 0, ',', ' ') }} FCFA</h5>
                                    <a class="d-block h5 mb-2" href="{{ route('pages.bien-detail', $bien->id) }}">{{ $bien->titre }}</a>
                                    <p><i class="fa fa-map-marker-alt text-primary me-2"></i>{{ $bien->adresse ?? '' }}</p>
                                </div>
                                <div class="d-flex border-top mt-3 pt-3">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>{{ $bien->surface  }}</small>
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>{{ $bien->chambres }}</small>
                                    <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>{{ $bien->salles_de_bain  }} </small>
                                </div>
                            </div>
                            <a href="{{ route('pages.bien-detail', $bien->id) }}" class="btn py-2 w-100" style="background-color: #25D366; color:white">
                                <i class="fas fa-info-circle me-2" ></i>Voir détails
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
                
                <div class="text-center mt-5">
                    <a href="{{ route('pages.immo') }}" class="btn  py-3 px-5" style="background-color: #25D366; color:white">
                        <i class="fas fa-list me-2"></i>Voir tous nos biens
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bouton WhatsApp -->
    <a href="https://wa.me/2290147523655 " class="whatsapp-float" target="_blank" rel="noopener noreferrer" aria-label="Contactez-nous sur WhatsApp">
        <i class="fab fa-whatsapp fa-2x"></i>
    </a>

    @include('components.footer')

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
    
    <script>
        // Initialisation des animations
        new WOW().init();
        
        // Smooth scrolling pour les ancres
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>