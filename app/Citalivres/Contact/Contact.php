<?php
/**
 * Created by PhpStorm.
 * User: Proprietaire
 * Date: 11/12/2018
 * Time: 14:20
 */

namespace Citalivres\Contact;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
protected $table = 'contact';
protected $fillable = ['nom','email','message'];
}
