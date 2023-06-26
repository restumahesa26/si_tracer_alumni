@extends('layouts.admin')

@section('title', 'Data Alumni')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="font-weight-bold text-dark">Data Alumni</h4>
                    <div class="d-flex justify-content-start">
                        <button type="button" class="btn btn-success mr-2" data-toggle="modal"
                            data-target="#exampleModal">
                            <i class="fa fa-plus"></i> Tambah Data
                        </button>
                        <button type="button" class="btn btn-primary mr-2" data-toggle="modal" data-target="#modalAlumni">
                            Download Data Alumni
                        </button>
                        <div class="modal fade" id="modalAlumni" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-dark" id="exampleModalLabel">Download Data Alumni</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="text-center">
                                            <h5 class="text-dark">Cetak Semua Data Alumni</h5>
                                            <a href="{{ route('data-alumni.print') }}" class="btn btn-danger mr-2" target="_blank">Download PDF</a>
                                            <a href="{{ route('data-alumni.print-2') }}" class="btn btn-success" target="_blank">Download
                                                Excel</a>
                                        </div>
                                        <div class="text-center mt-3">
                                            <h5 class="text-dark">Cetak Data Alumni per Tahun</h5>
                                            <form method="GET" id="form-alumni-tahun" target="_blank">
                                                <div class="form-group d-flex justify-content-center" style="margin-bottom: 0px">
                                                    <input type="number" class="form-control w-50" placeholder="Masukkan Tahun" value="{{ old('tahun') }}" name="tahun">
                                                </div>
                                                <button id="tahun-pdf" type="button" class="btn btn-danger mt-2 mr-2">Download PDF</button>
                                                <button id="tahun-excel" type="button" class="btn btn-success mt-2">Download Excel</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalTracer">
                            Download Tracer Alumni
                        </button>
                        <div class="modal fade" id="modalTracer" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-dark" id="exampleModalLabel">Download Tracer Alumni</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="text-center">
                                            <h5 class="text-dark">Hapalan Al-Qur'an</h5>
                                            <a href="{{ route('data-alumni.print-hapalan') }}" class="btn btn-danger mr-2" target="_blank">Print Data</a>
                                            <a href="{{ route('data-alumni.print-hapalan-2') }}" class="btn btn-success" target="_blank">Download
                                                Excel</a>
                                        </div>
                                        <div class="text-center mt-3">
                                            <h5 class="text-dark">Prestasi Akademik</h5>
                                            <a href="{{ route('data-alumni.print-akademik') }}" class="btn btn-danger mr-2" target="_blank">Print Data</a>
                                            <a href="{{ route('data-alumni.print-akademik-2') }}" class="btn btn-success" target="_blank">Download
                                                Excel</a>
                                        </div>
                                        <div class="text-center mt-3">
                                            <h5 class="text-dark">Prestasi Non Akademik</h5>
                                            <a href="{{ route('data-alumni.print-non-akademik') }}" class="btn btn-danger mr-2" target="_blank">Print Data</a>
                                            <a href="{{ route('data-alumni.print-non-akademik-2') }}" class="btn btn-success" target="_blank">Download
                                                Excel</a>
                                        </div>
                                        <div class="text-center mt-3">
                                            <h5 class="text-dark">Perguruan Tinggi</h5>
                                            <a href="{{ route('data-alumni.print-ptn') }}" class="btn btn-danger mr-2" target="_blank">Print Data</a>
                                            <a href="{{ route('data-alumni.print-ptn-2') }}" class="btn btn-success" target="_blank">Download
                                                Excel</a>
                                        </div>
                                        <div class="text-center mt-3">
                                            <h5 class="text-dark">Pekerjaan</h5>
                                            <a href="{{ route('data-alumni.print-pekerjaan') }}" class="btn btn-danger mr-2" target="_blank">Print Data</a>
                                            <a href="{{ route('data-alumni.print-pekerjaan-2') }}" class="btn btn-success" target="_blank">Download
                                                Excel</a>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-dark" id="exampleModalLabel">Tambah Data Alumni Baru
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{ route('data-alumni.store') }}" method="post">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="nama" class="text-dark">Nama</label><sup
                                                        class="text-danger">(*)</sup>
                                                    <input type="text" name="nama"
                                                        class="form-control @error('nama') is-invalid @enderror"
                                                        id="nama" placeholder="Nama" value="{{ old('nama') }}" required>
                                                    @error('nama')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="nisn" class="text-dark">NISN</label><sup
                                                        class="text-danger">(*)</sup>
                                                    <input type="text" name="nisn"
                                                        class="form-control @error('nisn') is-invalid @enderror"
                                                        id="nisn" placeholder="NISN" value="{{ old('nisn') }}" required>
                                                    @error('nisn')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="email" class="text-dark">Email</label><sup
                                                        class="text-danger">(*)</sup>
                                                    <input type="email" name="email"
                                                        class="form-control @error('email') is-invalid @enderror"
                                                        id="email" placeholder="Email" value="{{ old('email') }}">
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
                                                    <label for="password" class="text-dark">Password</label><sup
                                                        class="text-danger">(*)</sup>
                                                    <input type="password" name="password"
                                                        class="form-control @error('password') is-invalid @enderror"
                                                        id="password" placeholder="Password"
                                                        value="{{ old('password') }}" required>
                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="password_confirmation" class="text-dark">Konfirmasi
                                                        Password</label><sup class="text-danger">(*)</sup>
                                                    <input type="password" name="password_confirmation"
                                                        class="form-control @error('password_confirmation') is-invalid @enderror"
                                                        id="password_confirmation" placeholder="Konfirmasi Password"
                                                        value="{{ old('password_confirmation') }}" required>
                                                    @error('password_confirmation')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-success">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <div class="">
                        <table class="table table-hover table-bordered" id="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NISN</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($items as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nisn }}</td>
                                    <td>{{ $item->user->nama }}</td>
                                    <td>{{ $item->user->email }}</td>
                                    <td>
                                        @if ($item->user->status == '0')
                                        <span class="badge badge-warning">Belum Diverifikasi</span>
                                        @else
                                        <span class="badge badge-success">Sudah Diverifikasi</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('data-alumni.show', $item->nisn) }}"
                                            class="btn btn-sm btn-info">Lihat Tracer</a>
                                        <a href="{{ route('data-alumni.edit', $item->nisn) }}"
                                            class="btn btn-sm btn-primary">Edit</a>
                                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal"
                                            data-target="#modalHapus{{ $item->nisn }}">
                                            Hapus
                                        </button>
                                        <div class="modal fade" id="modalHapus{{ $item->nisn }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Hapus Data Alumni
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Hapus {{ $item->user->nama }}</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Tutup</button>
                                                        <form action="{{ route('data-alumni.destroy', $item->nisn) }}"
                                                            method="POST" class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">
                                                                <i class="fa fa-trash"></i> Hapus
                                                            </button>
                                                        </form>
                                                    </div>
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
        </div>
    </div>
</div>
@endsection

@push('addon-style')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
@endpush

@push('addon-script')
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function () {
        $('#table').DataTable({
            "orderable": false
        });
    });
</script>
<script>
    $("#tahun-excel").on("click", function(e) {
        e.preventDefault();
        $('#form-alumni-tahun').attr('action', "{{ route('data-alumni.alumni-tahun-excel') }}").submit();
    });
    $("#tahun-pdf").on("click", function(e) {
        e.preventDefault();
        $('#form-alumni-tahun').attr('action', "{{ route('data-alumni.alumni-tahun-pdf') }}").submit();
    });
</script>
@endpush
