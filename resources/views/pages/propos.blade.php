<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Évolution Forever</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

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

        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">A propos de nous</h1>
                    <a href="" class="h5 text-white">Accueil</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">A propos</a>
                </div>
            </div>
        </div>

    <!-- Navbar End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">A propos de nous</h5>
                        <h1 class="mb-0">Votre entreprise multiservice avec 8 ans d'expériences</h1>
                    </div>
                    <p class="mb-4">Évolution Forever est une entreprise multiservices spécialisée dans la location de voitures, la gestion immobilière, le pressing et l'événementiel. Nous avons pour mission de vous simplifier la vie grâce à des services efficaces, modernes et accessibles.</p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Récompensé</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Personnel professionnel</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Assistance 24h/24 et 7j/7</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Prix équitables</h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Appelez pour poser n'importe quelle question</h5>
                            <h4 class="text-primary mb-0">+229 0147523655 / 0142317867</h4>
                        </div>
                    </div>
                    <a href="{{ route('pages.contact') }}" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Demander un devis</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/about.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->











    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #1a4f8c;
            --secondary-color: #3498db;
            --accent-color: #f39c12;
            --light-color: #f8f9fa;
            --dark-color: #343a40;
            --pdg-glow: 0 0 15px rgba(243, 156, 18, 0.6);
        }
        
        body {
            background-color: #f5f7fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
        }
        
        #fhc-group-organigram {
            padding: 3rem 0;
        }
        
        .blue-border-shadow {
            border: 1px solid var(--secondary-color) !important;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 5px 25px rgba(52, 152, 219, 0.15);
            background: white;
        }
        
        legend {
            width: auto;
            padding: 0 15px;
            margin-left: 20px;
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--primary-color);
        }
        
        .person-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            height: 100%;
            margin-bottom: 25px;
            position: relative;
        }
        
        .person-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }
        
        .person-card.pdg-card {
            border: 2px solid var(--accent-color);
            box-shadow: var(--pdg-glow);
        }
        
        .person-card.pdg-card:hover {
            box-shadow: 0 0 20px rgba(243, 156, 18, 0.8), 0 8px 20px rgba(0, 0, 0, 0.15);
        }
        
        .person-card.pdg-card::before {
            content: "\f521";
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            position: absolute;
            top: -12px;
            right: 15px;
            background: var(--accent-color);
            color: white;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 10;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }
        
        .card-header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 15px;
            text-align: center;
            position: relative;
        }
        
        .person-image-container {
            width: 110px;
            height: 110px;
            margin: 0 auto;
            position: relative;
            margin-top: 10px;
        }
        
        .person-image {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid white;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
        }
        
        .pdg-card .person-image {
            border: 3px solid var(--accent-color);
        }
        
        .card-body {
            padding: 20px;
        }
        
        .person-info p {
            margin-bottom: 8px;
            line-height: 1.4;
        }
        
        .person-info b {
            color: var(--primary-color);
        }
        
        .person-description {
            margin-top: 15px;
            padding-top: 15px;
            border-top: 1px dashed #ddd;
            font-size: 0.9rem;
            color: #666;
            max-height: 120px;
            overflow-y: auto;
        }
        
        .person-description::-webkit-scrollbar {
            width: 5px;
        }
        
        .person-description::-webkit-scrollbar-thumb {
            background: var(--secondary-color);
            border-radius: 10px;
        }
        
        .role-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: rgba(255, 255, 255, 0.2);
            padding: 3px 10px;
            border-radius: 20px;
            font-size: 0.75rem;
            backdrop-filter: blur(4px);
        }
        
        /* Responsive adjustments */
        @media (max-width: 992px) {
            .person-image-container {
                width: 100px;
                height: 100px;
            }
        }
        
        @media (max-width: 768px) {
            .blue-border-shadow {
                padding: 1.5rem;
            }
            
            legend {
                font-size: 1.3rem;
            }
            
            .card-body {
                padding: 15px;
            }
        }
        
        @media (max-width: 576px) {
            .person-image-container {
                width: 90px;
                height: 90px;
            }
            
            .person-card.pdg-card::before {
                top: -10px;
                right: 10px;
                width: 25px;
                height: 25px;
                font-size: 0.8rem;
            }
        }
    </style>

    {{-- <section id="fhc-group-organigram">
        <div class="container">
            <fieldset class="blue-border-shadow">
                <legend>Les personnelles de Evolutions Forever</legend>
                <div class="row">
                    <!-- PDG - Card spéciale -->
                    <div class="col-xl-4 col-lg-6 col-md-6 mb-4">
                        <div class="person-card pdg-card">
                            <div class="card-header">
                                <span class="role-badge">PDG</span>
                                <div class="person-image-container">
                                    <img src="assets/images/d73995600f509ef21f967ae268520313_3 - Adama Dimitri ACCLOMBESSIKPE.jpeg" alt="Adama Dimitri ACCLOMBESSIKPE" class="person-image">
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="person-info">
                                    <p><b>Nom :</b> ACCLOMBESSIKPE</p>
                                    <p><b>Prénom :</b> Adama Dimitri</p>
                                    <p><b>Titre :</b> Actionnaire</p>
                                    <p><b>Poste :</b> Président Directeur Général (PDG)</p>
                                </div>
                                <div class="person-description">Notre entreprise vise à fournir des solutions innovantes et accessibles dans divers domaines, allant de l'éducation à l'immobilier, en passant par l'accompagnement professionnel. Nous souhaitons promouvoir l'éducation de qualité et offrir des opportunités de développement à tous.</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Autres membres -->
                    <div class="col-xl-4 col-lg-6 col-md-6 mb-4">
                        <div class="person-card">
                            <div class="card-header">
                                <span class="role-badge">Communication</span>
                                <div class="person-image-container">
                                    <img src="assets/images/PHOTO G  - gédéon sewade.png" alt="Gédéon SEWADE" class="person-image">
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="person-info">
                                    <p><b>Nom :</b> SEWADE</p>
                                    <p><b>Prénom :</b> Gédéon Prinsco</p>
                                    <p><b>Titre :</b> Actionnaire</p>
                                    <p><b>Poste :</b> Secrétariat Administratif / Service de Communication</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-4 col-lg-6 col-md-6 mb-4">
                        <div class="person-card">
                            <div class="card-header">
                                <span class="role-badge">Marketing</span>
                                <div class="person-image-container">
                                    <img src="assets/images/IMG_9357 - sacha diogo.jpeg" alt="Sacha DIOGO" class="person-image">
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="person-info">
                                    <p><b>Nom :</b> DIOGO</p>
                                    <p><b>Prénom :</b> Sacha Victoria Carine</p>
                                    <p><b>Titre :</b> Employé</p>
                                    <p><b>Poste :</b> Responsable Commerciale et Marketing</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-4 col-lg-6 col-md-6 mb-4">
                        <div class="person-card">
                            <div class="card-header">
                                <span class="role-badge">Informatique</span>
                                <div class="person-image-container">
                                    <img src="assets/images/WhatsApp Image 2024-07-12 à 19.19.54_8f990aff.jpg" alt="Mahoulolo SEBIO" class="person-image">
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="person-info">
                                    <p><b>Nom :</b> SEBIO</p>
                                    <p><b>Prénom :</b> Mahoulolo</p>
                                    <p><b>Titre :</b> Employé</p>
                                    <p><b>Poste :</b> Ingénieur d'exploitation informatique</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-4 col-lg-6 col-md-6 mb-4">
                        <div class="person-card">
                            <div class="card-header">
                                <span class="role-badge">Comptabilité</span>
                                <div class="person-image-container">
                                    <img src="assets/images/IMG_1250~2 - Stella Aifan.jpeg" alt="Stella AIFAN" class="person-image">
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="person-info">
                                    <p><b>Nom :</b> AIFAN</p>
                                    <p><b>Prénom :</b> Stella Hermione</p>
                                    <p><b>Titre :</b> Actionnaire</p>
                                    <p><b>Poste :</b> Comptable</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-4 col-lg-6 col-md-6 mb-4">
                        <div class="person-card">
                            <div class="card-header">
                                <span class="role-badge">Formation</span>
                                <div class="person-image-container">
                                    <img src="assets/images/Snapchat-1414109871 - Blaise EDAH.jpg" alt="Blaise EDAH" class="person-image">
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="person-info">
                                    <p><b>Nom :</b> EDAH</p>
                                    <p><b>Prénom :</b> Mahouto Blaise</p>
                                    <p><b>Titre :</b> Actionnaire</p>
                                    <p><b>Poste :</b> Assistant comptable et chargé des formations</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
        </div>
    </section> --}}



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
