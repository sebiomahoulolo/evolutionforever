@extends('admin.layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Liste des événements</h2>
    <a href="{{ route('admin.events.create') }}" class="btn btn-primary mb-3">Ajouter un événement</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Description</th>
                <th>Photo 1</th>
                <th>Photo 2</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($events as $event)
            <tr>
                <td>{{ $event->titre }}</td>
                <td>{{ $event->description }}</td>
                <td><img src="/{{ $event->photo1 }}" width="80" height="60" style="object-fit:cover;"></td>
                <td><img src="/{{ $event->photo2 }}" width="80" height="60" style="object-fit:cover;"></td>
                <td>
                    <a href="{{ route('admin.events.edit', $event->id) }}" class="btn btn-sm btn-warning">Modifier</a>
                    <form action="{{ route('admin.events.destroy', $event->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Supprimer cet événement ?')">Supprimer</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center">Aucun événement trouvé.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
