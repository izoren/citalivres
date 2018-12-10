<?php
/**
 * Created by PhpStorm.
 * User: Proprietaire
 * Date: 24/11/2018
 * Time: 23:49
 */
namespace Citalivres\Mots;

use Illuminate\Database\Eloquent\Model;

class Mots extends Model
{
    protected $table = 'mots';
    protected $fillable = ['mot'];
}