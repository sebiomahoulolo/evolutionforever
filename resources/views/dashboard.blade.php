<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Évolution Forever </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Gestion immobilière, Événementiel, Location de voitures, Pressing, Déménagement" name="keywords">
    <meta content="Évolution Forever - Votre partenaire multiservices pour la gestion immobilière, l'événementiel, la location de voitures et plus encore." name="description">

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
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Solutions complètes pour vos besoins</h1>
                            <a href="quote.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Devis gratuit</a>
                            <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contactez-nous</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Expertise et professionnalisme</h1>
                            <a href="{{ route('pages.contact') }}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Devis gratuit</a>
                            <a href="{{ route('pages.contact') }}" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contactez-nous</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Précédent</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Suivant</span>
            </button>
        </div>
    </div>
    <!-- Navbar & Carousel End -->

    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Évolution Forever</h5>
                        <h1 class="mb-0">Votre partenaire multiservices</h1>
                    </div>
                    <p class="mb-4">Évolution Forever est une entreprise spécialisée dans plusieurs domaines clés pour répondre à tous vos besoins :</p>
                    
                    <div class="row mb-4">
                        <div class="col-md-6"><a href="{{ route('pages.immo') }}">
                            <h4><i class="fa fa-home text-primary me-3"></i> Gestion Immobilière</h4>
                            <p>Gestion complète de vos biens locatifs : recrutement de locataires, recouvrement des loyers, location d'appartements meublés ou non.</p>
                       </a> </div>
                        <div class="col-md-6"><a href="{{ route('pages.evenments') }}">
                            <h4><i class="fa fa-calendar-check text-primary me-3"></i> Événementiel</h4>
                            <p>Location d'accessoires (chaises, tentes, ventilateurs, groupes électrogènes) et organisation complète d'événements.</p>
                       </a> </div>
                    </div>
                    
                    <div class="row mb-4">
                        <div class="col-md-6"><a href="{{ route('vehicule.index') }}">
                            <h4><i class="fa fa-car text-primary me-3"></i> Location de Voitures</h4>
                            <p>Parc de véhicules récents adaptés à tous vos besoins de déplacement.</p>
                        </a></div>
                        <div class="col-md-6"><a href="{{ route('pages.pressing') }}">
                            <h4><i class="fa fa-tshirt text-primary me-3"></i> Pressing</h4>
                            <p>Services de lavage, repassage et nettoyage à sec pour vos vêtements.</p>
                         </a> </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6"><a href="{{ route('pages.produit') }}">
                            <h4><i class="fa fa-store text-primary me-3"></i> SOBEBRA</h4>
                          <p>Vente de tous les produits de la marque SOBEBRA.</p>
                       </a>   </div>
                        <div class="col-md-6"><a href="{{ route('pages.demenagement') }}">
                            <h4><i class="fa fa-truck text-primary me-3"></i> Déménagement</h4>
                         <p>Service complet pour le transport de vos effets d'un point A à un point B.</p>
                         </a> </div>
                    </div>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/e36c8d6f.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Services Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Nos Services</h5>
                <h1 class="mb-0">Des solutions adaptées à vos besoins</h1>
            </div>
            <div class="row g-5">
                <!-- Gestion Immobilière -->
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-home text-white"></i>
                        </div>
                        <h4 class="mb-3">Gestion Immobilière</h4>
                        <p class="m-0">Gestion complète de vos biens locatifs avec services professionnels</p>
                       <img class="w-100" src="img/pexels-kindelmedia.jpg" alt="Image">
                        <a class="btn btn-lg btn-primary rounded" href="{{ route('pages.immo') }}">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Événementiel -->
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-calendar-alt text-white"></i>
                        </div>
                        <h4 class="mb-3">Événementiel</h4>
                        <p class="m-0">Location de matériel et organisation complète d'événements</p>
                        <img class="w-100" src="img/b55f.jpg" alt="Image">
                        <a class="btn btn-lg btn-primary rounded" href="{{ route('pages.evenments') }}">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Location de Voitures -->
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-car text-white"></i>
                        </div>
                        <h4 class="mb-3">Location de Voitures</h4>
                        <p class="m-0">Véhicules récents adaptés à tous vos besoins de transport</p>
                        <img class="w-100" src="img/OIP.webp" alt="Image">
                        <a class="btn btn-lg btn-primary rounded" href="{{ route('vehicule.index') }}">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Pressing -->
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-tshirt text-white"></i>
                        </div>
                        <h4 class="mb-3">Pressing</h4>
                        <p class="m-0">Services professionnels de nettoyage et entretien de vêtements</p>
                        <img class="w-100" src="img/14.21.46_6672dff6.jpg" alt="Image">
                        <a class="btn btn-lg btn-primary rounded" href="{{ route('pages.pressing') }}">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                
                <!-- SOBEBRA -->
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-store text-white"></i>
                        </div>
                        <h4 class="mb-3">SOBEBRA</h4>
                        <p class="m-0">Vente de tous les produits de la marque SOBEBRA</p>
                       <img class="w-100" src="img/863343.jpg" alt="Image">
                        <a class="btn btn-lg btn-primary rounded" href="{{ route('pages.produit') }}">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Déménagement -->
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-truck text-white"></i>
                        </div>
                        <h4 class="mb-3">Déménagement</h4>
                        <p class="m-0">Service complet pour le transport de vos effets personnels</p>
                        <img class="w-100" src="img/b3da10.jpg" alt="Image">
                        <a class="btn btn-lg btn-primary rounded" href="{{ route('pages.demenagement') }}">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->

    <!-- Contact Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Contactez-nous</h5>
                        <h1 class="mb-0">Besoin d'un service ? N'hésitez pas à nous contacter</h1>
                    </div>
                    <div class="row gx-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-4"><i class="fa fa-reply text-primary me-3"></i>Réponse sous 24h</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-4"><i class="fa fa-phone-alt text-primary me-3"></i>Assistance 24h/24</h5>
                        </div>
                    </div>
                    <p class="mb-4">Notre équipe est à votre disposition pour répondre à toutes vos questions et vous proposer les meilleures solutions adaptées à vos besoins.</p>
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
                        <form>
                            <div class="row g-3">
                                <div class="col-xl-12">
                                    <input type="text" class="form-control bg-light border-0" placeholder="Votre nom" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="email" class="form-control bg-light border-0" placeholder="Votre email" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <select class="form-select bg-light border-0" style="height: 55px;">
                                        <option selected>Sélectionnez un service</option>
                                        <option value="1">Gestion Immobilière</option>
                                        <option value="2">Événementiel</option>
                                        <option value="3">Location de Voitures</option>
                                        <option value="4">Pressing</option>
                                        <option value="5">SOBEBRA</option>
                                        <option value="6">Déménagement</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control bg-light border-0" rows="3" placeholder="Message"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit">Envoyer la demande</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

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