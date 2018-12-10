<?php

namespace App\Http\Controllers\Auteurs;

use App\Http\Controllers\Controller;
use Citalivres\Auteurs\AuteurRepository;

class AuteurController extends Controller
{
    private $auteurRepository;

    public function __construct(AuteurRepository $auteurRepository)
    {
        $this->auteurRepository = $auteurRepository;
    }

    public function index()
    {

       $auteurs = $this->auteurRepository->get();
       return view('auteurs.invites')->with('auteurs',$auteurs);

    }

    public function partenaires()
    {
        $auteurs = $this->auteurRepository->partenaires();
        return view('auteurs.partenaires')->with('auteurs',$auteurs);
    }

    public function editeurs()
    {
        $editeurs = $this->auteurRepository->getEditeurs();
        return view('auteurs.editeurs')->with('editeurs',$editeurs);
    }
    public function details()
    {
        $details = $this->auteurRepository->getDetails();
        return view('auteurs.details')-> with('details',$details);
    }


}
