<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Classroom;
use App\Models\Group;


class DashboardStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.student.index' ,[
           'students'=> Student::all() 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.student.create',[
            'classrooms' => Classroom::all(),
            'groups' => Group::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData =
         $request->validate([
            'name' => 'required','max:255',
            'nim' => 'required','unique',
            'classroom_id' => 'required',
            'group_id' => 'required',
            'alamat'=>'required',
            'no_tlp'=>'required',
            'email'=>'required',
            'nama_ortu'=>'required'
        ]);

        Student::create($validatedData);
        return redirect('/dashboard/student')->with('success', 'data siswa telah berhasil di input!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $student = Student::findOrfail($id);
        return view('dashboard.student.edit',[
            'student' => $student,
            'classrooms' => Classroom::all(),
            'groups' => Group::all()
           
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData =
         $request->validate([
            'name' => 'required','max:255',
            'nim' => 'required','unique',
            'classroom_id' => 'required',
            'group_id' => 'required',
            'alamat'=>'required',
            'no_tlp'=>'required',
            'email'=>'required',
            'nama_ortu'=>'required'
        ]);
       $student = Student::findOrfail($id);
        Student::where('id', $student->id)
            ->update($validatedData);
        return redirect('/dashboard/student')->with('success', 'data siswa telah berhasil di update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::destroy($id);
        return redirect('/dashboard/student')->with('success', 'data siswa telah dihapus!');
    }
}
