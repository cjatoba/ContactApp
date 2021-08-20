<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;

class ContactShow extends Component
{
    public $contacts;

    public function render()
    {
        $this->contacts = Contact::all();

        return view('livewire.contact-show');
    }
}
