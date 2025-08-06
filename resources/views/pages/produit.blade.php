<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Nos Produits SOBEBRA - Fierté du Bénin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="SOBEBRA, La Béninoise, Castel, Possotomè, Coca-Cola Bénin" name="keywords">
    <meta content="Découvrez la gamme complète des produits de la SOBEBRA, leader des boissons au Bénin. Bières, boissons gazeuses, eaux minérales et plus encore." name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

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
                <h1 class="display-4 text-white animated zoomIn">Nos Produits SOBEBRA</h1>
                <a href="/" class="h5 text-white">Accueil</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="{{ route('pages.produit') }}" class="h5 text-white">Produits</a>
            </div>
        </div>
    </div>

    <!-- Section Présentation SOBEBRA Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">La Fierté du Bénin</h5>
                        <h1 class="mb-0">SOBEBRA, au cœur de chaque célébration</h1>
                    </div>
                    <p class="mb-4">Depuis des décennies, la Société Béninoise de Brasseries (SOBEBRA) accompagne les moments de vie des Béninois avec des boissons de qualité supérieure. Ancrée dans le patrimoine national, notre entreprise s'engage à offrir des produits d'exception, brassés avec savoir-faire et distribués sur l'ensemble du territoire.</p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Qualité Inégalée</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Acteur Économique Majeur</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Distribution Nationale</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Engagement Communautaire</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5  wow zoomIn" data-wow-delay="0.9s" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <!-- IMPORTANT: Remplacez cette image par une belle photo de produits SOBEBRA -->
                        <img class="position-absolute w-100 h-80 rounded wow zoomIn" data-wow-delay="0.1s" src="img/sobebra.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Section Présentation SOBEBRA End -->

    <!-- Section Gamme de Produits Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Notre Gamme</h5>
                <h1 class="mb-0">Un choix pour chaque goût et chaque occasion</h1>
            </div>

            <!-- Catégorie Bières -->
            <h2 class="mb-4 text-primary wow fadeInUp">Nos Bières</h2>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <!-- IMPORTANT: Remplacez par l'image du produit -->
                        <img src="img/beninoise.png" alt="La Béninoise" class="img-fluid mb-4" style="max-height: 150px;">
                        <h4 class="mb-3">La Béninoise</h4>
                        <p class="m-0">La bière lager emblématique, symbole de partage et de convivialité. Légère et rafraîchissante.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <!-- IMPORTANT: Remplacez par l'image du produit -->
                        <img src="img/castel.png" alt="Castel Beer" class="img-fluid mb-4" style="max-height: 150px;">
                        <h4 class="mb-3">Castel Beer</h4>
                        <p class="m-0">Une bière blonde de renommée internationale, appréciée pour son goût fin et équilibré.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <!-- IMPORTANT: Remplacez par l'image du produit -->
                        <img src="img/beaufort.png" alt="Beaufort Lager" class="img-fluid mb-4" style="max-height: 150px;">
                        <h4 class="mb-3">Beaufort Lager</h4>
                        <p class="m-0">Une bière de prestige au caractère affirmé, pour les connaisseurs exigeants.</p>
                    </div>
                </div>
            </div>

            <!-- Catégorie Boissons Gazeuses -->
            <h2 class="mt-5 mb-4 text-primary wow fadeInUp">Nos Boissons Gazeuses</h2>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                         <!-- IMPORTANT: Remplacez par l'image du produit -->
                        <img src="img/coca.jpg" alt="Coca-Cola" class="img-fluid mb-4" style="max-height: 150px;">
                        <h4 class="mb-3">Gamme Coca-Cola</h4>
                        <p class="m-0">Le goût unique et original de Coca-Cola, Fanta, Sprite, disponible partout au Bénin.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                         <!-- IMPORTANT: Remplacez par l'image du produit -->
                        <img src="img/youki.jpg" alt="Youki" class="img-fluid mb-4" style="max-height: 150px;">
                        <h4 class="mb-3">Gamme Youki</h4>
                        <p class="m-0">La boisson pétillante aux arômes fruités intenses. Une explosion de saveurs pour tous.</p>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                         <!-- IMPORTANT: Remplacez par l'image du produit -->
                        <img src="img/xxl.jpg" alt="XXL Energy" class="img-fluid mb-4" style="max-height: 150px;">
                        <h4 class="mb-3">XXL Energy</h4>
                        <p class="m-0">Le coup de pouce énergétique pour booster vos journées et vos nuits.</p>
                    </div>
                </div>
            </div>

             <!-- Catégorie Eaux -->
             <h2 class="mt-5 mb-4 text-primary wow fadeInUp">Nos Eaux Minérales</h2>
             <div class="row g-5 justify-content-center">
                 <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                     <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                          <!-- IMPORTANT: Remplacez par l'image du produit -->
                         <img src="img/fifa.jpeg" alt="fifa" class="img-fluid mb-4" style="max-height: 150px;">
                         <h4 class="mb-3">FIFA</h4>
                         <p class="m-0">L'eau minérale naturelle. Une pureté et une saveur uniques.</p>
                     </div>
                 </div>
                 <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                     <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                           <!-- IMPORTANT: Remplacez par l'image du produit -->
                         <img src="img/aquabellle.jpeg" alt="Aquabelle" class="img-fluid mb-4" style="max-height: 150px;">
                         <h4 class="mb-3">Aquabelle</h4>
                         <p class="m-0">L'eau purifiée de source, idéale pour l'hydratation quotidienne de toute la famille.</p>
                     </div>
                 </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                     <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                           <!-- IMPORTANT: Remplacez par l'image du produit -->
                         <img src="img/comtesse.jpeg" alt="Aquabelle" class="img-fluid mb-4" style="max-height: 150px;">
                         <h4 class="mb-3">Comtesse</h4>
                         <p class="m-0">Une eau idéale pour l'hydratation quotidienne de toute la famille.</p>
                     </div>
                 </div>
             </div>
        </div>
    </div>
    <!-- Section Gamme de Produits End -->

    <!-- Section Appel à l'Action (Devenir partenaire) Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Contact Commercial</h5>
                        <h1 class="mb-0">Devenez Distributeur ou Partenaire SOBEBRA</h1>
                    </div>
                    <p class="mb-4">Vous êtes un grossiste, un gérant de bar, de restaurant ou un organisateur d'événements ? Rejoignez notre réseau de partenaires et bénéficiez de conditions avantageuses. Remplissez ce formulaire pour être contacté par notre équipe commerciale.</p>
                </div>
                <div class="col-lg-5">
                    <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                        <form>
                            <div class="row g-3">
                                <div class="col-xl-12">
                                    <input type="text" class="form-control bg-light border-0" placeholder="Nom de votre entreprise/établissement" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control bg-light border-0" placeholder="Votre Nom Complet" style="height: 55px;">
                                </div>
                                 <div class="col-12">
                                    <input type="email" class="form-control bg-light border-0" placeholder="Votre Email" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <select class="form-select bg-light border-0" style="height: 55px;">
                                        <option selected>Objet de votre demande</option>
                                        <option value="1">Devenir Distributeur</option>
                                        <option value="2">Commande en Gros</option>
                                        <option value="3">Sponsoring & Événementiel</option>
                                        <option value="4">Autre Information</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit">Envoyer la Demande</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Section Appel à l'Action End -->

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
