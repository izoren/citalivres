<?php

namespace App\Http\Controllers\Mots;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Citalivres\Mots\MotsRepository;

class MotsController extends Controller
{
    private $motsRepository;

    public function __construct(MotsRepository $motsRepository)
    {
        $this-> motsRepository = $motsRepository;
    }

    public function index()
    {
        $mots = $this->motsRepository->get();
        return view('index')->with('mots',$mots);

    }


}
