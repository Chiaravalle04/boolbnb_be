<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\Requests\StoreMessageRequest;
use App\Http\Requests\UpdateMessageRequest;

// Models
use App\Models\Message;
use App\Models\Apartment;

// Helper
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = Auth::id();

        $apartments = Apartment::where('user_id', Auth::user()->id)->get();

        // Recuperare un elenco di messaggi relativi agli appartamenti di un utente specifico. 
        $messages = Message::whereHas('apartment', function ($query) use ($userId) {

            $query->where('user_id', $userId);

        })->orderBy('created_at', 'desc')->get();

        return view('admin.messages.index', compact('messages', 'apartments'));
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
     * @param  \App\Http\Requests\StoreMessageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMessageRequest $request)
    {
        $data = $request->validated();

        $newMessage = Message::create($data);

        return redirect()->route('admin.messages.show', $newMessage);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        $apartments = Apartment::all();

        if ($message->apartment->user_id !== Auth::user()->id) {

            abort(403, 'Cosa cazzo vuoi fare?');
        
        }

        return view('admin.messages.show', compact('message', 'apartments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMessageRequest  $request
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMessageRequest $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        $message->delete();

        return redirect()->route('admin.messages.index');
    }
}
