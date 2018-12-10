<?php
/**
 * Created by PhpStorm.
 * User: Proprietaire
 * Date: 19/11/2018
 * Time: 16:13
 */

namespace Citalivres\Auteurs;

class AuteurRepository
{
    public function get()
    {
        if(isset($_GET['var'])){
            $auteurs = Auteur::where('nom','like',$_GET['var'].'%')->where('invite','1')->orderBy('nom')->orderBy('prenom')->get();
            return $auteurs;
        }
        $auteurs = Auteur::where('invite','1')->orderBy('nom')->orderBy('prenom')->get();
        return $auteurs;
    }

    public function partenaires()
    {
        $auteurs = Auteur::where('invite','0')->orderBy('nom')->orderBy('prenom')->get();
        return $auteurs;
    }

    public function getEditeurs()
    {
        $editeurs = Editeur::all();
        return $editeurs;
    }
    public function getDetails()
    {

    }
}