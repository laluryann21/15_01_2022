<?php

namespace App\Http\Livewire;

use App\Student;
use Livewire\Component;

class StudentIndex extends Component
{
    public function render()
    {
        return view('livewire.student-index',  [
            'students' => Student::latest()->get(),
        ]);
    }
}
{
    
}