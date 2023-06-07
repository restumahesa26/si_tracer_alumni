@extends('layouts.admin')

@section('title', 'Data Alumni')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="font-weight-bold text-dark">Ubah Data Alumni</h4>
                </div>
                <form action="{{ route('data-alumni.update', $item->nisn) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nama" class="text-dark">Nama</label><sup class="text-danger">(*)</sup>
                                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Nama" value="{{ old('nama', $item->user->nama) }}" required>
                                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nisn" class="text-dark">NISN</label><sup class="text-danger">(*)</sup>
                                <input type="text" name="nisn" class="form-control @error('nisn') is-invalid @enderror" id="nisn" placeholder="NISN" value="{{ old('nisn', $item->nisn) }}" required>
                                @error('nisn')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="email" class="text-dark">Email</label><sup class="text-danger">(*)</sup>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" value="{{ old('email', $item->user->email) }}">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="password" class="text-dark">Password</label>
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" value="{{ old('password') }}">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="password_confirmation" class="text-dark">Konfirmasi Password</label>
                                <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" placeholder="Konfirmasi Password" value="{{ old('password_confirmation') }}">
                                @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('data-alumni.index') }}" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="font-weight-bold text-dark">Profil Alumni</h4>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="angkatan" class="text-dark">Angkatan</label>
                            <input type="text" name="angkatan" class="form-control @error('angkatan') is-invalid @enderror" id="angkatan" placeholder="Angkatan" value="{{ old('angkatan', $item->angkatan) }}" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            @if ($item->jenis_kelamin == 'L')
                            <div class="form-check">
                                <label class="form-check-label text-dark">
                                    <input type="radio" class="form-check-input" name="jenis_kelamin" id="L"
                                        value="L" @if (old('jenis_kelamin', $item->jenis_kelamin) == 'L') checked @endif readonly>
                                    Laki-Laki
                                </label>
                            </div>
                            @else
                            <div class="form-check">
                                <label class="form-check-label text-dark">
                                    <input type="radio" class="form-check-input" name="jenis_kelamin" id="P"
                                        value="P" @if (old('jenis_kelamin', $item->jenis_kelamin) == 'P') checked @endif readonly>
                                    Perempuan
                                </label>
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir" placeholder="Tempat Lahir" value="{{ old('tempat_lahir', $item->tempat_lahir) }}" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="text" name="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir" placeholder="Tanggal Lahir" value="{{ old('tanggal_lahir', \Carbon\Carbon::parse($item->tanggal_lahir)->translatedFormat('d F Y')) }}" readonly>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="no_hp">Nomor Handphone</label>
                            <input type="number" name="no_hp" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp" placeholder="Nomor Handphone" value="{{ old('no_hp', $item->no_hp) }}" readonly>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="Alamat" value="{{ old('alamat', $item->alamat) }}" readonly>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="status_sekarang" class="text-dark">Status Sekarang<span class="text-danger">*</span></label>
                            <input type="text" name="status_sekarang" class="form-control @error('status_sekarang') is-invalid @enderror" id="status_sekarang" placeholder="Status Sekarang" value="{{ old('status_sekarang', $item->status_sekarang) }}" readonly>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            @if ($item->jurusan == 'IPA')
                            <div class="form-check">
                                <label class="form-check-label text-dark">
                                    <input type="radio" class="form-check-input" name="jurusan" id="IPA"
                                        value="IPA" @if (old('jurusan', $item->jurusan) == 'IPA') checked @endif readonly>
                                    IPA
                                </label>
                            </div>
                            @else
                            <div class="form-check">
                                <label class="form-check-label text-dark">
                                    <input type="radio" class="form-check-input" name="jurusan" id="IPS"
                                        value="IPS" @if (old('jurusan', $item->jurusan) == 'IPS') checked @endif readonly>
                                    IPS
                                </label>
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="tahun_masuk">Tahun Masuk</label>
                            <input type="number" name="tahun_masuk" class="form-control @error('tahun_masuk') is-invalid @enderror" id="tahun_masuk" placeholder="Tahun Masuk" value="{{ old('tahun_masuk', $item->tahun_masuk) }}" readonly>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="tahun_lulus">Tahun Lulus</label>
                            <input type="number" name="tahun_lulus" class="form-control @error('tahun_lulus') is-invalid @enderror" id="tahun_lulus" placeholder="Tahun Lulus" value="{{ old('tahun_lulus', $item->tahun_lulus) }}" readonly>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
