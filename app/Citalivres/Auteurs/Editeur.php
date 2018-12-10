<?php
/**
 * Created by PhpStorm.
 * User: Proprietaire
 * Date: 29/11/2018
 * Time: 22:16
 */
namespace Citalivres\Auteurs;

use Illuminate\Database\Eloquent\Model;

class Editeur extends Model
{
    protected $table = 'editeurs';
    protected $fillable = ['nom'];
}