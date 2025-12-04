@extends('admin.layouts.app')

@section('content')
<div class="container-fluid " style="margin-left: -23%">
    <div class="row mb-4">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <h2 class="mb-0">Liste des Biens Immobiliers</h2>
                <a href="{{ route('admin.bienimmos.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus-circle me-2"></i>Ajouter un bien
                </a>
                <a href="{{ route('admin.reservations.index') }}" class="btn btn-primary">
                    Voir les réservations
                </a>
            </div>
        </div>
    </div>
    <div class="card shadow-sm border-0">
        <div class="card-header bg-primary text-white">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Biens immobiliers</h5>
                <span class="badge bg-white text-primary">{{ $bienimmos->count() }} biens</span>
            </div>
        </div><br><br>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Titre</th>
                            <th>Type</th>
                          
                            <th>Prix</th>
                            <th>Adresse</th>
                            <th>Statut</th>
                            <th class="text-end pe-4">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($bienimmos as $bien)
                        <tr>
                            <td>{{ $bien->titre }}</td>
                            <td>{{ ucfirst($bien->type) }}</td>
                            <td>{{ number_format($bien->prix, 2, ',', ' ') }} F</td>
                            <td>{{ $bien->adresse }}</td>
                            <td>
                                <span class="badge {{ $bien->statut == 'Disponible' ? 'bg-success' : 'bg-secondary' }}">
                                    {{ $bien->statut }}
                                </span>
                            </td>
                            {{-- <td>
                                <div class="text-truncate" style="max-width: 200px;">
                                    {{ Str::limit($bien->description, 50) }}
                                </div>
                            </td> --}}
                            <td class="text-end pe-4">
                                <div class="d-flex justify-content-end gap-2">
                                    <a href="{{ route('admin.bienimmos.edit', $bien->id) }}" class="btn btn-sm btn-outline-primary" data-bs-toggle="tooltip" title="Modifier">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.bienimmos.destroy', $bien->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger" data-bs-toggle="tooltip" title="Supprimer" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce bien ?')">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center py-4">
                                <div class="d-flex flex-column align-items-center">
                                    <i class="fas fa-home text-muted fa-3x mb-3"></i>
                                    <h5 class="text-muted">Aucun bien trouvé</h5>
                                    <a href="{{ route('admin.bienimmos.create') }}" class="btn btn-sm btn-primary mt-2">Ajouter un bien</a>
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
@endsection
