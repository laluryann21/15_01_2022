public function render()
{
    $students = Student::latest()->paginate(5);

    if ($this->search !== null) {
        $students = Student::where('name', 'like', '%' . $this->search . '%')
                        ->latest()
                        ->paginate(5);
    }

    return view('livewire.student-index',  [
        'students' => $students,
    ]);
}