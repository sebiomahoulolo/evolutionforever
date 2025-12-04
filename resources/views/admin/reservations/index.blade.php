@extends('admin.layouts.app')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">Gestion des Réservations</h4>
                        <span class="badge bg-white text-primary fs-6">
                            Total: {{ $reservations->total() }} réservation(s)
                        </span>
                    </div>
                </div>

                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if($reservations->isEmpty())
                        <div class="alert alert-info">
                            Aucune réservation enregistrée pour le moment.
                        </div>
                    @else
                        <div class="table-responsive">
                            <table class="table table-hover align-middle">
                                <thead class="bg-light">
                                    <tr>
                                        <th>Bien Immobilier</th>
                                        <th>Client</th>
                                        <th>Coordonnées</th>
                                        <th>Message</th>
                                        <th>Date Réservation</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($reservations as $reservation)
                                    <tr>
                                      <td>
                                            @if($reservation->bienImmo)
                                                <a href="{{ route('bienimmos.show', $reservation->bienImmo->id) }}" 
                                                   target="_blank"
                                                   class="text-decoration-none">
                                                    <span class="badge bg-info">
                                                        <i class="fas fa-home me-1"></i>
                                                        {{ Str::limit($reservation->bienImmo->titre, 30) }}
                                                    </span>
                                                </a>
                                            @else
                                                <span class="badge bg-secondary">Non disponible</span>
                                            @endif
                                        </td>
                                        <td>
                                            <strong>{{ $reservation->nom }}</strong>
                                        </td>
                                        <td>
                                            <div><i class="fas fa-envelope me-2"></i>{{ $reservation->email }}</div>
                                            <div><i class="fas fa-phone me-2"></i>{{ $reservation->telephone }}</div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <button class="btn btn-sm btn-outline-primary" 
                                                        data-bs-toggle="tooltip" 
                                                        title="{{ $reservation->message }}">
                                                    <i class="fas fa-eye"></i> Voir
                                                </button>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge bg-light text-dark">
                                                {{ $reservation->created_at->format('d/m/Y H:i') }}
                                            </span>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="d-flex justify-content-center mt-4">
                            {{ $reservations->links('pagination::bootstrap-5') }}
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