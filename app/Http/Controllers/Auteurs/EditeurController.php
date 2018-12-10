<?php

namespace App\Http\Controllers\Auteurs;

use App\Http\Controllers\Controller;
use Citalivres\Auteurs\EditeurRepository;

class EditeurController extends Controller
{
    private $editeurRepository;

    public function __construct(EditeurRepository $editeurRepository)
    {
        $this->editeurRepository = $editeurRepository;
    }

    public function editeurs()
    {
        $editeurs = $this->editeurRepository->get();
        return view('auteurs.editeurs')->with('editeurs',$editeurs);
    }
}
