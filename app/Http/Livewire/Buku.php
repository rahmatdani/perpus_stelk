<?php

namespace App\Http\Livewire;
use App\Models\Buku;
use Livewire\Component;

class Bukus extends Component
{
    // public $
    public function render()
    {
        return view('livewire.buku',[
            'buku' => Buku::latest()->get()
        ]);
    }
}
