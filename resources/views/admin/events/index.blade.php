@extends('admin.layouts.app')

@section('content')
<div class="container-fluid py-4" style="margin-left: -23%">
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">Gestion des Événements</h4>
                        <div>
                            <span class="badge bg-white text-primary fs-6 me-3">
                                Total: {{ $events->count() }} événement(s)
                            </span>
                            <a href="{{ route('admin.events.create') }}" class="btn btn-light btn-sm">
                                <i class="fas fa-plus me-1"></i> Ajouter
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    @if($events->isEmpty())
                        <div class="alert alert-info">
                            <i class="fas fa-info-circle me-2"></i>
                            Aucun événement enregistré pour le moment.
                        </div>
                    @else
                        <div class="table-responsive">
                            <table class="table table-hover align-middle">
                                <thead class="bg-light">
                                    <tr>
                                        <th>Titre</th>
                                        <th>Description</th>
                                        <th>Photos</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($events as $event)
                                    <tr>
                                        <td>
                                            <strong>{{ $event->titre }}</strong>
                                        </td>
                                        <td>
                                            <div class="text-truncate" style="max-width: 300px;" 
                                                 data-bs-toggle="tooltip" title="{{ $event->description }}">
                                                {{ $event->description }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="me-3">
                                                    @if($event->photo1)
                                                        <img src="{{ asset($event->photo1) }}" 
                                                             class="img-thumbnail" 
                                                             width="80" height="60" 
                                                             style="object-fit: cover;">
                                                    @else
                                                        <span class="badge bg-secondary">Aucune</span>
                                                    @endif
                                                </div>
                                                <div>
                                                    @if($event->photo2)
                                                        <img src="{{ asset($event->photo2) }}" 
                                                             class="img-thumbnail" 
                                                             width="80" height="60" 
                                                             style="object-fit: cover;">
                                                    @else
                                                        <span class="badge bg-secondary">Aucune</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('admin.events.edit', $event->id) }}" 
                                                   class="btn btn-sm btn-warning me-2"
                                                   data-bs-toggle="tooltip" title="Modifier">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="{{ route('admin.events.destroy', $event->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" 
                                                            class="btn btn-sm btn-danger"
                                                            onclick="return confirm('Supprimer cet événement ?')"
                                                            data-bs-toggle="tooltip" title="Supprimer">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
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