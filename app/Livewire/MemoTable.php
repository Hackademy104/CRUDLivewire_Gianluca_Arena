<?php

namespace App\Livewire;

use App\Models\Memo;
use Livewire\Component;

class MemoTable extends Component
{
    public function delete(Memo $memo){
        $memo->delete();
    }

    public function render()
    {
        $memos = Memo::all();
        return view('livewire.memo-table', compact('memos'));
    }
}
