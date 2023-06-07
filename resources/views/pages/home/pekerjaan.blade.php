@extends('layouts.home')

@section('title', 'Pekerjaan')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Tracer Alumni</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item" aria-current="page">Pekerjaan</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-3">Pekerjaan</h1>
                <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Tambah Pekerjaan
                </button>
            </div>
            <div class="row justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Pekerjaan</th>
                                    <th>Jabatan</th>
                                    <th>Lokasi / Instansi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($items as $item)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">{{ $item->nama_pekerjaan }}</td>
                                    <td class="text-center">{{ $item->jabatan == NULL ? '-' : $item->jabatan }}</td>
                                    <td class="text-center">{{ $item->instansi }}</td>
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
                                                        <h5 class="modal-title" id="exampleModalLabel">Hapus Data Pekerjaan</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Hapus Data {{ $item->nama_pekerjaan }}</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" style="color: #fff"
                                                            data-bs-dismiss="modal">Tutup</button>
                                                        <form action="{{ route('pekerjaan-alumni.destroy', $item->id) }}" method="POST"
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
                                        <div class="modal fade" id="modalEdit{{ $item->id }}" tabindex="-1"  aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Hapus Data Pekerjaan</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <form action="{{ route('pekerjaan-alumni.update', $item->id) }}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-floating">
                                                                        <select class="form-select" id="nama_pekerjaan" name="nama_pekerjaan" required>
                                                                            <option value="" hidden>-- Pekerjaan --</option>
                                                                            <option value="Pegawai Negeri Sipil" @if(old('nama_pekerjaan', $item->nama_pekerjaan) == 'Pegawai Negeri Sipil') selected @endif>Pegawai Negeri Sipil</option>
                                                                            <option value="TNI" @if(old('nama_pekerjaan', $item->nama_pekerjaan) == 'TNI') selected @endif>TNI</option>
                                                                            <option value="POLRI" @if(old('nama_pekerjaan', $item->nama_pekerjaan) == 'POLRI') selected @endif>POLRI</option>
                                                                            <option value="Karyawan Swasta" @if(old('nama_pekerjaan', $item->nama_pekerjaan) == 'Karyawan Swasta') selected @endif>Karyawan Swasta</option>
                                                                            <option value="Karyawan BUMN" @if(old('nama_pekerjaan', $item->nama_pekerjaan) == 'Karyawan BUMN') selected @endif>Karyawan BUMN</option>
                                                                            <option value="Karyawan BUMD" @if(old('nama_pekerjaan', $item->nama_pekerjaan) == 'Karyawan BUMD') selected @endif>Karyawan BUMD</option>
                                                                            <option value="Dosen Non ASN" @if(old('nama_pekerjaan', $item->nama_pekerjaan) == 'Dosen Non ASN') selected @endif>Dosen Non ASN</option>
                                                                            <option value="Guru Non ASN" @if(old('nama_pekerjaan', $item->nama_pekerjaan) == 'Guru Non ASN') selected @endif>Guru Non ASN</option>
                                                                            <option value="Karyawan Honorer" @if(old('nama_pekerjaan', $item->nama_pekerjaan) == 'Karyawan Honorer') selected @endif>Karyawan Honorer</option>
                                                                            {{-- <option value="Buruh Harian Lepas" @if(old('nama_pekerjaan', $item->nama_pekerjaan) == 'Buruh Harian Lepas') selected @endif>Buruh Harian Lepas</option> --}}
                                                                            <option value="Wiraswasta" @if(old('nama_pekerjaan', $item->nama_pekerjaan) == 'Wiraswasta') selected @endif>Wiraswasta</option>
                                                                            <option value="Petani" @if(old('nama_pekerjaan', $item->nama_pekerjaan) == 'Petani') selected @endif>Petani</option>
                                                                            <option value="Mengurus Rumah Tangga" @if(old('nama_pekerjaan', $item->nama_pekerjaan) == 'Mengurus Rumah Tangga') selected @endif>Mengurus Rumah Tangga</option>
                                                                            <option value="Lainnya" @if(old('nama_pekerjaan', $item->nama_pekerjaan) == 'Lainnya') selected @endif>Lainnya</option>
                                                                        </select>
                                                                        @error('nama_pekerjaan')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                        <label for="nama_pekerjaan" class="text-dark">Pekerjaan</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-floating">
                                                                        <input type="text" name="jabatan" class="form-control @error('jabatan') is-invalid @enderror" id="jabatan" placeholder="Jabatan" value="{{ old('jabatan', $item->jabatan) }}">
                                                                        @error('jabatan')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                        <label for="jabatan" class="text-dark">Jabatan</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-floating">
                                                                        <input type="text" name="instansi" class="form-control @error('instansi') is-invalid @enderror" id="instansi" placeholder="Lokasi / Instansi" value="{{ old('instansi', $item->instansi) }}" required>
                                                                        @error('instansi')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                        <label for="instansi" class="text-dark">Lokasi / Instansi<span class="text-danger">*</span></label>
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
                                    <td colspan="5">-- Data Kosong --</td>
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
                        <form action="{{ route('pekerjaan-alumni.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <select class="form-select" id="nama_pekerjaan" name="nama_pekerjaan" required>
                                                <option value="" hidden>-- Pekerjaan --</option>
                                                <option value="Pegawai Negeri Sipil" @if(old('nama_pekerjaan') == 'Pegawai Negeri Sipil') selected @endif>Pegawai Negeri Sipil</option>
                                                <option value="TNI" @if(old('nama_pekerjaan') == 'TNI') selected @endif>TNI</option>
                                                <option value="POLRI" @if(old('nama_pekerjaan') == 'POLRI') selected @endif>POLRI</option>
                                                <option value="Karyawan Swasta" @if(old('nama_pekerjaan') == 'Karyawan Swasta') selected @endif>Karyawan Swasta</option>
                                                <option value="Karyawan BUMN" @if(old('nama_pekerjaan') == 'Karyawan BUMN') selected @endif>Karyawan BUMN</option>
                                                <option value="Karyawan BUMD" @if(old('nama_pekerjaan') == 'Karyawan BUMD') selected @endif>Karyawan BUMD</option>
                                                <option value="Dosen Non ASN" @if(old('nama_pekerjaan') == 'Dosen Non ASN') selected @endif>Dosen Non ASN</option>
                                                <option value="Guru Non ASN" @if(old('nama_pekerjaan') == 'Guru Non ASN') selected @endif>Guru Non ASN</option>
                                                <option value="Karyawan Honorer" @if(old('nama_pekerjaan') == 'Karyawan Honorer') selected @endif>Karyawan Honorer</option>
                                                {{-- <option value="Buruh Harian Lepas" @if(old('nama_pekerjaan') == 'Buruh Harian Lepas') selected @endif>Buruh Harian Lepas</option> --}}
                                                <option value="Wiraswasta" @if(old('nama_pekerjaan') == 'Wiraswasta') selected @endif>Wiraswasta</option>
                                                <option value="Petani" @if(old('nama_pekerjaan') == 'Petani') selected @endif>Petani</option>
                                                <option value="Mengurus Rumah Tangga" @if(old('nama_pekerjaan') == 'Mengurus Rumah Tangga') selected @endif>Mengurus Rumah Tangga</option>
                                                <option value="Lainnya" @if(old('nama_pekerjaan') == 'Lainnya') selected @endif>Lainnya</option>
                                            </select>
                                            @error('nama_pekerjaan')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <label for="nama_pekerjaan" class="text-dark">Pekerjaan</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input type="text" name="jabatan" class="form-control @error('jabatan') is-invalid @enderror" id="jabatan" placeholder="Jabatan" value="{{ old('jabatan') }}">
                                            @error('jabatan')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <label for="jabatan" class="text-dark">Jabatan</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input type="text" name="instansi" class="form-control @error('instansi') is-invalid @enderror" id="instansi" placeholder="Lokasi / Instansi" value="{{ old('instansi') }}" required>
                                            @error('instansi')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <label for="instansi" class="text-dark">Lokasi / Instansi<span class="text-danger">*</span></label>
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
