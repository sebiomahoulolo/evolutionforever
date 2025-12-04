@extends('admin.layouts.app')

@section('content')
<div class="container mt-4" style="margin-left: -23%">
    <h1 class="mb-4">Réservations de véhicules</h1>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Véhicule</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Date début</th>
                <th>Date fin</th>
                <th>Message</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @forelse($reservations as $reservation)
                <tr>
                    <td>
                        @if($reservation->vehicule)
                            <span>{{ $reservation->vehicule->marque }} {{ $reservation->vehicule->modele }}</span>
                        @else
                            -
                        @endif
                    </td>
                    <td>{{ $reservation->nom }}</td>
                    <td>{{ $reservation->email }}</td>
                    <td>{{ $reservation->telephone }}</td>
                    <td>{{ $reservation->date_debut }}</td>
                    <td>{{ $reservation->date_fin }}</td>
                    <td>{{ $reservation->message }}</td>
                    <td>{{ $reservation->created_at->format('d/m/Y H:i') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="8" class="text-center">Aucune réservation trouvée.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        
    </div>
</div>
@endsection
