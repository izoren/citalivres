<?php
/**
 * Created by PhpStorm.
 * User: Proprietaire
 * Date: 24/11/2018
 * Time: 23:50
 */

namespace Citalivres\Mots;

class MotsRepository
{
    public function get()
    {
            $mots = Mots::all();
            return $mots;
    }
}
