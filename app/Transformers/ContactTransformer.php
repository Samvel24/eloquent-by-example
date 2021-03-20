<?php

namespace App\Transformers;

use App\Contact;
use League\Fractal;

class ContactTransformer extends Fractal\TransformerAbstract
{
    public function transform(Contact $contact)
    {
        return [
            'id'      => (int) $contact->Contacts_ID,
            'name'    => $contact->Contacts_Name,
            'email'   => $contact->Contacts_Email,
        ];
    }
}