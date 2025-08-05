@extends('admin.layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Modifier l'événement</h2>
    <form action="{{ route('admin.events.update', $event->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="titre" class="form-label">Titre</label>
            <input type="text" class="form-control" id="titre" name="titre" value="{{ $event->titre }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{ $event->description }}</textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Photo 1 actuelle</label><br>
            <img src="/{{ $event->photo1 }}" width="100" height="80" style="object-fit:cover;">
        </div>
        <div class="mb-3">
            <label for="photo1" class="form-label">Remplacer la photo 1</label>
            <input type="file" class="form-control" id="photo1" name="photo1" accept="image/*">
        </div>
        <div class="mb-3">
            <label class="form-label">Photo 2 actuelle</label><br>
            <img src="/{{ $event->photo2 }}" width="100" height="80" style="object-fit:cover;">
        </div>
        <div class="mb-3">
            <label for="photo2" class="form-label">Remplacer la photo 2</label>
            <input type="file" class="form-control" id="photo2" name="photo2" accept="image/*">
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
        <a href="{{ route('admin.events.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection
