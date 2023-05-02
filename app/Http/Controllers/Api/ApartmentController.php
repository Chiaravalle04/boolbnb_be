<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;

// Models
use App\Models\Apartment;
use App\Models\Service;

class ApartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $apartments = Apartment::with('user', 'services')->get();

        // return response()->json([
        //     'success' => true,
        //     'message' => 'Ok',
        //     'code' => 200,
        //     'apartments' => $apartments,
        // ]);

        $data = Apartment::with('services', 'sponsorships')
            // condition when(boolean, callback function) to filter services only if requested
            ->when($request->input('services'), function ($query, $services) {
                $query->whereHas('services', function ($query) use ($services) {
                    // whereIn per ottenere gli appartamenti che hanno tutti i servizi richiesti
                    $query->whereIn('name', $services);
                }, '=', count($services));
            })
            ->when($request->input('type'), function ($query, $type) {
                $query->whereIn('type', $type);
            })
            ->when($request->input('bed'), function ($query, $bed) {
                $query->where('bed', '>=', $bed);
            })
            ->when($request->input('bathroom'), function ($query, $bathroom) {
                $query->where('bathroom', '>=', $bathroom);
            })
            ->when($request->input('price'), function ($query, $price) {
                $query->where('price', '<=', $price);
            })
            ->when($request->input('room'), function ($query, $room) {
                $query->where('room', '>=', $room);
            })
            // ->where('is_visible', true)
            // ->whereDoesntHave('sponsorships', function ($query) {
            //     $query->where('ending_date', '>', now());
            // })

            // TODO orderBy title for now
            // ->orderBy('title', 'asc')
            ->get();

        return response()->json([
            'success' => true,
            'results' => [
                'apartments' => $data,
            ]
        ]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        try {

            $apartments = Apartment::where('slug', $slug)->with('user', 'services')->firstOrFail();

            return response()->json([
                'success' => true,
                'message' => 'Ok',
                'apartments' => $apartments
            ]);

        } catch (Exception $e) {

            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ]);

        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
