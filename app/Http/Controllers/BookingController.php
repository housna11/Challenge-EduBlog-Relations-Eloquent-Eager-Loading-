<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Service;
use App\Http\Requests\StoreBookingRequest;
use App\Http\Requests\UpdateBookingRequest;

class BookingController extends Controller
{
    public function index()
    {
        return view('accueil', ['bookings' => Booking::all()]);
    }

    public function create()
    {
        $services = Service::all(); 
        return view('ajouter', compact('services'));
    }

    public function store(StoreBookingRequest $request)
    {
        Booking::create($request->validated());
        return redirect()->route('bookings.index')->with('success', 'Réservation ajoutée avec succès !');
    }

    public function show(Booking $booking)
    {
        return view('detail', ['booking' => $booking]);
    }

    public function edit(Booking $booking)
    {
        $services = Service::all();
        return view('modifier', ['booking' => $booking, 'services' => $services]);
    }

    public function update(UpdateBookingRequest $request, Booking $booking)
    {
        $booking->update($request->validated());
        return redirect()->route('bookings.index')->with('success', 'Réservation modifiée avec succès !');
    }

    public function destroy(Booking $booking)
    {
        $booking->delete();
        return redirect()->route('bookings.index')->with('success', 'Réservation supprimée');
    }
}
