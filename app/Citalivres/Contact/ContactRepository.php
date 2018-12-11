<?php
/**
 * Created by PhpStorm.
 * User: Proprietaire
 * Date: 11/12/2018
 * Time: 14:20
 */

namespace Citalivres\Contact;

class ContactRepository
{
    public function get()
    {
        $contact = Contact::all();
        return $contact;
    }
}
