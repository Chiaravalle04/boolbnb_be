<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSponsorshipRequest;
use App\Http\Requests\UpdateSponsorshipRequest;

// Models
use App\Models\Apartment;
use App\Models\Sponsorship;

// Helpers
use Illuminate\Support\Facades\Auth;

class SponsorshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Apartment $apartment)
    {
        $user = Auth::user();

        $apartment = Apartment::findOrFail($apartment->id);
        $sponsorships = Sponsorship::all();

        //dd($sponsorships);
        return view('admin.sponsorships.index', compact('user', 'apartment', 'sponsorships'));
    }

    public function checkout(Apartment $apartment, Sponsorship $sponsorship)
    {
        $user = Auth::user();
        $apartment = Apartment::findOrFail($apartment->id);
        $sponsorship = Sponsorship::findOrFail($sponsorship->id);
        //dd($sponsorships);
        return view('admin.sponsorships.checkout', compact('user', 'apartment', 'sponsorship'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSponsorshipRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Apartment $apartment, Sponsorship $sponsorship)
    {
        $apartment = Apartment::findOrFail($apartment->id);

        // Recupera la sponsorizzazione utilizzando l'id
        $sponsorship = Sponsorship::findOrFail($sponsorship->id);

        // Salva la relazione many-to-many nella tabella pivot
        $apartment->sponsorships()->attach($sponsorship, [
            'expired_date' => now()->addHours($sponsorship->duration)
        ]);

        return redirect()->route('admin.apartments.show', $apartment->id)->with('message', "Your $sponsorship->name sponsorship is active now!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sponsorship  $sponsorship
     * @return \Illuminate\Http\Response
     */
    public function show(Sponsorship $sponsorship)
    {
        // $apartments = $sponsorship->apartments;

        // return view('admin.sponsorships.show', compact('sponsorship', 'apartments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sponsorship  $sponsorship
     * @return \Illuminate\Http\Response
     */
    public function edit(Sponsorship $sponsorship)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSponsorshipRequest  $request
     * @param  \App\Models\Sponsorship  $sponsorship
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSponsorshipRequest $request, Sponsorship $sponsorship)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sponsorship  $sponsorship
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sponsorship $sponsorship)
    {
        //
    }
}
