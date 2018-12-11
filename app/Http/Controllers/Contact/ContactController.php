<?php

namespace App\Http\Controllers\Contact;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Citalivres\Contact\ContactRepository;
use App\Http\Requests\ContactFormRequest;

class ContactController extends Controller
{
    private $contactRepository;

    public function __construct(contactRepository $contactRepository)
    {
        $this-> contactRepository = $contactRepository;
    }

    public function create()
    {
      /*  $contact = $this->contactRepository->get();*/
        return view('contact.create');

    }
    public function store(Request $request)
    {
        $contact = $this->contactRepository->store($request->all());
        if (!$contact) {
            flash('Erreur lors de la création', 'danger');
            return redirect()->back()->withInput();
        } else
            flash('Création réussie', 'success');

        return redirect(route('badminton.adherents.index'));
    }
}
