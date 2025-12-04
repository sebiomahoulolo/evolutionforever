<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Évolution Forever</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="déménagement, service de déménagement, déménageurs professionnels" name="keywords">
    <meta content="Confiez-nous votre déménagement pour une expérience sereine et sans stress. Services pour particuliers et entreprises." name="description">

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
</head>

<body>
    @include('components.navbar')

    {{-- En-tête de la Page --}}
    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">Service de Déménagement</h1>
                <a href="/" class="h5 text-white">Accueil</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="#" class="h5 text-white">Déménagement</a>
            </div>
        </div>
    </div>

    <!-- Section Présentation du Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Votre Déménagement</h5>
                        <h1 class="mb-0">La tranquillité d'esprit, notre priorité absolue</h1>
                    </div>
                    <p class="mb-4">Déménager est une étape importante. Notre mission est de la rendre aussi simple et sereine que possible. Avec une équipe d'experts et un équipement de pointe, nous gérons chaque aspect de votre déménagement avec le plus grand soin, de l'emballage à l'installation dans votre nouveau chez-vous.</p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Équipe qualifiée et courtoise</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Assurance complète incluse</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Matériel de protection moderne</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Devis gratuit et transparent</h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mt-4 wow fadeIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Planifiez votre déménagement dès aujourd'hui</h5>
                            <h4 class="text-primary mb-0">+229 0147523655 / 0142317867</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                    <div class="position-relative h-100">
                        {{-- IMPORTANT: Remplacez cette image par une photo de votre équipe ou d'un camion de déménagement --}}
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="img/menage.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Section Présentation du Service End -->

    <!-- Section Nos Prestations Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Nos Services</h5>
                <h1 class="mb-0">Des solutions sur-mesure pour chaque besoin</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-home text-white"></i>
                        </div>
                        <h4 class="mb-3">Déménagement Résidentiel</h4>
                        <p class="m-0">Que vous changiez d'appartement ou de maison, nous assurons un transport sécurisé de vos biens personnels.</p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-building text-white"></i>
                        </div>
                        <h4 class="mb-3">Déménagement d'Entreprise</h4>
                        <p class="m-0">Nous planifions et exécutons le transfert de vos bureaux pour minimiser l'impact sur votre activité.</p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-box-open text-white"></i>
                        </div>
                        <h4 class="mb-3">Services Complémentaires</h4>
                        <p class="m-0">Emballage, démontage/remontage de meubles, location de garde-meubles. Nous avons la solution.</p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Section Nos Prestations End -->

    <!-- Section Appel à l'Action (Quote) Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Obtenir un Devis</h5>
                        <h1 class="mb-0">Prêt à Déménager en Toute Sérénité ?</h1>
                    </div>
                    <p class="mb-4">Chaque déménagement est unique. Remplissez notre formulaire en quelques clics pour recevoir une estimation gratuite et personnalisée, sans engagement. Notre équipe vous répondra rapidement pour planifier une visite technique si nécessaire et affiner votre devis.</p>
                </div>
                <div class="col-lg-5">
                    <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
<form method="POST" action="{{ route('demenagement.store') }}">
    @csrf
    <div class="row g-3">
        <!-- Nom -->
        <div class="col-xl-12">
            <input type="text" name="nom" class="form-control bg-light border-0" placeholder="Votre Nom" style="height: 55px;">
        </div>

        <!-- Email -->
        <div class="col-12">
            <input type="email" name="email" class="form-control bg-light border-0" placeholder="Votre Email" style="height: 55px;">
        </div>
<!-- Téléphone -->
<div class="col-12">
    <input type="text" name="telephone" class="form-control bg-light border-0" placeholder="Votre Téléphone" style="height: 55px;">
</div>

        <!-- Type de déménagement -->
        <div class="col-12">
            <select name="type_demenagement" class="form-select bg-light border-0" style="height: 55px;">
                <option selected disabled>Type de Déménagement</option>
                <option value="Résidentiel">Résidentiel</option>
                <option value="Entreprise">Entreprise</option>
                <option value="Autre">Autre</option>
            </select>
        </div>

        <!-- Volume -->
        <div class="col-12">
            <select name="volume" class="form-select bg-light border-0" style="height: 55px;">
                <option selected disabled>Volume à déménager</option>
                <option value="Petit">Petit</option>
                <option value="Moyen">Moyen</option>
                <option value="Grand">Grand</option>
            </select>
        </div>

        <!-- Adresse -->
        <div class="col-12">
            <textarea name="adresse" class="form-control bg-light border-0" rows="3" placeholder="Adresse de départ et d'arrivée..."></textarea>
        </div>

        <!-- Besoin d'emballage -->
        <div class="col-12">
            <select name="emballage" class="form-select bg-light border-0" style="height: 55px;">
                <option selected disabled>Besoin d’emballage ou démontage ?</option>
                <option value="Oui">Oui</option>
                <option value="Non">Non</option>
            </select>
        </div>

        <!-- Date souhaitée -->
        <div class="col-12">
            <input type="date" name="date_souhaitee" class="form-control bg-light border-0" style="height: 55px;">
        </div>

        <!-- Bouton -->
        <div class="col-12">
            <button class="btn btn-dark w-100 py-3" type="submit">Recevoir mon Devis</button>
        </div>
    </div>
</form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Section Appel à l'Action (Quote) End -->



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
