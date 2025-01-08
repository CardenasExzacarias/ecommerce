@session('status')
    <div class="status">
        {{ $value }}
    </div>
@endsession

@foreach ($tickets as $ticket)
    <div class="container">
        <a href="{{ route('ticket.show', $ticket->folio) }}">Ver ticket: {{ $ticket->folio }}</a>
        <form action="{{ route('ticket.destroy', $ticket->folio) }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="Eliminar">
        </form>
    </div>
@endforeach
