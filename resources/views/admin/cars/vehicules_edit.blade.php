@extends('admin.layouts.app')

@section('content')
<div class="container mt-4" style="margin-left: -23%">
    <h2>Modifier le Véhicule</h2>
    <form action="{{ route('admin.cars.update', $vehicule->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="marque" class="form-label">Marque</label>
            <input type="text" class="form-control" id="marque" name="marque" value="{{ $vehicule->marque }}" required>
        </div>
        <div class="mb-3">
            <label for="modele" class="form-label">Modèle</label>
            <input type="text" class="form-control" id="modele" name="modele" value="{{ $vehicule->modele }}" required>
        </div>
        <div class="mb-3">
            <label for="immatriculation" class="form-label">Immatriculation</label>
            <input type="text" class="form-control" id="immatriculation" name="immatriculation" value="{{ $vehicule->immatriculation }}" required>
        </div>
        <div class="mb-3">
            <label for="statut" class="form-label">Statut</label>
            <select class="form-control" id="statut" name="statut" required>
                <option value="Disponible" {{ $vehicule->statut == 'Disponible' ? 'selected' : '' }}>Disponible</option>
                <option value="Indisponible" {{ $vehicule->statut == 'Indisponible' ? 'selected' : '' }}>Indisponible</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
        <a href="{{ route('admin.cars.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection
