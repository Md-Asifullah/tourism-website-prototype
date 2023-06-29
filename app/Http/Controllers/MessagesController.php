<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.contact');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);
        $formFields['status'] = 'unread';
        Message::create($formFields);
        return redirect('/contact/create')->with('message_sent', 'Your message has been sent. We will contact you shortly.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Message $message)
    {
        $msg = Message::find($message->id);

        $msg->status = 'read';

        $msg->save();

        $message->update(['status', 'read']);
        return view('messages.show', ['message' => $message]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message)
    {

        $name = $message->name;
        $message->delete();
        return redirect('/messages/manage')->with('message_deleted', 'Message from ' . $name . ' has been deleted successfully');
    }

    // Show all Messages
    public function manage()
    {
        return view('messages.manage', ['messages' => Message::latest('created_at')->get()]);
    }
}
