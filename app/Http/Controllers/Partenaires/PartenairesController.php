<?php

namespace App\Http\Controllers\Partenaires;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Citalivres\Partenaires\PartenairesRepository;


class PartenairesController extends Controller
{
    private $partenairesRepository;

    public function __construct(PartenairesRepository $partenairesRepository)
    {
        $this-> partenairesRepository = $partenairesRepository;
    }

    public function index()
    {
        $partenaires = $this->partenairesRepository->get();
        return view('partenaires.index')->with('partenaires',$partenaires);

    }
}
