@extends('admin.layouts.app')

@section('content')
<div class="container-fluid py-4" style="margin-left: -23%">
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">Liste des demandes pour le pressing</h4>
                        <span class="badge bg-white text-primary fs-6">
                            Total: {{ $devis->count() }} demande(s)
                        </span>
                    </div>
                </div>

                <div class="card-body">
                    @if($devis->isEmpty())
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
                                        <th>Service</th>
                                        <th>Type de vêtements</th>
                                        <th>Quantité</th>
                                        <th>Livraison</th>
                                        <th>Fréquence</th>
                                        <th>Message</th>
                                        <th>Date de demande</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($devis as $item)
                                        <tr>
                                          <td>{{ $item->nom }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->telephone }}</td>
                                            <td>
                                                <span class="badge bg-info">
                                                    {{ $item->service }}
                                                </span>
                                            </td>
                                            <td>{{ $item->type_vetements }}</td>
                                            <td>{{ $item->quantite }}</td>
                                            <td>
                                                @if($item->livraison)
                                                    <span class="badge bg-success">Oui</span>
                                                @else
                                                    <span class="badge bg-secondary">Non</span>
                                                @endif
                                            </td>
                                            <td>{{ $item->frequence }}</td>
                                            <td>{{ Str::limit($item->message, 30) }}</td>
                                            <td>{{ $item->created_at->format('d/m/Y H:i') }}</td>
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