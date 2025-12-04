@extends('admin.layouts.app')

@section('content')
<div class="container-fluid " style="margin-left: -23%">
    <div class="row mb-4">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <h2 class="mb-0">Gestion des Véhicules</h2>
                <a href="{{ route('admin.cars.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus-circle me-2"></i>Ajouter un véhicule
                </a>
                <a href="{{ route('admin.cars.get_reservations') }}" class="btn btn-primary">
                    Voir les réservations
                </a>
            </div>
        </div>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-header bg-primary text-white">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Liste des véhicules</h5>
                <span class="badge bg-white text-primary">{{ $vehicules->count() }} véhicules</span>
            </div>
        </div><br><br>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="table-light">
                        <tr>
                          
                            <th>Marque</th>
                            <th>Modèle</th>
                            <th>Immatriculation</th>
                            <th>Année</th>
                            <th>Statut</th>
                            <th class="text-end pe-4">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($vehicules as $vehicule)
                        <tr>
                   
                            <td>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-car me-2 text-muted"></i>
                                    {{ $vehicule->marque }}
                                </div>
                            </td>
                            <td>{{ $vehicule->modele }}</td>
                            <td>
                                <span class="badge bg-light text-dark">
                                    <i class="fas fa-id-card me-1"></i>
                                    {{ $vehicule->immatriculation }}
                                </span>
                            </td>
                            <td>
                                <span class="badge bg-light text-dark">
                                    <i class="fas fa-id-card me-1"></i>
                                    {{ $vehicule->annee }}
                                </span>
                            </td>
                            <td>
                                <span class="badge {{ $vehicule->statut == 'Disponible' ? 'bg-success' : 'bg-secondary' }}">
                                    <i class="fas {{ $vehicule->statut == 'Disponible' ? 'fa-check-circle' : 'fa-times-circle' }} me-1"></i>
                                    {{ $vehicule->statut }}
                                </span>
                            </td>
                            <td class="text-end pe-4">
                                <div class="d-flex justify-content-end gap-2">
                                    <a href="{{ route('admin.cars.edit', $vehicule->id) }}" 
                                       class="btn btn-sm btn-outline-primary"
                                       data-bs-toggle="tooltip" 
                                       title="Modifier">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.cars.destroy', $vehicule->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="btn btn-sm btn-outline-danger"
                                                data-bs-toggle="tooltip"
                                                title="Supprimer"
                                                onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce véhicule ?')">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center py-4">
                                <div class="d-flex flex-column align-items-center">
                                    <i class="fas fa-car text-muted fa-3x mb-3"></i>
                                    <h5 class="text-muted">Aucun véhicule trouvé</h5>
                                    <a href="{{ route('admin.cars.create') }}" class="btn btn-sm btn-primary mt-2">
                                        Ajouter un véhicule
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<style>
    .card {
        border-radius: 12px;
        overflow: hidden;
        border: none;
    }
    
    .card-header {
        padding: 1.25rem 1.5rem;
    }
    
    .table th {
        font-weight: 600;
        text-transform: uppercase;
        font-size: 0.75rem;
        letter-spacing: 0.5px;
        color: #6c757d;
        border-bottom-width: 1px;
    }
    
    .table td {
        vertical-align: middle;
        padding: 1rem;
        border-bottom: 1px solid #f0f0f0;
    }
    
    .badge {
        padding: 0.35em 0.65em;
        font-weight: 500;
        border-radius: 0.25rem;
    }
    
    .btn-outline-primary, .btn-outline-danger {
        border-width: 1px;
    }
    
    @media (max-width: 768px) {
        .table-responsive {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }
        
        .d-flex.justify-content-between {
            flex-direction: column;
            gap: 1rem;
        }
        
        .card-header h5 {
            font-size: 1rem;
        }
        
        .btn {
            padding: 0.375rem 0.75rem;
            font-size: 0.875rem;
        }
    }
    
    @media (max-width: 576px) {
        .container-fluid {
            padding-left: 1rem;
            padding-right: 1rem;
        }
        
        .table td, .table th {
            padding: 0.75rem 0.5rem;
        }
        
        .actions-column .btn {
            padding: 0.25rem 0.5rem;
        }
    }
</style>

<script>
    // Activation des tooltips Bootstrap
    document.addEventListener('DOMContentLoaded', function() {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    });
</script>
@endsection