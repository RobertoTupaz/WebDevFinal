<?php

namespace App\Http\Controllers;

use App\Models\Don_freecs as Students;
use App\Models\Don_freecs;
use App\Models\Question_table;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Validation\Rule;

class StudentController extends Controller
{

    public function studentList() {
        $allData = Students::all();
        $allData2 = Question_table::all();
        return view('students.index', ['data' => $allData]) -> with('data2', $allData2);
    }

    public function index() {
        $allData = Students::all();
        return view('LandingPage.index', ['data' => $allData]);
    }

    public function newStudent() {
        $allData = User::all();
        return view('students.addStudent');
    }

    public function newQuestion() {
        return view('students.addQuestion');
    }

    public function subscribeFunc($id) {

        $user = User::find($id);
        $user->subscribe = "premium";
        $user->update();

        return redirect('/admin') -> with('message', 'Subscribe successfully!');
    }

    public function store(Request $request, $subs) {
        $validated = $request->validate([
            'username' => ['required', Rule::unique('don_freecs', 'username')],
            'password' => ['required', Rule::unique('don_freecs', 'password')],
            'user' => ['required', Rule::unique('don_freecs', 'user')],
        ]);

        if($subs == "regular" && Don_freecs::count() >= 3) {
            return view('students.subscribe');
        } else {
            Students::create($validated);

            return redirect('/admin') -> with('message', 'New student created successfully!');
        }
    }

    public function store2(Request $request) {
        $validated = $request->validate([
            'question' => ['required'],
            'a' => ['required'],
            'b' => ['required'],
            'c' => ['required'],
            'd' => ['required'],
            'answer' => ['required'],
        ]);

        Question_table::create($validated);

        return redirect('/admin') -> with('message', 'New Question created successfully!');
    }

    public function show($id) {
        $data = Students::findOrFail($id);
        return view('students.editStudent', ['data' => $data]);
    }

    public function show2($id) {
        $data = Question_table::findOrFail($id);
        return view('students.editQuestion', ['data' => $data]);
    }

    public function update(Request $request, $id) {
        $validated = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
            'user' => ['required'],
        ]);

        $student = Students::find($id);
        $student->username = $validated['username'];
        $student->password = $validated['password'];
        $student->user = $validated['user'];
        $student->update();

        //$student->update($validated);

        return redirect('/admin')->with('message', 'Updated Sucessfully');
    }

    public function update2(Request $request, $id) {
        $validated = $request->validate([
            'question' => ['required'],
            'a' => ['required'],
            'b' => ['required'],
            'c' => ['required'],
            'd' => ['required'],
            'answer' => ['required'],
        ]);

        $student = Question_table::find($id);
        $student->question = $validated['question'];
        $student->a = $validated['a'];
        $student->b = $validated['b'];
        $student->c = $validated['c'];
        $student->d = $validated['d'];
        $student->answer = $validated['answer'];
        $student->update();

        //$student->update($validated);

        return redirect('/admin')->with('message', 'Updated Sucessfully');
    }

    public function deleteStudent($id) {
        $student = Students::find($id);
        
        $student->delete();
 
        return redirect('/admin')->with('message', 'Deleted Sucessfully');
    }

    public function deleteQuestion($id) {
        $student = Question_table::find($id);
        
        $student->delete();
 
        return redirect('/admin')->with('message', 'Deleted Sucessfully');
    }
}