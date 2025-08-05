@extends('admin.layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Ajouter un événement</h2>
    <form action="{{ route('admin.events.store') }}" method="POST" enctype="multipart/form-data">
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
            <label for="photo1" class="form-label">Photo 1</label>
            <input type="file" class="form-control" id="photo1" name="photo1" accept="image/*" required>
        </div>
        <div class="mb-3">
            <label for="photo2" class="form-label">Photo 2</label>
            <input type="file" class="form-control" id="photo2" name="photo2" accept="image/*" required>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
        <a href="{{ route('admin.events.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection
