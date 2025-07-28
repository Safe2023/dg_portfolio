<?php

namespace App\Http\Controllers;

use App\Mail\EnvoieMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class Rvd_emailController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function envoyer(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email',
            'date' => 'required|date',
        ]);

        Mail::send('mail.rdv_email', ['data' => $validated], function ($message) use ($validated) {
            $message->to('beresaf@gmail.com')
                ->subject('Nouveau rendez-vous reçu');
        });

        return back()->with('success', 'Votre rendez-vous a bien été enregistré.');
    }




public function envoiedemail(Request $request)
{
    $data = $request->validate([
        'nom_prenom' => 'required|string',
        'email' => 'required|email',
        'sujet' => 'required|string',
        'message' => 'required|string',
    ]);

    try {
        Mail::to('beresaf@gmail.com')->send(new EnvoieMail($data));
        return back()->with('success', 'Votre message a bien été envoyé.');
    } catch (\Exception $e) {
        Log::error('Erreur lors de l\'envoi d\'email : ' . $e->getMessage());
        return back()->withErrors(['email' => 'Une erreur s’est produite lors de l’envoi.']);
    }
}

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
