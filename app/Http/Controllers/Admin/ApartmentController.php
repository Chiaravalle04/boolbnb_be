<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Apartment;
use App\Http\Requests\StoreApartmentRequest;
use App\Http\Requests\UpdateApartmentRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

// Models
use App\Models\Service;

// helper
use Illuminate\Support\Facades\Auth;

class ApartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apartments = Apartment::all();

        $titleParam = request()->input('title');
        if (isset($titleParam)) {
            $apartments = Apartment::where('title', 'LIKE', '%'.$titleParam.'%')->get();
        }
        else {
            $apartments = Apartment::all();
        }

        return view('admin.apartments.index', compact('apartments'));

        // $user = Auth::user();

        // $apartments = $user->apartments;

        // $titleParam = request()->input('title');
        // if (isset($titleParam)) {
        //     $apartments = Apartment::where('title', 'LIKE', '%'.$titleParam.'%')->get();
        // }
        // else {
        //     $apartments;
        // }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::all();

        return view('admin.apartments.create', compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreApartmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreApartmentRequest $request)
    {
        $data = $request->validated();

        if (array_key_exists('cover', $data)) {

            $imgPath = Storage::put('apartments', $data['cover']);
            $data['cover'] = $imgPath;
        }

        $data['slug'] = Str::slug($data['title']);

        $newApartment = Apartment::create($data);

        if (array_key_exists('services', $data)) {

            $newApartment->services()->sync($data['services']);

        }

        return redirect()->route('admin.apartments.show', $newApartment);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function show(Apartment $apartment)
    {
        $services = $apartment->services;
        $sponsorships = $apartment->sponsorships;

        return view('admin.apartments.show', compact('apartment', 'services', 'sponsorships'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function edit(Apartment $apartment)
    {
        $services = Service::all();

        return view('admin.apartments.edit', compact('apartment', 'services'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateApartmentRequest  $request
     * @param  \App\Models\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateApartmentRequest $request, Apartment $apartment)
    {
        $data = $request->validated();

        if (array_key_exists('cover', $data)) {

            $data['cover'] = Storage::put('apartments', $data['cover']);

            if ($apartment->cover) {

                Storage::delete($apartment->cover);

            }

        }

        if (array_key_exists('services', $data)) {

            $apartment->services()->sync($data['services']);

        } else {

            $apartment->services()->detach();

        }

        $slug = Str::slug($data['title']);

        $apartment->update($data);

        return redirect()->route('admin.apartments.index', $apartment->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apartment $apartment)
    {
        $apartment->delete();

        return redirect()->route('admin.apartments.index');
    }
}
