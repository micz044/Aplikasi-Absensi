@extends('dashboard.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Daftar Absen Siswa</h1>
  </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-md-4" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Grup</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <form method="POST" action="/dashboard/absensi">
                    <button type="submit" class="btn btn-primary">Input Data</button>
                    @csrf
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->nim }}</td>
                            <td>{{ $student->classroom->kelas }}</td>
                            <td>{{ $student->group->name }}</td>
                            <td>
                                
                                @if (old('absen'))
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="absen" value="Hadir" >
                                    <label class="form-check-label" for="Hadir">Hadir</label>
                                </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="absen" value="Izin" >
                                        <label class="form-check-label" for="izin">Izin</label>
                                </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="absen" value="Alfa" >
                                    <label class="form-check-label" for="alfa">Alfa</label>
                                </div>    
                                @else
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="absen" value="Hadir">
                                    <label class="form-check-label" for="Hadir">Hadir</label>
                                </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="absen" value="Izin">
                                    <label class="form-check-label" for="izin">Izin</label>
                                </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="absen" value="Alfa">
                                    <label class="form-check-label" for="alfa">Alfa</label>
                                </div>   
                                @endif
                            </td>
                        </tr>
                    </form>   
                    @endforeach
                    </tbody>
            </table>
    </div>
@endsection

