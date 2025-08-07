@extends('admin.layouts.app')

@section('content')
<div class="container mt-4" style="margin-left: -23%">
    <h2>Modifier le Bien Immobilier</h2>
    <form action="{{ route('admin.bienimmos.update', $bienimmo->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="titre" class="form-label">Titre</label>
            <input type="text" class="form-control" id="titre" name="titre" value="{{ $bienimmo->titre }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{ $bienimmo->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <select class="form-control" id="type" name="type" required>
                <option value="location" {{ $bienimmo->type == 'location' ? 'selected' : '' }}>Location</option>
                <option value="vente" {{ $bienimmo->type == 'vente' ? 'selected' : '' }}>Vente</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="prix" class="form-label">Prix</label>
            <input type="number" class="form-control" id="prix" name="prix" min="0" step="0.01" value="{{ $bienimmo->prix }}" required>
        </div>
        <div class="mb-3">
            <label for="adresse" class="form-label">Adresse</label>
            <input type="text" class="form-control" id="adresse" name="adresse" value="{{ $bienimmo->adresse }}">
        </div>
        <div class="mb-3">
            <label for="statut" class="form-label">Statut</label>
            <select class="form-control" id="statut" name="statut" required>
                <option value="Disponible" {{ $bienimmo->statut == 'Disponible' ? 'selected' : '' }}>Disponible</option>
                <option value="Indisponible" {{ $bienimmo->statut == 'Indisponible' ? 'selected' : '' }}>Indisponible</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Photos actuelles</label>
            <div class="d-flex flex-wrap gap-2">
                @foreach(json_decode($bienimmo->photos, true) ?? [] as $photo)
                    <img src="/{{ $photo }}" alt="Photo" style="width: 100px; height: 80px; object-fit: cover; border-radius: 5px;">
                @endforeach
            </div>
        </div>
        <div class="mb-3">
            <label for="photos" class="form-label">Ajouter/Remplacer les photos (6 à 8 fichiers)</label>
            <input type="file" class="form-control" id="photos" name="photos[]" accept="image/*" multiple onchange="validateImages(this)">
            <small class="form-text text-muted">Sélectionnez entre 6 et 8 images pour remplacer les anciennes.</small>
        </div>
        <script>
        function validateImages(input) {
            const files = input.files;
            if (files.length > 0 && (files.length < 6 || files.length > 8)) {
                input.setCustomValidity('Veuillez sélectionner entre 6 et 8 images.');
            } else {
                input.setCustomValidity('');
            }
        }
        </script>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
        <a href="{{ route('admin.bienimmos.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection
