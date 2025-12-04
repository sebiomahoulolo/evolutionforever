
@extends('admin.layouts.app')

@section('content')
@foreach($events as $event)
    <tr>
        <td>{{ $event->name }}</td>
        <td>{{ $event->email }}</td>
        <td>{{ $event->phone }}</td>
        <td>{{ $event->event_type }}</td>
<td>{{ $event->event_date ? $event->event_date->format('d/m/Y') : 'Non spécifiée' }}</td>
        <td>{{ $event->event_location }}</td>
        <td>{{ $event->attendees }}</td>
        <td>
            @if($event->equipments)
                @foreach(json_decode($event->equipments) as $equipment)
                    <span class="badge bg-secondary">{{ $equipment }}</span>
                @endforeach
            @endif
        </td>
        <td>{{ $event->needs }}</td>
    </tr>
@endforeach
@endsection