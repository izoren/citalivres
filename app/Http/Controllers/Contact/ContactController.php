<?php

namespace App\Http\Controllers\Contact;

use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use Citalivres\Contact\ContactRepository;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;

class ContactController extends Controller
{
    private $contactRepository;

    public function __construct(contactRepository $contactRepository)
    {
        $this-> contactRepository = $contactRepository;
    }

    public function create()
    {
        return view('contact.create');
    }
    public function store(ContactRequest $request)
    {
        $contact = $this->contactRepository->store($request->all());
        if (!$contact) {
            Session::flash('danger', 'Erreur lors de l\'envois de votre message.');
            return redirect()->back()->withInput();
        } else
            $data = array(
                'nom' => $request -> nom,
                'email' => $request -> email,
                'message' => $request -> message
            );
        Mail::to('izoren174@gmail.com')->send(new Contact($data));
        Session::flash('success', 'Votre message a bien été envoyé.');
        return redirect(route('contact.create'));
    }
}
