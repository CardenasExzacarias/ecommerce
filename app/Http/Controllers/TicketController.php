<?php

namespace App\Http\Controllers;

use App\Http\Requests\tickets\SaveTicketRequest;
use App\Models\Ticket;
use App\Repositories\TicketRepository;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index(): View
    {
        $tickets = TicketRepository::all();

        return view('tickets.index', compact('tickets'));
    }

    public function create()
    {
        return view('tickets.create');
    }

    public function store(Request $request)
    {
        $status = TicketRepository::store($request->all());

        dd($status);

        // return to_route('product.create')
        //     ->with('status', $status);
    }

    public function show($folio)
    {
        $ticket = TicketRepository::find($folio);

        $sales = TicketRepository::getSales($ticket);

        return view('tickets.show', compact('sales', 'ticket'));
    }

    public function search(Request $request){
        $name = $request->query('name');
        $products = TicketRepository::search($name);

        return response()->json($products);
    }

    public function destroy($folio)
    {
        TicketRepository::destroy($folio);

        return to_route('ticket.index')->with('status', 'Ventas Eliminadas!');
    }
}
