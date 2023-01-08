@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Edit Data Siswa</h1>
    </div>      
    <div class="col-lg-8">
      <form method="post" action="/dashboard/student/{{ $student->id }}" class="mb-5">
        @method('put')
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $student->name) }}">
              @error('name')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="nim" class="form-label">NIM</label>
              <input type="integer" class="form-control @error('nim') is-invalid @enderror" id="nim" name="nim" value="{{ old('nim', $student->nim) }}">
              @error('nim')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="row g-2">
              <div class="col-md">
                <div class="form-floating">  
                  <select class="form-select" name="classroom_id">
                  <option selected >Pilih kelas</option>
                  @foreach ($classrooms as $classroom)
                  @if (old('classroom_id', $student->classroom_id) == $classroom->id)
                  <option value="{{ $classroom->id }}" selected>{{ $classroom->kelas }}</option> 
                  @else
                  <option value="{{ $classroom->id}}">{{ $classroom->kelas }}</option>     
                  @endif
                  @endforeach
                  </select>
              <label for="kelas">Kelas</label>
                </div>
              </div>
              <div class="col-md">
                <div class="form-floating">
                  <select class="form-select" name="group_id">
                    <option selected >Pilih Grup</option>
                    @foreach ($groups as $group)
                    @if (old('group_id', $student->group_id) == $group->id)
                    <option value="{{ $group->id }}" selected>{{ $group->name }}</option>
                    @else
                    <option value="{{ $group->id }}">{{ $group->name }}</option>
                    @endif
                    @endforeach 
                  </select> 
                  <label for="group">Grup</label>
                </div>
              </div>
            </div>  
            <div class="mb-3">
              <label for="alamat" class="form-label">Alamat Siswa</label>
              <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ old('alamat', $student->alamat) }}">
              @error('alamat')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="no_tlp" class="form-label">No Tlp</label>
              <input type="double" class="form-control @error('no_tlp') is-invalid @enderror" id="no_tlp" name="no_tlp" value="{{ old('no_tlp', $student->no_tlp) }}">
              @error('no_tlp')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $student->email) }}">
              @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="nama_ortu" class="form-label">Nama Orang Tua</label>
              <input type="text" class="form-control @error('nama_ortu') is-invalid @enderror" id="nama_ortu" name="nama_ortu" value="{{ old('nama_ortu', $student->nama_ortu) }}">
              @error('nama_ortu')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update data</button>
          </form>
    </div>
   
@endsection