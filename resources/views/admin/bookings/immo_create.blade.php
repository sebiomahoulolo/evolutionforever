@extends('admin.layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Ajouter un Bien Immobilier</h2>
    <form action="{{ route('admin.bienimmos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="titre" class="form-label">Titre</label>
            <input type="text" class="form-control" id="titre" name="titre" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <select class="form-control" id="type" name="type" required>
                <option value="location">Location</option>
                <option value="vente">Vente</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="prix" class="form-label">Prix</label>
            <input type="number" class="form-control" id="prix" name="prix" min="0" step="0.01" required>
        </div>
        <div class="mb-3">
            <label for="adresse" class="form-label">Adresse</label>
            <input type="text" class="form-control" id="adresse" name="adresse">
        </div>
        <div class="mb-3">
            <label for="photos" class="form-label">Photos (6 à 8 fichiers)</label>
            <input type="file" class="form-control" id="photos" name="photos[]" accept="image/*" multiple required onchange="validateImages(this)">
            <small class="form-text text-muted">Sélectionnez entre 6 et 8 images.</small>
        </div>
        <script>
        function validateImages(input) {
            const files = input.files;
            if (files.length < 6 || files.length > 8) {
                input.setCustomValidity('Veuillez sélectionner entre 6 et 8 images.');
            } else {
                input.setCustomValidity('');
            }
        }
        </script>
        <div class="mb-3">
            <label for="statut" class="form-label">Statut</label>
            <select class="form-control" id="statut" name="statut" required>
                <option value="Disponible">Disponible</option>
                <option value="Indisponible">Indisponible</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
        <a href="{{ route('admin.bienimmos.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection
