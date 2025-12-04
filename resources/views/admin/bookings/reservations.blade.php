@extends('admin.layouts.app')

@section('content')
<div class="container-fluid py-4" style="margin-left: -23%">
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
                            <i class="fas fa-check-circle me-2"></i>
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if($reservations->isEmpty())
                        <div class="alert alert-info">
                            <i class="fas fa-info-circle me-2"></i>
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
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($reservations as $reservation)
                                    <tr>
                                        <td>
                                            @if($reservation->bienImmo)
                                                <a href="{{ route('pages.bien-detail', $reservation->bienImmo->id) }}" 
                                                   target="_blank"
                                                   class="text-decoration-none d-flex align-items-center">
                                                    <span class="badge bg-info me-2">
                                                        <i class="fas fa-home"></i>
                                                    </span>
                                                    <span>{{ Str::limit($reservation->bienImmo->titre, 25) }}</span>
                                                </a>
                                            @else
                                                <span class="badge bg-secondary">Non disponible</span>
                                            @endif
                                        </td>
                                        <td>
                                            <strong>{{ $reservation->nom }}</strong>
                                        </td>
                                        <td>
                                            <div class="mb-1">
                                                <i class="fas fa-envelope text-muted me-2"></i>
                                                <small>{{ $reservation->email }}</small>
                                            </div>
                                            <div>
                                                <i class="fas fa-phone text-muted me-2"></i>
                                                <small>{{ $reservation->telephone }}</small>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="message-container" style="max-width: 300px;">
                                                <p class="mb-0 text-truncate" data-bs-toggle="tooltip" title="{{ $reservation->message }}">
                                                    {{ $reservation->message }}
                                                </p>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge bg-light text-dark">
                                                <i class="far fa-clock me-1"></i>
                                                {{ $reservation->created_at->format('d/m/Y H:i') }}
                                            </span>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="d-flex justify-content-center mt-3">
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
    // Activation des tooltips Bootstrap pour les messages tronqués
    document.addEventListener('DOMContentLoaded', function() {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    })
</script>
@endsection

<style>
    .message-container {
        max-height: 100px;
        overflow: hidden;
        position: relative;
    }
    .message-container p {
        white-space: pre-wrap;
        word-break: break-word;
    }
    .text-truncate {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>
@endsection