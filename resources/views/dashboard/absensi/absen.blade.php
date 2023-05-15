@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Daftar Absen Siswa</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Print</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar" class="align-text-bottom"><span>
                        This week
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
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->nim }}</td>
                        <td>{{ $student->classroom->kelas }}</td>
                        <td>{{ $student->group->name }}</td>
                        <td>
                            <form method="post" action="/dashboard/absensi">
                                @csrf
                                <div class="col-md-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="Hadir" value="Hadir">
                                        <label class="form-check-label" for="inlineRadio1">Hadir</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="Izin" value="Izin">
                                        <label class="form-check-label" for="inlineRadio2">Izin</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="Sakit" value="Sakit">
                                        <label class="form-check-label" for="inlineRadio3">Sakit</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="Alfa" value="Alfa">
                                        <label class="form-check-label" for="inlineRadio3">Alfa</label>
                                    </div>
                                </div>
                        </td>
                    </tr>
                @endforeach
                <button type="submit" class="btn btn-primary">Input Data</button>
                </form>
            </tbody>
        </table>
    </div>
@endsection
