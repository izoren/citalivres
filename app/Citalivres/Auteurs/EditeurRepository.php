<?php
/**
 * Created by PhpStorm.
 * User: Proprietaire
 * Date: 29/11/2018
 * Time: 22:16
 */
namespace Citalivres\Auteurs;

class EditeurRepository
{
    public function get()
    {
        $editeurs = Editeur::all();
        return $editeurs;
    }
}