@extends('layouts.home')

@section('title', 'Perguruan Tinggi')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Tracer Alumni</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item" aria-current="page">Perguruan Tinggi</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-3">Perguruan Tinggi</h1>
                <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Tambah Perguruan Tinggi
                </button>
            </div>
            <div class="row justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Universitas</th>
                                    <th>Program Studi</th>
                                    <th>Jalur Seleksi</th>
                                    <th>Tahun Masuk</th>
                                    <th>Nilai IP Persemester</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($items as $item)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">{{ $item->nama_universitas }}</td>
                                    <td class="text-center">{{ $item->nama_program_studi }}</td>
                                    <td class="text-center">{{ $item->jalur_seleksi }}</td>
                                    <td class="text-center">{{ $item->tahun_masuk }}</td>
                                    <td class="text-center"><button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#modalLihat{{ $item->id }}">
                                        <i class="fa fa-eye"></i> Lihat Nilai
                                    </button></td>
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
                                                        <h5 class="modal-title" id="exampleModalLabel">Hapus Data Perguruan Tinggi</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Hapus Data {{ $item->nama_universitas }}</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" style="color: #fff"
                                                            data-bs-dismiss="modal">Tutup</button>
                                                        <form action="{{ route('perguruan-tinggi-alumni.destroy', $item->id) }}" method="POST"
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
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit Data Perguruan Tinggi</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <form action="{{ route('perguruan-tinggi-alumni.update', $item->id) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-floating">
                                                                        <input type="text" name="nama_universitas" class="form-control @error('nama_universitas') is-invalid @enderror" id="nama_universitas" placeholder="Nama Universitas" value="{{ old('nama_universitas', $item->nama_universitas) }}" required>
                                                                        @error('nama_universitas')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                        <label for="nama_universitas" class="text-dark">Nama Universitas<span class="text-danger">*</span></label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-floating">
                                                                        <select class="form-select" id="jenis_universitas" name="jenis_universitas" required>
                                                                            <option value="" hidden>-- Pilih Jenis Universitas</option>
                                                                            <option value="PTN" @if(old('jenis_universitas', $item->jenis_universitas) == 'PTN') selected @endif>PTN</option>
                                                                            <option value="PTKIN" @if(old('jenis_universitas', $item->jenis_universitas) == 'PTKIN') selected @endif>PTKIN</option>
                                                                            <option value="PTS" @if(old('jenis_universitas', $item->jenis_universitas) == 'PTS') selected @endif>PTS</option>
                                                                            <option value="PERGURUAN TINGGI KEDINASAN" @if(old('jenis_universitas', $item->jenis_universitas) == 'PERGURUAN TINGGI KEDINASAN') selected @endif>PERGURUAN TINGGI KEDINASAN</option>
                                                                            <option value="POLITEKNIK" @if(old('jenis_universitas', $item->jenis_universitas) == 'POLITEKNIK') selected @endif>POLITEKNIK</option>
                                                                            <option value="PERGURUAN TINGGI LUAR NEGERI" @if(old('jenis_universitas', $item->jenis_universitas) == 'PERGURUAN TINGGI LUAR NEGERI') selected @endif>PERGURUAN TINGGI LUAR NEGERI</option>
                                                                            <option value="LAINNYA" @if(old('jenis_universitas', $item->jenis_universitas) == 'LAINNYA') selected @endif>LAINNYA</option>
                                                                        </select>
                                                                        @error('jenis_universitas')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                        <label for="jenis_universitas" class="text-dark">Jenis Universitas<span class="text-danger">*</span></label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-floating">
                                                                        <select class="form-select" id="jalur_seleksi" name="jalur_seleksi"  required>
                                                                            <option value="" hidden>-- Pilih Jenis Universitas</option>
                                                                            <option value="SNMPTN (SNBP)" @if(old('jalur_seleksi', $item->jalur_seleksi) == 'SNMPTN (SNBP)') selected @endif>SNMPTN (SNBP)</option>
                                                                            <option value="SBMPTN (SNBT)" @if(old('jalur_seleksi', $item->jalur_seleksi) == 'SBMPTN (SNBT)') selected @endif>SBMPTN (SNBT)</option>
                                                                            <option value="Ujian Mandiri PTN" @if(old('jalur_seleksi', $item->jalur_seleksi) == 'Ujian Mandiri PTN') selected @endif>Ujian Mandiri PTN</option>
                                                                            <option value="SPAN-PTKIN" @if(old('jalur_seleksi', $item->jalur_seleksi) == 'SPAN-PTKIN') selected @endif>SPAN-PTKIN</option>
                                                                            <option value="UMPTKIN" @if(old('jalur_seleksi', $item->jalur_seleksi) == 'UMPTKIN') selected @endif>UMPTKIN</option>
                                                                            <option value="Ujian Mandiri PTKIN" @if(old('jalur_seleksi', $item->jalur_seleksi) == 'Ujian Mandiri PTKIN') selected @endif>Ujian Mandiri PTKIN</option>
                                                                            <option value="SNMPN (POLITEKNIK)" @if(old('jalur_seleksi', $item->jalur_seleksi) == 'SNMPN (POLITEKNIK)') selected @endif>SNMPN (POLITEKNIK)</option>
                                                                            <option value="SBMPN (POLITEKNIK)" @if(old('jalur_seleksi', $item->jalur_seleksi) == 'SBMPN (POLITEKNIK)') selected @endif>SBMPN (POLITEKNIK)</option>
                                                                            <option value="Seleksi Perguruan Tinggi Swasta" @if(old('jalur_seleksi', $item->jalur_seleksi) == 'Seleksi Perguruan Tinggi Swasta') selected @endif>Seleksi Perguruan Tinggi Swasta</option>
                                                                            <option value="KEDINASAN" @if(old('jalur_seleksi', $item->jalur_seleksi) == 'KEDINASAN') selected @endif>KEDINASAN</option>
                                                                            <option value="LAINNYA" @if(old('jalur_seleksi', $item->jalur_seleksi) == 'LAINNYA') selected @endif>LAINNYA</option>
                                                                        </select>
                                                                        @error('jalur_seleksi')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                        <label for="jalur_seleksi" class="text-dark">Jalur Seleksi<span class="text-danger">*</span></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-md-4">
                                                                    <div class="form-floating">
                                                                        <input type="text" name="nama_program_studi" class="form-control @error('nama_program_studi') is-invalid @enderror" id="nama_program_studi" placeholder="Nama Program Studi" value="{{ old('nama_program_studi', $item->nama_program_studi) }}" required>
                                                                        @error('nama_program_studi')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                        <label for="nama_program_studi" class="text-dark">Nama Program Studi<span class="text-danger">*</span></label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-floating">
                                                                        <input type="number" name="tahun_masuk" class="form-control @error('tahun_masuk') is-invalid @enderror" id="tahun_masuk" placeholder="Tahun Masuk" value="{{ old('tahun_masuk', $item->tahun_masuk) }}" required>
                                                                        @error('tahun_masuk')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                        <label for="tahun_masuk" class="text-dark">Tahun Masuk<span class="text-danger">*</span></label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-floating">
                                                                        <input type="number" name="tahun_lulus" class="form-control @error('tahun_lulus') is-invalid @enderror" id="tahun_lulus" placeholder="Tahun Lulus" value="{{ old('tahun_lulus', $item->tahun_lulus) }}">
                                                                        @error('tahun_lulus')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                        <label for="tahun_lulus" class="text-dark">Tahun Lulus</label>
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
                                        <div class="modal fade" id="modalLihat{{ $item->id }}" tabindex="-1"  aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Lihat Data Nilai Persemester</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <form action="{{ route('nilai-perguruan-tinggi-alumni.update', $item->id) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="form-floating">
                                                                        <input type="number" name="ip_1" class="form-control @error('ip_1') is-invalid @enderror" id="ip_1" placeholder="IP Semester 1" value="{{ old('ip_1', $item->ip_1) }}" max="4" min="0" step="any">
                                                                        @error('ip_1')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                        <label for="ip_1" class="text-dark">IP Semester 1</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-floating">
                                                                        <input type="number" name="ip_2" class="form-control @error('ip_2') is-invalid @enderror" id="ip_2" placeholder="IP Semester 2" value="{{ old('ip_2', $item->ip_2) }}" max="4" min="0" step="any">
                                                                        @error('ip_2')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                        <label for="ip_2" class="text-dark">IP Semester 2</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-floating">
                                                                        <input type="number" name="ip_3" class="form-control @error('ip_3') is-invalid @enderror" id="ip_3" placeholder="IP Semester 3" value="{{ old('ip_3', $item->ip_3) }}" max="4" min="0" step="any">
                                                                        @error('ip_3')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                        <label for="ip_3" class="text-dark">IP Semester 3</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-floating">
                                                                        <input type="number" name="ip_4" class="form-control @error('ip_4') is-invalid @enderror" id="ip_4" placeholder="IP Semester 4" value="{{ old('ip_4', $item->ip_4) }}" max="4" min="0" step="any">
                                                                        @error('ip_4')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                        <label for="ip_4" class="text-dark">IP Semester 4</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-md-3">
                                                                    <div class="form-floating">
                                                                        <input type="number" name="ip_5" class="form-control @error('ip_5') is-invalid @enderror" id="ip_5" placeholder="IP Semester 5" value="{{ old('ip_5', $item->ip_5) }}" max="4" min="0" step="any">
                                                                        @error('ip_5')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                        <label for="ip_5" class="text-dark">IP Semester 5</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-floating">
                                                                        <input type="number" name="ip_6" class="form-control @error('ip_6') is-invalid @enderror" id="ip_6" placeholder="IP Semester 6" value="{{ old('ip_6', $item->ip_6) }}" max="4" min="0" step="any">
                                                                        @error('ip_6')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                        <label for="ip_6" class="text-dark">IP Semester 6</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-floating">
                                                                        <input type="number" name="ip_7" class="form-control @error('ip_7') is-invalid @enderror" id="ip_7" placeholder="IP Semester 7" value="{{ old('ip_7', $item->ip_7) }}" max="4" min="0" step="any">
                                                                        @error('ip_7')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                        <label for="ip_7" class="text-dark">IP Semester 7</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-floating">
                                                                        <input type="number" name="ip_8" class="form-control @error('ip_8') is-invalid @enderror" id="ip_8" placeholder="IP Semester 8" value="{{ old('ip_8', $item->ip_8) }}" max="4" min="0" step="any">
                                                                        @error('ip_8')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                        <label for="ip_8" class="text-dark">IP Semester 8</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-md-3">
                                                                    <div class="form-floating">
                                                                        <input type="number" name="ip_9" class="form-control @error('ip_9') is-invalid @enderror" id="ip_9" placeholder="IP Semester 9" value="{{ old('ip_9', $item->ip_9) }}" max="4" min="0" step="any">
                                                                        @error('ip_9')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                        <label for="ip_9" class="text-dark">IP Semester 9</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-floating">
                                                                        <input type="number" name="ip_10" class="form-control @error('ip_10') is-invalid @enderror" id="ip_10" placeholder="IP Semester 10" value="{{ old('ip_10', $item->ip_10) }}" max="4" min="0" step="any">
                                                                        @error('ip_10')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                        <label for="ip_10" class="text-dark">IP Semester 10</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-floating">
                                                                        <input type="number" name="ip_11" class="form-control @error('ip_11') is-invalid @enderror" id="ip_11" placeholder="IP Semester 11" value="{{ old('ip_11', $item->ip_11) }}" max="4" min="0" step="any">
                                                                        @error('ip_11')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                        <label for="ip_11" class="text-dark">IP Semester 11</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-floating">
                                                                        <input type="number" name="ip_12" class="form-control @error('ip_12') is-invalid @enderror" id="ip_12" placeholder="IP Semester 12" value="{{ old('ip_12', $item->ip_12) }}" max="4" min="0" step="any">
                                                                        @error('ip_12')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                        <label for="ip_12" class="text-dark">IP Semester 12</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-md-3">
                                                                    <div class="form-floating">
                                                                        <input type="number" name="ip_13" class="form-control @error('ip_13') is-invalid @enderror" id="ip_13" placeholder="IP Semester 13" value="{{ old('ip_13', $item->ip_13) }}" max="4" min="0" step="any">
                                                                        @error('ip_13')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                        <label for="ip_13" class="text-dark">IP Semester 13</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-floating">
                                                                        <input type="number" name="ip_14" class="form-control @error('ip_14') is-invalid @enderror" id="ip_14" placeholder="IP Semester 14" value="{{ old('ip_14', $item->ip_14) }}" max="4" min="0" step="any">
                                                                        @error('ip_14')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                        <label for="ip_14" class="text-dark">IP Semester 14</label>
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
                                    <td colspan="7">-- Data Kosong --</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ route('perguruan-tinggi-alumni.store') }}" method="post">
                            @csrf
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input type="text" name="nama_universitas" class="form-control @error('nama_universitas') is-invalid @enderror" id="nama_universitas" placeholder="Nama Universitas" value="{{ old('nama_universitas') }}" required>
                                            @error('nama_universitas')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <label for="nama_universitas" class="text-dark">Nama Universitas<span class="text-danger">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <select class="form-select" id="jenis_universitas" name="jenis_universitas"required>
                                                <option value="" hidden>-- Pilih Jenis Universitas</option>
                                                <option value="PTN" @if(old('jenis_universitas' == 'PTN')) selected @endif>PTN</option>
                                                <option value="PTKIN" @if(old('jenis_universitas' == 'PTKIN')) selected @endif>PTKIN</option>
                                                <option value="PTS" @if(old('jenis_universitas' == 'PTS')) selected @endif>PTS</option>
                                                <option value="PERGURUAN TINGGI KEDINASAN" @if(old('jenis_universitas' == 'PERGURUAN TINGGI KEDINASAN')) selected @endif>PERGURUAN TINGGI KEDINASAN</option>
                                                <option value="POLITEKNIK" @if(old('jenis_universitas' == 'POLITEKNIK')) selected @endif>POLITEKNIK</option>
                                                <option value="PERGURUAN TINGGI LUAR NEGERI" @if(old('jenis_universitas' == 'PERGURUAN TINGGI LUAR NEGERI')) selected @endif>PERGURUAN TINGGI LUAR NEGERI</option>
                                                <option value="LAINNYA" @if(old('jenis_universitas' == 'LAINNYA')) selected @endif>LAINNYA</option>
                                            </select>
                                            @error('jenis_universitas')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <label for="jenis_universitas" class="text-dark">Jenis Universitas<span class="text-danger">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <select class="form-select" id="jalur_seleksi" name="jalur_seleksi" required>
                                                <option value="" hidden>-- Pilih Jenis Universitas</option>
                                                <option value="SNMPTN (SNBP)" @if(old('jenis_universitas' == 'SNMPTN (SNBP)')) selected @endif>SNMPTN (SNBP)</option>
                                                <option value="SBMPTN (SNBT)" @if(old('jenis_universitas' == 'SBMPTN (SNBT)')) selected @endif>SBMPTN (SNBT)</option>
                                                <option value="Ujian Mandiri PTN" @if(old('jenis_universitas' == 'Ujian Mandiri PTN')) selected @endif>Ujian Mandiri PTN</option>
                                                <option value="SPAN-PTKIN" @if(old('jenis_universitas' == 'SPAN-PTKIN')) selected @endif>SPAN-PTKIN</option>
                                                <option value="UMPTKIN" @if(old('jenis_universitas' == 'UMPTKIN')) selected @endif>UMPTKIN</option>
                                                <option value="Ujian Mandiri PTKIN" @if(old('jenis_universitas' == 'Ujian Mandiri PTKIN')) selected @endif>Ujian Mandiri PTKIN</option>
                                                <option value="SNMPN (POLITEKNIK)" @if(old('jenis_universitas' == 'SNMPN (POLITEKNIK)')) selected @endif>SNMPN (POLITEKNIK)</option>
                                                <option value="SBMPN (POLITEKNIK)" @if(old('jenis_universitas' == 'SBMPN (POLITEKNIK)')) selected @endif>SBMPN (POLITEKNIK)</option>
                                                <option value="Seleksi Perguruan Tinggi Swasta" @if(old('jenis_universitas' == 'Seleksi Perguruan Tinggi Swasta')) selected @endif>Seleksi Perguruan Tinggi Swasta</option>
                                                <option value="KEDINASAN" @if(old('jenis_universitas' == 'KEDINASAN')) selected @endif>KEDINASAN</option>
                                                <option value="LAINNYA" @if(old('jenis_universitas' == 'LAINNYA')) selected @endif>LAINNYA</option>
                                            </select>
                                            @error('jalur_seleksi')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <label for="jalur_seleksi" class="text-dark">Jalur Seleksi<span class="text-danger">*</span></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input type="text" name="nama_program_studi" class="form-control @error('nama_program_studi') is-invalid @enderror" id="nama_program_studi" placeholder="Nama Program Studi" value="{{ old('nama_program_studi') }}" required>
                                            @error('nama_program_studi')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <label for="nama_program_studi" class="text-dark">Nama Program Studi<span class="text-danger">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input type="number" name="tahun_masuk" class="form-control @error('tahun_masuk') is-invalid @enderror" id="tahun_masuk" placeholder="Tahun Masuk" value="{{ old('tahun_masuk') }}" required>
                                            @error('tahun_masuk')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <label for="tahun_masuk" class="text-dark">Tahun Masuk<span class="text-danger">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input type="number" name="tahun_lulus" class="form-control @error('tahun_lulus') is-invalid @enderror" id="tahun_lulus" placeholder="Tahun Lulus" value="{{ old('tahun_lulus') }}">
                                            @error('tahun_lulus')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <label for="tahun_lulus" class="text-dark">Tahun Lulus</label>
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
