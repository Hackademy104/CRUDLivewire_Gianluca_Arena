<?php

namespace App\Livewire;



use App\Models\Memo;
use Livewire\Component;

class CreateMemo extends Component
{
    public $title;
    public $description;

    protected $rules = [
        'title' =>  'required',
        'description' => 'required',
    ];

    protected $messages = [
        'title.required' => 'Il titolo deve essere obbligatorio',
        'description.required' => 'Il testo deve essere obbligatorio'
    ];

    public function updated($property){
        $this->validateOnly($property);
    }

    public function store()
    {
        $this->validate();
        $memo = Memo::create([
            'title' => $this->title,
            'description' => $this->description,
        ]);

        $this->reset();
        session()->flash('message', 'success');
    }

    public function render()
    {
        return view('livewire.create-memo');
    }
}
