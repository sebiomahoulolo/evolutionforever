<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Évolution Forever</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="location événementiel, décoration mariage, organisation événement, accessoires événement" name="keywords">
    <meta content="Évolution Forever propose des services événementiels complets avec matériel haut de gamme, décoration personnalisée et organisation clé en main pour vos mariages, conférences et événements d'entreprise." name="description">

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
        .event-card {
            transition: all 0.3s;
            border: none;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            border-radius: 10px;
            overflow: hidden;
            height: 100%;
        }
        .event-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        }
        .event-img {
            height: 250px;
            object-fit: cover;
            width: 100%;
        }
        .service-icon {
            width: 80px;
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(13, 110, 253, 0.1);
            border-radius: 50%;
            margin-bottom: 20px;
        }
        .section-title h5 {
            position: relative;
            display: inline-block;
        }
        .section-title h5::after {
            position: absolute;
            content: "";
            width: 50px;
            height: 2px;
            bottom: -10px;
            left: 0;
            background: #0d6efd;
        }
        .gallery-item {
            margin-bottom: 30px;
            cursor: pointer;
        }
        .modal-img {
            max-height: 80vh;
        }
    </style>
</head>

<body>
    @include('components.navbar')

    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">Nos Services Événementiels</h1>
                <a href="" class="h5 text-white">Accueil</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h5 text-white">Événementiel</a>
            </div>
        </div>
    </div>

    <!-- Services Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 800px;">
                <h5 class="fw-bold text-primary text-uppercase">ÉVÉNEMENTIEL</h5>
                <h1 class="mb-4">Votre partenaire pour des événements réussis</h1>
                <p class="mb-0">Nous mettons à votre disposition des accessoires neufs, attrayants et résistants pour une meilleure organisation de vos événements. Notre équipe professionnelle assure des livraisons rapides avec une ponctualité irréprochable. Nous vous accompagnons également dans la décoration de vos lieux d'événements pour les rendre encore plus beaux et mémorables.</p>
            </div>
            <div class="row g-5">
                <!-- Service 1 -->
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-chair text-primary fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Location d'Accessoires</h4>
                        <p class="m-0">Matériel haut de gamme pour tous types d'événements</p>
                        <a class="btn btn-lg btn-primary rounded-pill mt-3" href="#gallery">Découvrir notre catalogue</a>
                    </div>
                </div>
                <!-- Service 2 -->
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-paint-brush text-primary fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Décoration Événementielle</h4>
                        <p class="m-0">Ambiance unique et personnalisée pour chaque occasion</p>
                        <a class="btn btn-lg btn-primary rounded-pill mt-3" href="#decoration">Voir nos réalisations</a>
                    </div>
                </div>
                <!-- Service 3 -->
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-calendar-check text-primary fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Organisation Complète</h4>
                        <p class="m-0">Gestion clé en main de votre événement</p>
                        <a class="btn btn-lg btn-primary rounded-pill mt-3" href="#formulaire">Demander un devis</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->



    <!-- Gallery Modal -->
    <div class="modal fade" id="galleryModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-transparent border-0">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close btn-close-white bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img src="" class="modal-img img-fluid rounded" id="galleryModalImage" alt="Image en grand format">
                </div>
            </div>
        </div>
    </div>

    <!-- Decoration Section Start -->
    <div class="container-fluid py-5 wow fadeInUp bg-light" data-wow-delay="0.1s" id="decoration">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Décoration</h5>
                        <h1 class="mb-0">Créez l'Ambiance Parfaite</h1>
                    </div>
                    <p class="mb-4">Notre équipe de décorateurs professionnels transforme vos lieux en espaces magiques pour vos événements spéciaux. Nous proposons des thèmes variés et personnalisés allant du classique élégant au moderne avant-gardiste.</p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Mariages élégants</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Anniversaires festifs</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Conférences professionnelles</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Événements d'entreprise</h5>
                        </div>
                    </div>
                    <a href="#formulaire" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Demander une décoration</a>
                </div>
                <div class="col-lg-7">
                    <div class="row g-3">
                        <div class="col-6">
                            <img class="img-fluid rounded wow zoomIn" data-wow-delay="0.1s" src="img/pexels-ywanphoto-57980.jpg" alt="Décoration de mariage élégant avec fleurs fraîches">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid rounded wow zoomIn" data-wow-delay="0.3s" src="img/pexels-pixabay-269140.jpg" alt="Salle de conférence professionnelle avec écran géant">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid rounded wow zoomIn" data-wow-delay="0.5s" src="img/pexels-pixabay-50675.jpg" alt="Anniversaire enfant coloré avec ballons">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid rounded wow zoomIn" data-wow-delay="0.7s" src="img/pexels-karolina-grabowska-5725863.jpg" alt="Événement d'entreprise moderne">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Decoration Section End -->




