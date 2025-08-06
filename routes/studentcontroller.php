
public function index()
{
    $students = Student::all();
    return view('students.index', compact('students'));
}   

public function create()
{
    return view('students.create');
}   

public function store(Request $request)
{
    $validatedData = $request->validate([
        'fname' => 'required|string|max:255',
        'lname' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:students,email',
        'phone' => 'nullable|string|max:15',
        'address' => 'nullable|string|max:255',
        'date_of_birth' => 'nullable|date',
    ]);

    Student::create($validatedData);

    return redirect()->route('students.index')->with('success', 'Student created successfully.');
}

public function show(Student $student)
{
    return view('students.show', compact('student'));
}                                       
namespace App\Models;