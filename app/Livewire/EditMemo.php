<?php

namespace App\Livewire;

use Livewire\Component;

class EditMemo extends Component
{
    public $memo;

    public $title;
    public $description;

    public function mount(){
        $this->title = $this->memo->title;
        $this->description = $this->memo->description;
    }

    public function edit(){
        $this->memo->update([
            'title' => $this->title,
            'text' => $this->description,
        ]);

        return redirect(route('welcome'));
    }

    public function render()
    {
        return view('livewire.edit-memo');
    }
}
