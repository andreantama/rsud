<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Anggota;

class AnggotaForm extends Component
{
    public $firstname;
    public $lastname;
    protected $rules = [
        'firstname' => 'required',
        'lastname' => 'required',
    ];
    public function store()
    {
        $this->validate();

        Anggota::create([
            "firstname" => $this->firstname,
            "lastname" => $this->lastname,
        ]);

        $this->firstname = "";
        $this->lastname = "";
    }
    public function render()
    {
        $data = Anggota::orderBy("firstname", "asc")->get();
        return view('livewire.anggota-form', [
            "data" => $data,
        ]);
    }
}
