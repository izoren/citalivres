<?php
/**
 * Created by PhpStorm.
 * User: Proprietaire
 * Date: 19/11/2018
 * Time: 16:12
 */

namespace Citalivres\Auteurs;

use Illuminate\Database\Eloquent\Model;

class Auteur extends Model
{
    protected $table = 'auteurs';
    protected $fillable = ['nom','prenom','description','invite','website','details'];
}