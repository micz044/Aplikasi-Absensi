<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use App\Models\Status;
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
        return view('dashboard.absensi.index' ,[
            'students'=> Student::all(),
            'statuses'=> Status::all(),
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
        return view('dashboard.absensi.absen' ,[
            'students'=> Student::all(),
            'statuses'=> Status::all(),
            
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
            'student_id' => 'required',
            'status_id' => 'required',
            'absen' => 'required'
        ]);
        $validatedData['student_id'] = Student::get('id');
        Absen::create($validatedData);
        return redirect('/dashboard')->with('success', 'absen siswa telah berhasil di input!');

        //return $request;
        //var_dump($validatedData);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
