@extends('admin.layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Réservations</h1>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Bien</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Message</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @forelse($reservations as $reservation)
                <tr>
                    <td>{{ $reservation->id }}</td>
                    <td>
                        @if($reservation->bienImmo)
                            <a href="{{ route('bienimmos.show', $reservation->bienImmo->id) }}" target="_blank">
                                {{ $reservation->bienImmo->titre }}
                            </a>
                        @else
                            -
                        @endif
                    </td>
                    <td>{{ $reservation->nom }}</td>
                    <td>{{ $reservation->email }}</td>
                    <td>{{ $reservation->telephone }}</td>
                    <td>{{ $reservation->message }}</td>
                    <td>{{ $reservation->created_at->format('d/m/Y H:i') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">Aucune réservation trouvée.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{ $reservations->links() }}
    </div>
</div>
@endsection
