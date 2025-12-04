@extends('admin.layouts.app')

@section('content')
<div class="container-fluid py-4" style="margin-left: -23%">
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">Liste des demandes de déménagement</h4>
                        <span class="badge bg-white text-primary fs-6">
                            Total: {{ $demandes->count() }} demande(s)
                        </span>
                    </div>
                </div>

                <div class="card-body">
                    @if($demandes->isEmpty())
                        <div class="alert alert-info">
                            Aucune demande enregistrée pour le moment.
                        </div>
                    @else
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead class="bg-light">
                                    <tr>
                                        <th>Nom</th>
                                        <th>Email</th>
                                        <th>Téléphone</th>
                                        <th>Type</th>
                                        <th>Volume</th>
                                        <th>Adresse</th>
                                        <th>Emballage</th>
                                        <th>Date souhaitée</th>
                                        <th>Soumis le</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($demandes as $demande)
                                        <tr>
                                           
                                            <td>{{ $demande->nom }}</td>
                                            <td>{{ $demande->email }}</td>
                                            <td>{{ $demande->telephone }}</td>
                                            <td>
                                                <span class="badge bg-info">
                                                    {{ $demande->type_demenagement }}
                                                </span>
                                            </td>
                                            <td>{{ $demande->volume }} </td>
                                            <td>{{ Str::limit($demande->adresse, 20) }}</td>
                                            <td>
                                                @if($demande->emballage)
                                                    <span class="badge bg-success">Oui</span>
                                                @else
                                                    <span class="badge bg-secondary">Non</span>
                                                @endif
                                            </td>
                                                           <td>{{ \Carbon\Carbon::parse($demande->date_souhaitee)->format('d/m/Y') }}</td>
                        <td>{{ $demande->created_at->format('d/m/Y H:i') }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection