<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Évolution Forever</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Service de pressing, blanchisserie, nettoyage à sec" name="keywords">
    <meta content="Découvrez notre service de pressing et blanchisserie haut de gamme pour prendre soin de vos vêtements et votre linge de maison." name="description">

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
    {{-- Spinner, Navbar, etc. --}}
    @include('components.navbar')

    {{-- En-tête de la Page --}}
    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">Service Pressing</h1>
                <a href="/" class="h5 text-white">Accueil</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="#" class="h5 text-white">Pressing</a>
            </div>
        </div>
    </div>

    <!-- Section Présentation du Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Notre Service Pressing</h5>
                <h1 class="mb-0">La Qualité et le Soin que Vos Vêtements Méritent</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-tshirt text-white"></i>
                            </div>
                            <h4>Nettoyage Expert</h4>
                            <p class="mb-0">Nous utilisons des technologies de pointe pour un nettoyage à sec et une blanchisserie qui respectent vos textiles les plus délicats.</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-shield-alt text-white"></i>
                            </div>
                            <h4>Contrôle Qualité</h4>
                            <p class="mb-0">Chaque article est minutieusement inspecté pour garantir une propreté impeccable et une finition parfaite avant de vous être rendu.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="img/pressing.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-shipping-fast text-white"></i>
                            </div>
                            <h4>Service Rapide</h4>
                            <p class="mb-0">Profitez de notre service de collecte et de livraison à domicile pour un confort maximal. Vos vêtements, propres et frais, sans effort.</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-leaf text-white"></i>
                            </div>
                            <h4>Approche Écologique</h4>
                            <p class="mb-0">Nous nous engageons à utiliser des produits et des procédés respectueux de l'environnement pour un nettoyage durable.</p>
                        </div>
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
                <h5 class="fw-bold text-primary text-uppercase">Nos Prestations</h5>
                <h1 class="mb-0">Un Soin Adapté à Chaque Textile</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-user-tie text-white"></i>
                        </div>
                        <h4 class="mb-3">Vêtements Professionnels</h4>
                        <p class="m-0">Costumes, tailleurs, chemises. Une présentation impeccable pour une confiance renouvelée.</p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-couch text-white"></i>
                        </div>
                        <h4 class="mb-3">Linge de Maison</h4>
                        <p class="m-0">Draps, couettes, rideaux, nappes. Retrouvez la fraîcheur et la propreté de votre intérieur.</p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-vest-patches text-white"></i>
                        </div>
                        <h4 class="mb-3">Tissus Délicats & Cuir</h4>
                        <p class="m-0">Soie, cachemire, robes de soirée, cuir et daim. Un traitement spécialisé pour vos pièces les plus précieuses.</p>
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
                        <h5 class="fw-bold text-primary text-uppercase">Demander un Devis</h5>
                        <h1 class="mb-0">Besoin d'un Service de Pressing de Qualité ?</h1>
                    </div>
                    <p class="mb-4">Simplifiez-vous la vie avec notre service de pressing. Obtenez un devis gratuit et personnalisé pour le nettoyage de vos articles. Remplissez le formulaire et notre équipe vous recontactera dans les plus brefs délais.</p>
                    <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Appelez-nous pour toute question</h5>
                            <h4 class="text-primary mb-0">+229 0147523655 / 0142317867</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                       <form action="{{ route('devis.store') }}" method="POST">
    @csrf
    <div class="row g-3">
        <div class="col-xl-12">
            <input type="text" name="nom" class="form-control bg-light border-0" placeholder="Votre Nom" style="height: 55px;" required>
        </div>

        <div class="col-12">
            <input type="email" name="email" class="form-control bg-light border-0" placeholder="Votre Email" style="height: 55px;" required>
        </div>

        <!-- Nouveau champ : Numéro de téléphone -->
        <div class="col-12">
            <input type="text" name="telephone" class="form-control bg-light border-0" placeholder="Votre Numéro de Téléphone" style="height: 55px;" required>
        </div>

        <div class="col-12">
            <select name="service" class="form-select bg-light border-0" style="height: 55px;" required>
                <option value="">Sélectionnez un Service</option>
                <option value="Nettoyage à Sec">Nettoyage à Sec</option>
                <option value="Blanchisserie">Blanchisserie</option>
                <option value="Tissus Délicats">Tissus Délicats</option>
            </select>
        </div>

        <div class="col-12">
            <input type="text" name="type_vetements" class="form-control bg-light border-0" placeholder="Type de vêtements / articles" style="height: 55px;" required>
        </div>

        <div class="col-12">
            <input type="number" name="quantite" class="form-control bg-light border-0" placeholder="Quantité estimée" style="height: 55px;" required>
        </div>

        <div class="col-12">
            <select name="livraison" class="form-select bg-light border-0" style="height: 55px;" required>
                <option value="">Besoin de livraison / retrait à domicile ?</option>
                <option value="Oui">Oui</option>
                <option value="Non">Non</option>
            </select>
        </div>

        <div class="col-12">
            <select name="frequence" class="form-select bg-light border-0" style="height: 55px;" required>
                <option value="">Fréquence</option>
                <option value="Ponctuel">Ponctuel</option>
                <option value="Régulier">Régulier</option>
            </select>
        </div>

        <div class="col-12">
            <textarea name="message" class="form-control bg-light border-0" rows="3" placeholder="Message"></textarea>
        </div>

        <div class="col-12">
            <button class="btn btn-dark w-100 py-3" type="submit">Demander un Devis</button>
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
