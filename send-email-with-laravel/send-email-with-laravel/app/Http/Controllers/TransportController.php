<?php

namespace App\Http\Controllers;

use App\Interface\TransportServiceInterface;
use App\Mail\TransportScheduled;
use App\Models\Transport;
use App\Http\Requests\StoreTransportRequest;
use App\Http\Requests\UpdateTransportRequest;
use Exception;
use Illuminate\Support\Facades\Mail;

class TransportController extends Controller
{

    public function __construct(
        protected TransportServiceInterface $service
    )
    {}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('transport.transport-index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('transport.transport-create');
    }

    /**
     * Store a newly created resource in storage.
     * @throws Exception
     */
    public function store(StoreTransportRequest $request)
    {

        //$transport = Transport::create($request->all());

        $transport = $this->service->createTransport($request->all());

        $email = 'email@example.com';

        // Envia o email usando o Mailable
        // Mail::to($email)->send(new TransportScheduled($transport));

        Mail::to($email)->queue(new TransportScheduled($transport));

        return to_route('transports.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Transport $transport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transport $transport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTransportRequest $request, Transport $transport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transport $transport)
    {
        //
    }
}
