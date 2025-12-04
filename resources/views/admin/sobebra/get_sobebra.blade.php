@extends('admin.layouts.app')

@section('content')
<div class="container-fluid py-4" style="margin-left: -19%">
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">Demandes Sobebra</h4>
                        <span class="badge bg-white text-primary fs-6">
                            Total: {{ $demandes->count() }} demande(s)
                        </span>
                    </div>
                </div>

                <div class="card-body">
                    @if($demandes->isEmpty())
                        <div class="alert alert-info">
                            <i class="fas fa-info-circle me-2"></i>
                            Aucune demande enregistrée pour le moment.
                        </div>
                    @else
                        <div class="table-responsive">
                            <table class="table table-hover align-middle">
                                <thead class="bg-light">
                                    <tr>
                                        <th>Entreprise</th>
                                        <th>Nom Complet</th>
                                        <th>Contact</th>
                                        <th>Objet</th>
                                        <th>Type Boisson/Quantité</th>
                                        <th>Adresse Livraison/Occasion</th>
                                        <th>Date & Heure de livraison</th>
                                        <th>Infos Complémentaires</th>
                                        <th>date de demande</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($demandes as $demande)
                                    <tr>
                                        <td>{{ $demande->entreprise }}</td>
                                        <td>{{ $demande->nom_complet }}</td>
                                        <td>
                                            <div><i class="fas fa-envelope text-muted me-2"></i>{{ $demande->email }}</div>
                                            <div><i class="fas fa-phone text-muted me-2"></i>{{ $demande->telephone }}</div>
                                        </td>
                                        <td>{{ $demande->objet }}</td>
                                        <td>
                                            <div class="d-flex flex-column">
                                                <span class="badge bg-info mb-1">{{ $demande->type_boisson }}</span>
                                                <span class="badge bg-primary">{{ $demande->quantite }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column">
                                                <div class="text-truncate" style="max-width: 150px;" 
                                                     data-bs-toggle="tooltip" 
                                                     title="{{ $demande->adresse_livraison }}">
                                                    <i class="fas fa-map-marker-alt text-muted me-2"></i>
                                                    {{ $demande->adresse_livraison }}
                                                </div>
                                                <small class="text-muted mt-1">
                                                    <i class="fas fa-calendar-alt text-muted me-2"></i>
                                                    {{ $demande->occasion }}
                                                </small>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge bg-light text-dark">
                                                <i class="far fa-clock me-1"></i>
                                                {{ \Carbon\Carbon::parse($demande->date_heure)->format('d/m/Y H:i') }}
                                            </span>
                                        </td>
                                        <td>
                                           
                                                {{ $demande->informations_complementaires }}
                                           
                                        </td>
                                        <td>
                                            <small>{{ $demande->created_at->format('d/m/Y H:i') }}</small>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@section('scripts')
<script>
    // Activation des tooltips Bootstrap
    document.addEventListener('DOMContentLoaded', function() {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    })
</script>
@endsection
@endsection