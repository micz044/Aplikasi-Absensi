@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">input Pegawai Baru</h1>
    </div>      
    <div class="col-lg-8">
      <form method="POST" action="/dashboard/teacher">
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
              @error('name')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="nip" class="form-label">NIP</label>
              <input type="integer" class="form-control @error('nip') is-invalid @enderror" id="nip" name="nip" value="{{ old('nip') }}">
              @error('nip')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="row g-2">
              <div class="col-md">         
                  <div class="form-floating">  
                    <select class="form-select" name="status" required autofocus>
                        <option value="PNS" {{ $teacher->status == 'PNS' ? 'selected' : '' }}>PNS</option>
                        <option value="Honorer" {{ $teacher->status == 'Honorer' ? 'selected' : '' }}>Honorer</option>                      
                    </select>
                    <label for="status">Status</label>
                  </div>
              </div>
              <div class="col-md">
                <div class="form-floating">
                  <select class="form-select" name="position_id" required autofocus>
                    @foreach ($positions as $position)
                    @if (old('position_id') == $position->id)
                    <option value="{{ $position->id }}" selected>{{ $position->posisi }}</option>
                    @else
                    <option value="{{ $position->id }}">{{ $position->posisi }}</option>
                    @endif
                    @endforeach
                  </select> 
                  <label for="group">Posisi/Jabatan</label>
                </div>
              </div>
            </div>  
            <div class="mb-3">
              <label for="alamat" class="form-label">Alamat Pegawai</label>
              <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ old('alamat') }}">
              @error('alamat')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="no_tlp" class="form-label">No Tlp</label>
              <input type="double" class="form-control @error('no_tlp') is-invalid @enderror" id="no_tlp" name="no_tlp" value="{{ old('no_tlp') }}">
              @error('no_tlp')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
              @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary">Input Data</button>
          </form>
    </div>
   
 @endsection