@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Daftar Siswa</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
          <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
          <a href="/studentExport"><button type="button" class="btn btn-sm btn-outline-secondary">Export</button></a>
        </div>
        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
          <span data-feather="calendar" class="align-text-bottom"></span>
          calendar
        </button>
      </div>
    </div>

    @if (session()->has('success'))
    <div class="alert alert-success col-md-4" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>    
    @endif

    <div class="table-responsive">
      <a href="/dashboard/student/create" class="btn btn-primary mb-3">Input Siswa baru</a>
      <table class="table table-striped table-sm" ali>
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">NIM</th>
            <th scope="col">Kelas</th>
            <th scope="col">Grup</th>
            <th scope="col">Alamat Siswa</th>
            <th scope="col">No.Tlp</th>
            <th scope="col">Email</th>
            <th scope="col">Nama Orang tua</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($students as $student)
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->nim }}</td>
            <td>{{ $student->classroom->kelas }}</td>
            <td>{{ $student->group->name }}</td>
            <td>{{ $student->alamat }}</td>
            <td>{{ $student->no_tlp }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->nama_ortu }}</td>
            <td>
              <a href="/dashboard/student/{{ $student->id }}/edit" class="badge bg-warning"><span data-feather="edit" ></span></a>
              <form action="/dashboard/student/{{ $student->id }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('apakah anda ingin menghapus data ini?')" ><span data-feather="x-circle" ></span></button>
            </form>
            </td>
          </tr>   
          @endforeach
          @empty($student)
          <tr>
            <td colspan="10" align="center"><b>tidak ada Data Siswa</b></td>
          </tr>             
          @endempty
        </tbody>
      </table>
    </div>
@endsection
