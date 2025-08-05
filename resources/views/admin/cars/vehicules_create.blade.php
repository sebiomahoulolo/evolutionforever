@extends('admin.layouts.app')

@section('content')
<div class="container ">
    <h2>Ajouter un Véhicule</h2>
    <form action="{{ route('admin.cars.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="images" class="form-label">Images (6 à 8 fichiers)</label>
            <input type="file" class="form-control" id="images" name="images[]" accept="image/*" multiple required onchange="validateImages(this)">
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
            <label for="marque" class="form-label">Marque</label>
            <input type="text" class="form-control" id="marque" name="marque" required>
        </div>
        <div class="mb-3">
            <label for="modele" class="form-label">Modèle</label>
            <input type="text" class="form-control" id="modele" name="modele" required>
        </div>
        <div class="mb-3">
            <label for="immatriculation" class="form-label">Immatriculation</label>
            <input type="text" class="form-control" id="immatriculation" name="immatriculation" required>
        </div>
        <div class="mb-3">
            <label for="annee" class="form-label">Année</label>
            <input type="number" class="form-control" id="annee" name="annee" min="1900" max="2099" required>
        </div>
        <div class="mb-3">
            <label for="statut" class="form-label">Statut</label>
            <select class="form-control" id="statut" name="statut" required>
                <option value="Disponible">Disponible</option>
                <option value="Indisponible">Indisponible</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
        <a href="{{ route('admin.cars.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection
