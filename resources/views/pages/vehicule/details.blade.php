<!DOCTYPE html>
<html lang="fr">

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
    
    <style>
        .property-header {
            background-color: #f8f9fa;
            padding: 30px 0;
            margin-bottom: 30px;
        }
        .property-gallery {
            border: 1px solid #dee2e6;
            border-radius: 5px;
            overflow: hidden;
        }
        .main-image {
            height: 400px;
            object-fit: cover;
            width: 100%;
        }
        .thumbnail-container {
            display: flex;
            overflow-x: auto;
            padding: 10px 0;
        }
        .thumbnail {
            width: 80px;
            height: 60px;
            object-fit: cover;
            margin-right: 10px;
            cursor: pointer;
            border: 2px solid transparent;
        }
        .thumbnail.active {
            border-color: #0d6efd;
        }
        .property-details {
            border: 1px solid #dee2e6;
            border-radius: 5px;
            padding: 20px;
        }
        .detail-item {
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }
        .detail-item:last-child {
            border-bottom: none;
        }
        .amenities-badge {
            margin-right: 5px;
            margin-bottom: 5px;
        }
        .contact-card {
            background-color: #f8f9fa;
            border-radius: 5px;
            padding: 20px;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    @include('components.navbar')

    <!-- Property Header -->
    <div class="property-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('vehicule.index') }}">Véhicules</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $vehicule->marque }} {{ $vehicule->modele }}</li>
                        </ol>
                    </nav>
                    <h1 class="mb-3">{{ $vehicule->marque }} {{ $vehicule->modele }}</h1>
                    <p class="mb-0"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{ $vehicule->adresse ?? 'Lieu non spécifié' }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Property Content -->
    <div class="container py-5">
        <div class="row">
            <!-- Gallery Section -->
            <div class="col-lg-8">
                <div class="property-gallery mb-4">
                    @php
                        $photos = is_array($vehicule->photos) ? $vehicule->photos : json_decode($vehicule->photos, true);
                        $mainPhoto = $photos[0] ?? 'img/vehicle-default.jpg';
                    @endphp
                    
                    <img id="mainImage" src="{{ asset($mainPhoto) }}" alt="Photo principale" class="main-image img-fluid">
                    
                    @if(count($photos) > 1)
                        <div class="thumbnail-container">
                            @foreach($photos as $index => $photo)
                                <img src="{{ asset($photo) }}" 
                                     alt="Photo {{ $index + 1 }}" 
                                     class="thumbnail {{ $index === 0 ? 'active' : '' }}"
                                     onclick="changeMainImage('{{ asset($photo) }}', this)">
                            @endforeach
                        </div>
                    @endif
                </div>

                <!-- Description Section -->
                {{-- <div class="card mb-4">
                    <div class="card-header bg-primary text-white">
                        <h3 class="mb-0" style=" color:white">Description</h3>
                    </div>
                    <div class="card-body">
                        <p>{{ $vehicule->description ?? 'Aucune description disponible' }}</p>
                    </div>
                </div> --}}

                <!-- Features Section -->
                {{--
                <div class="card mb-4">
                    <div class="card-header bg-primary text-white">
                        <h3 class="mb-0">Caractéristiques</h3>
                    </div>
                    <div class="card-body">
                        <!-- Ajoutez ici les caractéristiques spécifiques du véhicule si besoin -->
                    </div>
                </div>
                --}}
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="property-details">
                    <div class="text-center mb-4">
                        <h5 style="color:rgb(29, 168, 19)">Prix :  {{ $vehicule->prix ?? 'N /A' }} FCFA/jour</h5>
                        <span class="badge bg-{{ $vehicule->statut === 'Indisponible' ? 'danger' : 'success' }}">{{ $vehicule->statut ?? 'Disponible' }}</span>
                    </div>

                    <div class="detail-item">
                        <h5><i class="fa fa-car text-primary me-2"></i> Détails du véhicule</h5>
                        <ul class="list-unstyled">
                            <li><strong>Marque:</strong> {{ $vehicule->marque }}</li>
                            <li><strong>Modèle:</strong> {{ $vehicule->modele }}</li>
                            <li><strong>Immatriculation:</strong> {{ $vehicule->immatriculation }}</li>
                            <li><strong>Année:</strong> {{ $vehicule->annee ?? 'N/A' }}</li>
                            <li><strong>Lieux:</strong> {{ $vehicule->adresse ?? 'N/A' }}</li>
                            <li><strong>Type:</strong> {{ $vehicule->type ?? 'Luxe' }}</li>
                        </ul>
                    </div>

                    <!-- Contact Form -->
                    <div class="contact-card">
                        <h4 class="mb-3"><i class="fa fa-envelope text-primary me-2"></i> Réserver ce véhicule</h4>
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}<br>
                                <a href="https://wa.me/2290147523655" target="_blank" class="btn btn-success mt-2" style="background-color:#25D366; border:none;">
                                    <i class="fab fa-whatsapp"></i> Contacter directement l'agent sur WhatsApp
                                </a>
                            </div>
                        @else
                       <form method="POST" action="{{ route('reservation.vehicule') }}">
    @csrf
    <input type="hidden" name="vehicule_id" value="{{ $vehicule->id }}">
    <div class="mb-3">
        <input type="text" class="form-control" name="nom" placeholder="Votre nom" required>
    </div>
    <div class="mb-3">
        <input type="email" class="form-control" name="email" placeholder="Votre email" required>
    </div>
    <div class="mb-3">
        <input type="tel" class="form-control" name="telephone" placeholder="Votre téléphone" 
               pattern="^[0-9]{7,15}$" inputmode="numeric" maxlength="15" minlength="7" required title="Veuillez entrer uniquement des chiffres (7 à 15 chiffres)">
    </div>
    
    <!-- Nouveau champ: Avec ou sans chauffeur -->
    <div class="mb-3">
        <label>Avec ou sans chauffeur ?</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="chauffeur" id="avec_chauffeur" value="avec">
            <label class="form-check-label" for="avec_chauffeur">Avec chauffeur</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="chauffeur" id="sans_chauffeur" value="sans" checked>
            <label class="form-check-label" for="sans_chauffeur">Sans chauffeur</label>
        </div>
    </div>
    
    <div class="row mb-3">
        <div class="col-md-6">
            <label for="date_debut">Date début</label>
            <input type="date" class="form-control" name="date_debut" required>
        </div>
        <div class="col-md-6">
            <label for="date_fin">Date fin</label>
            <input type="date" class="form-control" name="date_fin" required>
        </div>
    </div>

    <!-- Nouveau champ: Point de départ & retour -->
    <div class="mb-3">
        <label for="point_depart">Point de départ & retour</label>
        <input type="text" class="form-control" name="point_depart" placeholder="Adresse de prise en charge du véhicule" required>
    </div>
    
    <div class="mb-3">
        <textarea class="form-control" name="message" rows="3" placeholder="Votre message"></textarea>
    </div>
    <button type="submit" class="btn btn-primary w-100" style="background-color: #25D366 ">Envoyer la demande</button>