<div class="events-list">
    @foreach($events as $event)
        <div class="event-item">
            <h2 class="event-title">{{ $event->titre }}</h2>
            <p class="event-description">{{ $event->description }}</p>
            <div class="event-images">
                <img src="{{ asset($event->photo1) }}" alt="Photo 1 - {{ $event->titre }}" class="event-image">
                <img src="{{ asset($event->photo2) }}" alt="Photo 2 - {{ $event->titre }}" class="event-image">
            </div>
        </div>
    @endforeach
</div>
  
<style>
    .events-list {
    display: flex;
    flex-direction: column;
    gap: 2rem;
    padding: 1rem;
}

.event-item {
    border: 1px solid #ddd;
    padding: 1rem;
    border-radius: 8px;
    background-color: #f9f9f9;
}

.event-title {
    font-size: 1.5rem;
    font-weight: bold;
    margin-bottom: 0.5rem;
    color: #333;
}

.event-description {
    font-size: 1rem;
    margin-bottom: 1rem;
    color: #555;
}

.event-images {
    display: flex;
    gap: 1rem;
    justify-content: center;
    flex-wrap: wrap;
}

.event-image {
    width: 300px;
    height: 200px;
    object-fit: cover;
    border-radius: 6px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
}

</style>



    <!-- Event Form Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" id="formulaire">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-12">
                    <div class="section-title position-relative pb-3 mb-5 te!xt-center">
                        <h5 class="fw-bold text-primary text-uppercase">Demande de Service</h5>
                        <h1 class="mb-0">Formulaire de Réservation</h1>
                    </div>
                    <div class="bg-light rounded p-5">
<form action="{{ route('event.reserve.store') }}" method="POST">
    @csrf
    
    <!-- Messages d'alerte -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    
    @if($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Veuillez corriger les erreurs suivantes :</strong>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <label for="name" class="form-label">Nom complet*</label>
                                    <input type="text"  name="name"  class="form-control" id="name" placeholder="Votre nom" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label for="email" class="form-label">Email*</label>
                                    <input type="email"  name="email" class="form-control" id="email" placeholder="Votre email" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label for="phone" class="form-label">Téléphone*</label>
                                    <input type="tel" name="phone"  class="form-control" id="phone" placeholder="Votre numéro" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label for="event-type" class="form-label">Type d'événement*</label>
                                    <select name="event_type"  class="form-select" id="event-type" required>
                                        <option value="" selected disabled>Choisissez...</option>
                                        <option value="Mariage">Mariage</option>
                                        <option value="Anniversaire">Anniversaire</option>
                                        <option value="Conference">Conférence</option>
                                        <option value="Entreprise">Événement d'entreprise</option>
                                        <option value="Autre">Autre</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label for="event-date" class="form-label">Date de l'événement*</label>
                                    <input type="date" name="event_date" class="form-control" id="event-date" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label for="event-location" class="form-label">Lieu de l'événement*</label>
                                    <input type="text"  name="event_location" class="form-control" id="event-location" placeholder="Adresse complète" required>
                                </div>
                                <div class="col-12">
                                    <label for="attendees" class="form-label">Nombre de personnes estimées*</label>
                                    <input type="number" name="attendees" class="form-control" id="attendees" min="1" placeholder="Ex: 100" required>
                                </div>
                                
                                
                                
                               <div class="col-12">
    <label class="form-label">Équipements nécessaires</label>
    <div class="row">
        <div class="col-md-4">
            <div class="form-check">
                <input name="equipments[]" value="chaises" class="form-check-input" type="checkbox" id="chaises">
                <label class="form-check-label" for="chaises">Chaises</label>
            </div>
            <div class="form-check">
                <input name="equipments[]" value="tentes" class="form-check-input" type="checkbox" id="tentes">
                <label class="form-check-label" for="tentes">Tentes</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-check">
                <input name="equipments[]" value="sonorisation" class="form-check-input" type="checkbox" id="sono">
                <label class="form-check-label" for="sono">Sonorisation</label>
            </div>
            <div class="form-check">
                <input name="equipments[]" value="generateur" class="form-check-input" type="checkbox" id="generateur">
                <label class="form-check-label" for="generateur">Groupes électrogènes</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-check">
                <input name="equipments[]" value="eclairage" class="form-check-input" type="checkbox" id="eclairage">
                <label class="form-check-label" for="eclairage">Éclairage</label>
            </div>
            <div class="form-check">
                <input name="equipments[]" value="autres" class="form-check-input" type="checkbox" id="autres-equip">
                <label class="form-check-label" for="autres-equip">Autres équipements</label>
            </div>
        </div>
    </div>
</div>



                                <div class="col-12">
                                    <label for="needs" class="form-label">Besoins particuliers (décoration, service traiteur, hôtesses, etc.)</label>
                                    <textarea name="needs" class="form-control" id="needs" rows="4" placeholder="Décrivez vos besoins spécifiques..."></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Envoyer la demande</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Event Form End -->

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
        // Gallery Modal
        var galleryModal = document.getElementById('galleryModal')
        galleryModal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget
            var imgSrc = button.getAttribute('data-bs-img')
            var modalImage = document.getElementById('galleryModalImage')
            modalImage.src = imgSrc
            modalImage.alt = button.alt
        })
    </script>
</body>
</html>