<?php
/**
 * Created by PhpStorm.
 * User: Proprietaire
 * Date: 29/11/2018
 * Time: 16:22
 */

namespace Citalivres\Partenaires;

use Illuminate\Database\Eloquent\Model;

class Partenaires extends Model
{
    protected $table = 'partenaires';
    protected $fillable = ['societe','website'];
}