</form>

<script>
// Script pour calculer automatiquement la durée de location
document.addEventListener('DOMContentLoaded', function() {
    const dateDebut = document.querySelector('input[name="date_debut"]');
    const dateFin = document.querySelector('input[name="date_fin"]');
    const dureeLocation = document.getElementById('duree_location');
    
    function calculateDuration() {
        if(dateDebut.value && dateFin.value) {
            const startDate = new Date(dateDebut.value);
            const endDate = new Date(dateFin.value);
            
            // Calcul de la différence en jours
            const diffTime = endDate - startDate;
            const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24)) + 1;
            
            dureeLocation.value = diffDays + ' jour(s)';
        }
    }
    
    dateDebut.addEventListener('change', calculateDuration);
    dateFin.addEventListener('change', calculateDuration);
});
</script>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Bouton flottant WhatsApp -->
<a href="https://wa.me/2290147523655" class="whatsapp-float" target="_blank" rel="noopener noreferrer" aria-label="Contactez-nous sur WhatsApp">
  <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" width="28" height="28">
    <path d="M20.52 3.48A11.88 11.88 0 0 0 12 0C5.37 0 .01 5.37.01 12c0 2.11.55 4.17 1.6 6L0 24l6.17-1.61a11.94 11.94 0 0 0 5.83 1.49c6.63 0 12-5.37 12-12 0-3.19-1.24-6.19-3.48-8.52zM12 22c-1.84 0-3.63-.49-5.2-1.41l-.37-.22-3.67.96.98-3.58-.24-.37A9.94 9.94 0 0 1 2 12c0-5.52 4.48-10 10-10s10 4.48 10 10-4.48 10-10 10zm5.27-7.73c-.29-.15-1.7-.84-1.96-.94-.26-.1-.45-.15-.64.15-.19.29-.74.94-.91 1.13-.17.19-.34.21-.63.07-.29-.15-1.23-.45-2.34-1.43-.86-.76-1.44-1.7-1.61-1.99-.17-.29-.02-.45.13-.6.13-.13.29-.34.43-.51.15-.17.19-.29.29-.48.1-.19.05-.36-.02-.51-.07-.15-.64-1.54-.88-2.11-.23-.56-.47-.48-.64-.48h-.55c-.19 0-.48.07-.73.36-.26.29-1 1-1 2.43s1.03 2.82 1.18 3.01c.15.19 2.03 3.1 4.91 4.35.69.3 1.23.48 1.65.61.69.22 1.32.19 1.82.12.56-.08 1.7-.7 1.94-1.37.24-.67.24-1.24.17-1.37-.07-.13-.26-.21-.55-.36z"/>
  </svg>
