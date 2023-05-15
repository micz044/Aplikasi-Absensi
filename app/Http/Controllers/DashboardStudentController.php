<?php

namespace App\Http\Controllers;
use App\Exports\StudentExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Classroom;
use App\Models\Group;
//use Vtiful\Kernel\Excel;


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

    public function studentExport()
    {
        return Excel::download(new StudentExport, 'student.xlsx');
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
            'name' => 'required|max:255',
            'nim' => 'required|unique:students,nim',
            'classroom_id' => 'required',
            'group_id' => 'required',
            'alamat'=>'required',
            'no_tlp'=>'required',
            'email'=>'required|unique:students,email',
            'nama_ortu'=>'required'
        ],[
            'nim.unique' => 'Nim tidak boleh sama',
            'email.unique' => 'email tidak boleh sama'
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
            'name' => 'required|max:255',
            'nim' => 'required|unique:students,nim',
            'classroom_id' => 'required',
            'group_id' => 'required',
            'alamat'=>'required',
            'no_tlp'=>'required',
            'email'=>'required|unique:students,email',
            'nama_ortu'=>'required'
        ],[
            'nim.unique' => 'Nim tidak boleh sama',
            'email.unique' => 'email tidak boleh sama'
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
