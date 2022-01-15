public function render()
{
    return view('livewire.student-index',  [
        'students' => $this->search === null ? 
                    Student::latest()->paginate(5) : 
                    Student::where('name', 'like', '%' . $this->search . '%')->latest()->paginate(5),
    ]);
}