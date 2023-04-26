<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\View;

class ViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        // $data = $request->validated();

        // $views = new View();
        // $views->user_ip = $data['user_ip'];
        // $views->viewed_at = $data['viewed_at'];
        // $views->save();

        // return response()->json([
        //     'success' => true,
        //     'results' => [
        //         'views' => $views,
        //     ]
        // ]);

        // auth()->user()->update(['login_ip' => Request::getClientIp()]);
        
        $apartment_id = $request->get('apartment_id');
        $user_ip = $request->getClientIp();
        $viewed_at = $request->get('viewed_at');

        // Crea un nuovo utente nel database.
        $views = new View();
        $views->apartment_id = $apartment_id;
        $views->user_ip = $user_ip;
        $views->viewed_at = $viewed_at;
        $views->save();

        return response()->json([
            'status' => 'success',
            'message' => 'views created successfully',
            'data' => $views
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
