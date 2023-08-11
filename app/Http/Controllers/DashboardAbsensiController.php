<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use App\Models\Student;
use App\Models\Group;
use App\Models\Classroom;
use Illuminate\Http\Request;


class DashboardAbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->view('dashboard.absensi.index' ,[
            'students'=> Student::all(),
            'groups' => Group::all(),
            'classrooms' => Classroom::all()
         ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('dashboard.absensi.absen' ,[
            'students'=> Student::all(),
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
        
         $validatedData = $request->validate([
            'student_id' => 'required',
            'kelas_id' => 'required',
            'status'  => 'required',
            'keterangan' => 'nullable'
        ],[
            'status.required' => 'Status Wajib Dimasukkan'
        ]);
        $validatedData['student_id'] = Student::where('id');
        Absen::create($validatedData);
        return response()->redirect('/dashboard/absensi')->with('success', 'Data absensi siswa berhasil disimpan');
      
    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
       
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Classroom::destroy($id);
        return redirect('/dashboard/student')->with('success', 'kelas telah dihapus!');
    }
}
