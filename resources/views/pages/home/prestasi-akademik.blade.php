@extends('layouts.home')

@section('title', 'Prestasi Akademik')

@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">Tracer Alumni</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item" aria-current="page">Prestasi Akademik</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="display-5 mb-3">Prestasi Akademik</h1>
                <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Tambah Prestasi Akademik
                </button>
        </div>
        <div class="row justify-content-center wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Prestasi</th>
                                <th>Tingkat</th>
                                <th>Deskripsi</th>
                                <th>Sertifikat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items as $item)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="text-center">{{ $item->prestasi }}</td>
                                <td class="text-center">{{ $item->tingkat }}</td>
                                <td class="text-justify">{{ $item->deskripsi }}</td>
                                <td class="text-center"><a href="{{ $item->sertifikat }}" target="_blank">Link Sertifikat</a></td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#modalEdit{{ $item->id }}">
                                        <i class="fa fa-pencil-alt"></i> Edit
                                    </button>
                                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#modalHapus{{ $item->id }}">
                                        <i class="fa fa-trash"></i> Hapus
                                    </button>
                                    <div class="modal fade" id="modalHapus{{ $item->id }}" tabindex="-1"  aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Hapus Data Prestasi Akademik</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Hapus Data {{ $item->prestasi }}</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" style="color: #fff"
                                                        data-bs-dismiss="modal">Tutup</button>
                                                    <form action="{{ route('prestasi-akademik-alumni.destroy', $item->id) }}" method="POST"
                                                        class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">
                                                            Hapus
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fadef" id="modalEdit{{ $item->id }}" tabindex="-1"  aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Hapus Data Prestasi Akademik</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <form action="{{ route('prestasi-akademik-alumni.update', $item->id) }}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-floating">
                                                                    <input type="text" name="prestasi" class="form-control @error('prestasi') is-invalid @enderror" id="prestasi" placeholder="Prestasi" value="{{ old('prestasi', $item->prestasi) }}" required>
                                                                    @error('prestasi')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                    <label for="prestasi" class="text-dark">Prestasi<span class="text-danger">*</span></label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-floating">
                                                                    <input type="text" name="sertifikat" class="form-control @error('sertifikat') is-invalid @enderror" id="sertifikat" placeholder="Link Sertifikat" value="{{ old('sertifikat', $item->sertifikat) }}">
                                                                    @error('sertifikat')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                    <label for="sertifikat" class="text-dark">Link Sertifikat</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 mt-3">
                                                                <div class="form-floating">
                                                                    <label for="tingkat" class="text-dark">Tingkat Prestasi<span class="text-danger">*</span></label>
                                                                    <select class="form-control" id="tingkat" name="tingkat" style="background-color: #fff !important;" required >
                                                                        <option value="" hidden>-- Pilih Tingkat Prestasi --</option>
                                                                        <option value="Kabupaten" @if(old('tingkat', $item->tingkat) == 'Kabupaten') selected @endif>Kabupaten/Kota</option>
                                                                        <option value="Provinsi" @if(old('tingkat', $item->tingkat) == 'Provinsi') selected @endif>Provinsi</option>
                                                                        <option value="Nasional" @if(old('tingkat', $item->tingkat) == 'Nasional') selected @endif>Nasional</option>
                                                                        <option value="Internasional" @if(old('tingkat', $item->tingkat) == 'Internasional') selected @endif>Internasional</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 mt-3">
                                                                <div class="form-floating">
                                                                    <textarea name="deskripsi" id="deskripsi" cols="30" rows="5" class="form-control" placeholder="Deskripsi">{{ old('deskripsi', $item->deskripsi) }}</textarea>
                                                                    @error('prestasi')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                    <label for="deskripsi" class="text-dark">Deskripsi</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" style="color: #fff"
                                                            data-bs-dismiss="modal">Tutup</button>
                                                        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr class="text-center">
                                <td colspan="6">-- Data Kosong --</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('prestasi-akademik-alumni.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" name="prestasi" class="form-control @error('prestasi') is-invalid @enderror" id="prestasi" placeholder="Prestasi" value="{{ old('prestasi') }}" required>
                                        @error('prestasi')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <label for="prestasi" class="text-dark">Prestasi<span class="text-danger">*</span></label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" name="sertifikat" class="form-control @error('sertifikat') is-invalid @enderror" id="sertifikat" placeholder="Link Sertifikat" value="{{ old('sertifikat') }}">
                                        @error('sertifikat')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <label for="sertifikat" class="text-dark">Link Sertifikat</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label for="tingkat" class="text-dark">Tingkat Prestasi<span class="text-danger">*</span></label>
                                    <select class="form-control" id="tingkat" name="tingkat" style="background-color: #fff !important;" required >
                                        <option value="" hidden>-- Pilih Tingkat Prestasi --</option>
                                        <option value="Kabupaten" @if(old('tingkat') == 'Kabupaten') selected @endif>Kabupaten/Kota</option>
                                        <option value="Provinsi" @if(old('tingkat') == 'Provinsi') selected @endif>Provinsi</option>
                                        <option value="Nasional" @if(old('tingkat') == 'Nasional') selected @endif>Nasional</option>
                                        <option value="Internasional" @if(old('tingkat') == 'Internasional') selected @endif>Internasional</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <div class="form-floating">
                                        <textarea name="deskripsi" id="deskripsi" cols="30" rows="5" class="form-control" placeholder="Deskripsi">{{ old('deskripsi') }}</textarea>
                                        @error('prestasi')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <label for="deskripsi" class="text-dark">Deskripsi</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="color: #fff;">Tutup</button>
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
@endsection

@push('addon-script')
    @if ($errors->all())
        <script>
            $('#exampleModal').modal('show');
        </script>
    @endif
@endpush
