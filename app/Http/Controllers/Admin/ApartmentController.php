<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreApartmentRequest;
use App\Http\Requests\UpdateApartmentRequest;


// Models
use App\Models\Service;
use App\Models\Apartment;

// helper
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
class ApartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $apartments = Apartment::all();

        // $titleParam = request()->input('title');
        // if (isset($titleParam)) {
        //     $apartments = Apartment::where('title', 'LIKE', '%'.$titleParam.'%')->get();
        // }
        // else {
        //     $apartments = Apartment::all();
        // }

        
        // METODO PER FAR VEDERE GLI APPARTAMENTI DI QUEL DETERMINATO 
        $user = Auth::user();

        $apartments = $user->apartments;

        $titleParam = request()->input('title');
        if (isset($titleParam)) {
            $apartments = Apartment::where('title', 'LIKE', '%'.$titleParam.'%')->get();
        }
        else {
            $apartments;
        }
        
        return view('admin.apartments.index', compact('user', 'apartments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();

        $services = Service::all();

        return view('admin.apartments.create', compact('user', 'services'));
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

        $data['user_id'] = Auth::user()->id;

        $newApartment = Apartment::create($data);        

        if (array_key_exists('services', $data)) {

            $newApartment->services()->sync($data['services']);

        }

        $address = $data['address'];
        $url = 'https://api.tomtom.com/search/2/geocode/' . urlencode($address) . '.json?key=YqMdhFbqAodquBGAGfGAfSFvrkVm0sD5';
        $response = file_get_contents($url);

        // Analizza la risposta JSON
        $json = json_decode($response);
        $latitude = $json->results[0]->position->lat;
        $longitude = $json->results[0]->position->lon;

        // Salva la longitudine e la latitudine nel database
        $newApartment->update([
            'latitude' => $latitude,
            'longitude' => $longitude,
        ]);

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
        $user = Auth::user();

        $services = $apartment->services;
        $sponsorships = $apartment->sponsorships;

        if ($apartment->user_id !== Auth::user()->id) {

            abort(403, 'Cosa cazzo vuoi fare?');
        
        }

        return view('admin.apartments.show', compact('user', 'apartment', 'services', 'sponsorships'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function edit(Apartment $apartment)
    {
        $user = Auth::user();

        if ($apartment->user_id !== Auth::user()->id) {

            abort(403, 'Cosa cazzo vuoi fare?');
        
        }

        $services = Service::all();

        return view('admin.apartments.edit', compact('user', 'apartment', 'services'));
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

        $address = $data['address'];
        $url = 'https://api.tomtom.com/search/2/geocode/' . urlencode($address) . '.json?key=YqMdhFbqAodquBGAGfGAfSFvrkVm0sD5';
        $response = file_get_contents($url);

        // Analizza la risposta JSON
        $json = json_decode($response);
        $latitude = $json->results[0]->position->lat;
        $longitude = $json->results[0]->position->lon;

        // Salva la longitudine e la latitudine nel database
        $apartment->update([
            'latitude' => $latitude,
            'longitude' => $longitude,
        ]);

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
