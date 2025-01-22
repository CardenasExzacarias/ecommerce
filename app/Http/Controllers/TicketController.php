<?php

namespace App\Http\Controllers;

use App\Http\Requests\tickets\SaveTicketRequest;
use App\Models\Ticket;
use App\Repositories\TicketRepository;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index(Request $request): View
    {
        $search = $request->query('search');

        $tickets = TicketRepository::all($search);

        return view('tickets.index', compact('tickets'));
    }

    public function create()
    {
        return view('tickets.create');
    }

    public function store(SaveTicketRequest $request)
    {
        $status = TicketRepository::store($request->validated());

        return to_route('ticket.index')
            ->with('status', $status);
    }

    public function show($folio)
    {
        $ticket = TicketRepository::find($folio);

        $sales = TicketRepository::getSales($ticket);

        return view('tickets.show', compact('sales', 'ticket'));
    }

    public function destroy($folio)
    {
        TicketRepository::destroy($folio);

        return to_route('ticket.index')->with('status', 'Ventas Eliminadas!');
    }
}
