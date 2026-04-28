<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public $users = [
        ['name' => 'Mario', 'surname'=>'Rossi', 'role'=>'CEO'],
        ['name' => 'Luigi', 'surname'=>'Bianchi', 'role'=>'CTO'],
        ['name' => 'Giulia', 'surname'=>'Verdi', 'role'=>'CFO'],
    ];
    public function homepage()
    {
        return view('welcome');
    }

    public function aboutUs() {
    return view('about-us', [
        'users' => $this->users
    ]);
}

public function aboutUsDetail($name) {

    foreach ($this->users as $user) {
        if ($name == $user['name']){
            return view('about-us-detail', [
                'user' => $user
            ]);
        }
    }
}

public function contactUs(Request $request) {
    $user = $request->input('user');
    $email = $request->input('email');
    $message = $request->input('message');
    $userData = compact('user', 'email', 'message');

    try{
        Mail::to($email)->send(new ContactMail($userData));
    }catch (\Exception $e) {
        return redirect()->route('homepage')->with('emailError', "C'è stato un errore nell'invio del messaggio Riprova più tardi");
    }

    return redirect(route('homepage'))->with('emailSent', 'Messaggio inviato con successo!');
}
public function profile() {

    return view('prodotti.profile');
}

}
