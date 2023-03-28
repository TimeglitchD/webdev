<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Slideshow extends Component
{

    public array $photos;
    public int $position;

    public int $amountOfPhotos;

    public function render()
    {
        $this->position = 0;
        $this->photos = Storage::disk('public')->allFiles('diana-photos');
        $this->amountOfPhotos = count($this->photos);
        return view('livewire.slideshow');
    }

    public function positionBack(){
        $this->position = ($this->position - 1) % $this->amountOfPhotos;
    }

    public function positionForward()
    {
        $this->position = ($this->position + 1) % $this->amountOfPhotos;
    }
}
