<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Position;
use App\Http\Requests\StoreTeacherRequest;
use App\Http\Requests\UpdateTeacherRequest;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.teacher.index', [
            'teachers' => Teacher::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.teacher.create',[
            'positions' => position::all(),
            'teachers' => Teacher::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTeacherRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTeacherRequest $request)
    {
        
        $validatedData = $request->all();
        Teacher::create($validatedData);
        return redirect('/dashboard/teacher')->with('success', 'data Guru telah berhasil di input!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teacher = Teacher::findOrfail($id);
        return view('dashboard.teacher.edit', [
            'teacher' => $teacher,
            'positions' => position::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTeacherRequest  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTeacherRequest $request, Teacher $teacher, $id)
    {
        $validatedData = $request->all();
        $teacher = Teacher::findOrfail($id);
        Teacher::where('id', $teacher->id)
            ->update($validatedData);

        return redirect('/dashboard/teacher')->with('success', 'data pegawai telah berhasil di update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        Teacher::destroy($teacher->id);
        return redirect('/dashboard/teacher')->with('success', 'data Pegawai telah dihapus!');
    }
}
