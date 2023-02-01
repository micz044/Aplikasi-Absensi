@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Daftar Siswa</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
          <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
         <a href="/studentExport"> <button type="button" class="btn btn-sm btn-outline-secondary">Export</button></a>
        </div>
      <input type="datetime-local" name="kalender" id="kalender">
      </div>
    </div>

    @if (session()->has('success'))
    <div class="alert alert-success col-md-4" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>    
    @endif

    <div class="table-responsive">
      <table class="table table-striped table-sm" ali>
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Kelas</th>
            <th scope="col">Grup</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($classrooms as $classroom)
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{ $classroom->kelas }}</td>
            <td></td>
            <td>
              <a href="/dashboard/absensi/create" class="badge bg-warning"><span data-feather="eye" ></span></a>
              <form action="/dashboard/absensi/" method="post" class="d-inline">
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('apakah anda ingin menghapus data ini?')" ><span data-feather="x-circle" ></span></button>
            </form>
            </td>
          </tr>   
          @endforeach
        </tbody>
      </table>
    </div>
@endsection
