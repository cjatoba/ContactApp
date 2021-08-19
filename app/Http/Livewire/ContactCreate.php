<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;

class ContactCreate extends Component
{
    public $name;
    public $email;
    public $phone;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
    ];

    //Validação em tempo real
    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function create(){
        $this->validate();
        Contact::create([
            'name' => $this->name, 
            'email' => $this->email,
            'phone' => $this->phone
           ]
        );

        // Limpa os campos após o submit
        $this->name = $this->email = $this->phone = null;

        session()->flash('message', 'Contato criado com sucesso!');
    }

    public function render()
    {        
        return view('livewire.contact-create');
    }
}
