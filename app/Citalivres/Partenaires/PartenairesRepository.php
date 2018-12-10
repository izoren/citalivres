<?php
/**
 * Created by PhpStorm.
 * User: Proprietaire
 * Date: 29/11/2018
 * Time: 16:22
 */

namespace Citalivres\Partenaires;

class PartenairesRepository
{
    public function get()
    {
        $partenaires = Partenaires::all();
        return $partenaires;
    }
}

