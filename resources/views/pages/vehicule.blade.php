<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Évolution Forever</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Agence immobilière et de services" name="description">

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
        /* Style personnalisé pour la page véhicules */
  
        
        .property-item {
            border: 1px solid #e9ecef;
            transition: all 0.3s;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .property-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .property-image-container {
            position: relative;
            overflow: hidden;
            height: 220px;
        }
        
        .property-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }
        
        .property-item:hover .property-image {
            transform: scale(1.05);
        }
        
        .property-content {
            padding: 20px;
            background: #fff;
        }
        
        .price-tag {
            font-weight: 700;
            font-size: 1.2rem;
        }
        
        .btn-details {
            background-color: #25D366;
            color: white;
            border-radius: 30px;
            padding: 8px 20px;
            font-weight: 600;
            transition: all 0.3s;
        }
        
        .btn-details:hover {
            background-color: #1da851;
            color: white;
            transform: translateY(-2px);
        }
        
        .feature-item {
            margin-bottom: 10px;
        }
        
        .feature-item i {
            font-size: 1.2rem;
        }
        
        @media (max-width: 767.98px) {
            .property-image-container {
                height: 180px;
            }
        }
    </style>
</head>

<body>
    @include('components.navbar')

    <!-- Hero Header -->
    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">Nos Véhicules</h1>
                <nav aria-label="breadcrumb" class="d-inline-block">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="/" class="text-white">Accueil</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Nos Véhicules</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5 align-items-center mb-5 wow fadeIn" data-wow-delay="0.3s">
                <div class="col-lg-6">
                    <div class="about-img position-relative overflow-hidden rounded">
    <img class="img-fluid w-100 rounded" src="{{ asset('Vehicules/pexels-mikebirdy-116675.jpg') }}" alt="Nos véhicules">
</div>

                </div>
                <div class="col-lg-6">
                    <h2 class="text-primary mb-4">Notre flotte de véhicules</h2>
                    <p class="mb-4">Découvrez notre sélection de véhicules récents, confortables et adaptés à tous vos besoins de déplacement. Que ce soit pour un usage professionnel ou personnel, nous avons le véhicule qu'il vous faut.</p>
                    <div class="row g-3 mb-4">
                        <div class="col-sm-6">
                            <div class="feature-item d-flex align-items-center">
                                <i class="fa fa-check-circle text-primary me-2"></i>
                                <span>Véhicules récents et bien entretenus</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="feature-item d-flex align-items-center">
                                <i class="fa fa-check-circle text-primary me-2"></i>
                                <span>Assurance et assistance incluses</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="feature-item d-flex align-items-center">
                                <i class="fa fa-check-circle text-primary me-2"></i>
                                <span>Tarifs compétitifs</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="feature-item d-flex align-items-center">
                                <i class="fa fa-check-circle text-primary me-2"></i>
                                <span>Large choix de modèles</span>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-details" href="#vehicules">
                        <i class="fas fa-eye me-2"></i>Découvrir nos véhicules
                    </a>
                </div>
            </div>

            <!-- Liste des véhicules -->
            <div id="vehicules" class="wow fadeInUp" data-wow-delay="0.5s">
                <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 700px;">
                    <h5 class="fw-bold text-primary text-uppercase">Notre flotte</h5>
                    <h2 class="mb-0">Découvrez nos véhicules disponibles</h2>
                </div>
                <div class="row g-4">
                    @foreach($vehicules as $vehicule)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="{{ $loop->index * 0.1 + 0.2 }}s">
                        <div class="property-item rounded overflow-hidden h-100">
                            <div class="property-image-container">
                                @php
                                    $photos = is_array($vehicule->photos) ? $vehicule->photos : json_decode($vehicule->photos, true);
                                    $mainPhoto = isset($photos[0]) ? $photos[0] : null;
                                @endphp
                                <img class="property-image" src="{{ $mainPhoto ? asset($mainPhoto) : asset('img/property-default.jpg') }}" alt="{{ $vehicule->marque }} {{ $vehicule->modele }}">
                                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">{{ $vehicule->statut ?? 'Disponible' }}</div>
                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">{{ $vehicule->marque }} {{ $vehicule->modele }}</div>
                            </div>
                            <div class="property-content">
                                <div class="property-details">
                                    <h5 class="price-tag mb-3">Année: {{ $vehicule->annee }}</h5>
                                    <a class="d-block h5 mb-2" href="#">{{ $vehicule->marque }} {{ $vehicule->modele }}</a>
                                    <p><i class="fa fa-car text-primary me-2"></i>Immatriculation: {{ $vehicule->immatriculation }}</p>
                                    <p><i class="fa fa-cogs text-primary me-2"></i>Type: {{ $vehicule->type }}</p>
                                    <div class="d-flex justify-content-between align-items-center mt-3">
                                        <span class="text-primary fw-bold">{{ $vehicule->prix ?? '' }} FCFA/jour</span>
                                        <a href="{{ route('vehicule.details', $vehicule->id) }}" class="btn btn-details">
                                            <i class="fas fa-info-circle me-1"></i> Voir plus
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

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
</body>

</html>