</a>

<style>
.whatsapp-float {
  position: fixed;
  bottom: 20px;
  right: 20px;
  background-color: #25D366;
  color: white;
  width: 60px;
  height: 60px;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
  box-shadow: 0 4px 6px rgba(0,0,0,0.3);
  z-index: 999;
  transition: all 0.3s ease;
}

.whatsapp-float:hover {
  background-color: #1ebe5d;
  transform: scale(1.1);
}

.whatsapp-float svg {
  width: 28px;
  height: 28px;
}

.property-item img {
  width: 100%;
  height: 250px; /* Hauteur fixe pour toutes les images */
  object-fit: cover; /* Pour conserver les proportions */
}

.property-item {
  height: 100%;
  display: flex;
  flex-direction: column;
}

.property-item .p-4 {
  flex: 1;
}

.see-more-btn {
  display: block;
  width: 200px;
  margin: 30px auto 0;
  text-align: center;
  background-color: #25D366;
  color: white;
  padding: 10px 20px;
  border-radius: 5px;
  font-weight: bold;
  transition: all 0.3s ease;
}

.see-more-btn:hover {
  background-color: #1ebe5d;
  transform: translateY(-2px);
  box-shadow: 0 4px 8px rgba(0,0,0,0.2);
}
</style>

<!-- Similar Vehicles -->
<div class="container-fluid bg-light py-5">
    <div class="container">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Autres véhicules</h5>
            <h2 class="mb-0">Vous pourriez aussi aimer</h2>
        </div>
        <div class="row g-4">
            @foreach($suggestions as $sugg)
            <div class="col-lg-4 col-md-6">
                <div class="property-item rounded overflow-hidden shadow-sm">
                    <div class="position-relative overflow-hidden">
                        @php
                            $photos = is_array($sugg->photos) ? $sugg->photos : json_decode($sugg->photos, true);
                            $mainPhoto = isset($photos[0]) ? $photos[0] : ($sugg->photo1 ?? null);
                        @endphp <a href="{{ route('vehicule.details', $sugg->id) }}">
                        <img class="img-fluid" src="{{ $mainPhoto ? asset($mainPhoto) : asset('img/vehicle-default.jpg') }}" alt="{{ $sugg->marque }} {{ $sugg->modele }}">
                     </a>   <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">{{ $sugg->statut ?? 'Disponible' }}</div>
                    </div>
                    <div class="p-4 pb-0">
                        <h5 class=" mb-3" style="color:#25D366 "> Prix: {{ number_format($sugg->prix ?? 0, 0, ',', ' ') }} FCFA/jour</h5>
                       
                        <a class="d-block h5 mb-2" href="{{ route('vehicule.details', $sugg->id) }}">{{ $sugg->marque }} {{ $sugg->modele }}
                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>{{ $sugg->adresse ?? '' }}</p></a>
                          <p class="mb-2"><strong><i class="fa fa-car text-primary me-2"></i>Type:</strong> {{ $sugg->type ?? 'N/A' }}</p>
                               
                    </div>
                    <div class="d-flex border-top">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>{{ $sugg->annee ?? '' }}</small>
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-tachometer-alt text-primary me-2"></i>{{ $sugg->kilometrage ?? '' }} km</small>
                        <small class="flex-fill text-center py-2"><i class="fa fa-cogs text-primary me-2"></i>{{ $sugg->transmission ?? '' }}</small>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <a href="{{ route('vehicule.index') }}" class="see-more-btn " style="  background-color: #25D366; color: white; font-weight: bold; text-decoration: none; margin-top: 20px; display: inline-block; padding: 10px 20px; border-radius: 5px; transition: all 0.3s ease; text-align: center; margin-left: auto; margin-right: auto; margin-top: 30px;">Voir plus de véhicules</a>
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
    
    <script>
        function changeMainImage(src, element) {
            document.getElementById('mainImage').src = src;
            
            // Remove active class from all thumbnails
            document.querySelectorAll('.thumbnail').forEach(thumb => {
                thumb.classList.remove('active');
            });
            
            // Add active class to clicked thumbnail
            element.classList.add('active');
        }
        // Initialize date pickers
        $(document).ready(function() {
            const today = new Date().toISOString().split('T')[0];
            $('input[name="date_debut"]').attr('min', today);
            $('input[name="date_debut"]').change(function() {
                $('input[name="date_fin"]').attr('min', $(this).val());
            });
        });
    </script>
</body>
</html>