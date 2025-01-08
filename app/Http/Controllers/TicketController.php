<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Repositories\TicketRepository;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $tickets = TicketRepository::all();

        return view('tickets.index', compact('tickets'));
    }

    /**
     * Display the specified resource.
     */
    public function show($folio)
    {
        $ticket = TicketRepository::find($folio);

        $sales = TicketRepository::getSales($ticket);

        return view('tickets.show', compact('sales', 'ticket'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($folio)
    {
        TicketRepository::destroy($folio);

        return to_route('ticket.index')->with('status', 'Ventas Eliminadas!');
    }
}
