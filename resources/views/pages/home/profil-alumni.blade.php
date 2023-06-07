@extends('layouts.home')

@section('title', 'Home')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Profil</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item" aria-current="page">Profil Alumni</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-3">Profil Alumni</h1>
            </div>
            <div class="row justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-10">
                    <form action="{{ route('home.update-profil-alumni') }}" method="POST">
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
                                    <label for="angkatan" class="text-dark">Angkatan</label><sup class="text-danger">(*)</sup>
                                    <input type="text" name="angkatan" class="form-control @error('angkatan') is-invalid @enderror" id="angkatan" placeholder="Angkatan" value="{{ old('angkatan', $item->angkatan) }}" required @if($item->angkatan == '') style="border: #B04759 2px solid;" @endif>
                                    @error('angkatan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
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
                            <div class="col-md-4">
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
                            <div class="col-md-4">
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
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin</label><sup class="text-danger">(*)</sup>
                                    <div class="form-check">
                                        <label class="form-check-label text-dark">
                                            <input type="radio" class="form-check-input" name="jenis_kelamin" id="L"
                                                value="L" @if (old('jenis_kelamin', $item->jenis_kelamin) == 'L') checked @endif required @if($item->jenis_kelamin == '') style="border: #B04759 2px solid;" @endif>
                                            Laki-Laki
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label text-dark">
                                            <input type="radio" class="form-check-input" name="jenis_kelamin" id="P"
                                                value="P" @if (old('jenis_kelamin', $item->jenis_kelamin) == 'P') checked @endif required @if($item->jenis_kelamin == '') style="border: #B04759 2px solid;" @endif>
                                            Perempuan
                                        </label>
                                    </div>
                                    @error('jenis_kelamin')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="tempat_lahir">Tempat Lahir</label><sup class="text-danger">(*)</sup>
                                    <input type="text" name="tempat_lahir" class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir" placeholder="Tempat Lahir" value="{{ old('tempat_lahir', $item->tempat_lahir) }}" required @if($item->tempat_lahir == '') style="border: #B04759 2px solid;" @endif>
                                    @error('tempat_lahir')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="tanggal_lahir">Tanggal Lahir</label><sup class="text-danger">(*)</sup>
                                    <input type="date" name="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir" placeholder="Tanggal Lahir" value="{{ old('tanggal_lahir', $item->tanggal_lahir) }}" required @if($item->tanggal_lahir == '') style="border: #B04759 2px solid;" @endif>
                                    @error('tanggal_lahir')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="no_hp">Nomor Handphone</label><sup class="text-danger">(*)</sup>
                                    <input type="number" name="no_hp" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp" placeholder="Nomor Handphone" value="{{ old('no_hp', $item->no_hp) }}" required @if($item->no_hp == '') style="border: #B04759 2px solid;" @endif>
                                    @error('no_hp')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="alamat">Alamat</label><sup class="text-danger">(*)</sup>
                                    <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="Alamat" value="{{ old('alamat', $item->alamat) }}" required @if($item->alamat == '') style="border: #B04759 2px solid;" @endif>
                                    @error('alamat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="status_sekarang" class="text-dark">Status Sekarang<span class="text-danger">*</span></label>
                                    <select class="form-control" id="status_sekarang" name="status_sekarang" style="background-color: #fff !important; @if($item->status_sekarang == '') border: #B04759 2px solid; @endif" required >
                                        <option value="" hidden>-- Pilih Status Sekarang --</option>
                                        <option value="Melanjutkan Pendidikan" @if(old('status_sekarang', $item->status_sekarang) == 'Melanjutkan Pendidikan') selected @endif>Melanjutkan Pendidikan</option>
                                        <option value="Bekerja" @if(old('status_sekarang', $item->status_sekarang) == 'Bekerja') selected @endif>Bekerja</option>
                                        <option value="Lainnya" @if(old('status_sekarang', $item->status_sekarang) == 'Lainnya') selected @endif>Lainnya</option>
                                    </select>
                                    @error('status_sekarang')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="jurusan">Jurusan</label><sup class="text-danger">(*)</sup>
                                    <div class="form-check">
                                        <label class="form-check-label text-dark">
                                            <input type="radio" class="form-check-input" name="jurusan" id="IPA"
                                                value="IPA" @if (old('jurusan', $item->jurusan) == 'IPA') checked @endif required @if($item->jurusan == '') style="border: #B04759 2px solid;" @endif>
                                            IPA
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label text-dark">
                                            <input type="radio" class="form-check-input" name="jurusan" id="IPS"
                                                value="IPS" @if (old('jurusan', $item->jurusan) == 'IPS') checked @endif required @if($item->jurusan == '') style="border: #B04759 2px solid;" @endif>
                                            IPS
                                        </label>
                                    </div>
                                    @error('jurusan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="tahun_masuk">Tahun Masuk</label><sup class="text-danger">(*)</sup>
                                    <input type="number" name="tahun_masuk" class="form-control @error('tahun_masuk') is-invalid @enderror" id="tahun_masuk" placeholder="Tahun Masuk" value="{{ old('tahun_masuk', $item->tahun_masuk) }}" required @if($item->tahun_masuk == '') style="border: #B04759 2px solid;" @endif>
                                    @error('tahun_masuk')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="tahun_lulus">Tahun Lulus</label><sup class="text-danger">(*)</sup>
                                    <input type="number" name="tahun_lulus" class="form-control @error('tahun_lulus') is-invalid @enderror" id="tahun_lulus" placeholder="Tahun Lulus" value="{{ old('tahun_lulus', $item->tahun_lulus) }}" required @if($item->tahun_lulus == '') style="border: #B04759 2px solid;" @endif>
                                    @error('tahun_lulus')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success">Simpan Perubahan Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
