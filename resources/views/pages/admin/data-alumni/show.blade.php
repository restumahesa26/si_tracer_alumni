@extends('layouts.admin')

@section('title', 'Data Alumni')

@section('content')
<a href="{{ route('data-alumni.index') }}" class="btn btn-sm btn-info mb-3">Kembali</a>
@if ($item->hapalan)
<div class="row mb-3">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="font-weight-bold text-dark">Data Hapalan Al-Qur'an Alumni - {{ $item->user->nama }}</h4>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td>Juz 1</td>
                                    <td style="width: 20%">@if($item->hapalan->juz_1 == '1') <span class="badge badge-success">Selesai</span> @else <span class="badge badge-danger">Belum Selesai</span> @endif</td>
                                </tr>
                                <tr>
                                    <td>Juz 2</td>
                                    <td style="width: 20%">@if($item->hapalan->juz_2 == '1') <span class="badge badge-success">Selesai</span> @else <span class="badge badge-danger">Belum Selesai</span> @endif</td>
                                </tr>
                                <tr>
                                    <td>Juz 3</td>
                                    <td style="width: 20%">@if($item->hapalan->juz_3 == '1') <span class="badge badge-success">Selesai</span> @else <span class="badge badge-danger">Belum Selesai</span> @endif</td>
                                </tr>
                                <tr>
                                    <td>Juz 4</td>
                                    <td style="width: 20%">@if($item->hapalan->juz_4 == '1') <span class="badge badge-success">Selesai</span> @else <span class="badge badge-danger">Belum Selesai</span> @endif</td>
                                </tr>
                                <tr>
                                    <td>Juz 5</td>
                                    <td style="width: 20%">@if($item->hapalan->juz_5 == '1') <span class="badge badge-success">Selesai</span> @else <span class="badge badge-danger">Belum Selesai</span> @endif</td>
                                </tr>
                                <tr>
                                    <td>Juz 6</td>
                                    <td style="width: 20%">@if($item->hapalan->juz_6 == '1') <span class="badge badge-success">Selesai</span> @else <span class="badge badge-danger">Belum Selesai</span> @endif</td>
                                </tr>
                                <tr>
                                    <td>Juz 7</td>
                                    <td style="width: 20%">@if($item->hapalan->juz_7 == '1') <span class="badge badge-success">Selesai</span> @else <span class="badge badge-danger">Belum Selesai</span> @endif</td>
                                </tr>
                                <tr>
                                    <td>Juz 8</td>
                                    <td style="width: 20%">@if($item->hapalan->juz_8 == '1') <span class="badge badge-success">Selesai</span> @else <span class="badge badge-danger">Belum Selesai</span> @endif</td>
                                </tr>
                                <tr>
                                    <td>Juz 9</td>
                                    <td style="width: 20%">@if($item->hapalan->juz_9 == '1') <span class="badge badge-success">Selesai</span> @else <span class="badge badge-danger">Belum Selesai</span> @endif</td>
                                </tr>
                                <tr>
                                    <td>Juz 10</td>
                                    <td style="width: 20%">@if($item->hapalan->juz_10 == '1') <span class="badge badge-success">Selesai</span> @else <span class="badge badge-danger">Belum Selesai</span> @endif</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-4">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td>Juz 11</td>
                                    <td style="width: 20%">@if($item->hapalan->juz_11 == '1') <span class="badge badge-success">Selesai</span> @else <span class="badge badge-danger">Belum Selesai</span> @endif</td>
                                </tr>
                                <tr>
                                    <td>Juz 12</td>
                                    <td style="width: 20%">@if($item->hapalan->juz_12 == '1') <span class="badge badge-success">Selesai</span> @else <span class="badge badge-danger">Belum Selesai</span> @endif</td>
                                </tr>
                                <tr>
                                    <td>Juz 13</td>
                                    <td style="width: 20%">@if($item->hapalan->juz_13 == '1') <span class="badge badge-success">Selesai</span> @else <span class="badge badge-danger">Belum Selesai</span> @endif</td>
                                </tr>
                                <tr>
                                    <td>Juz 14</td>
                                    <td style="width: 20%">@if($item->hapalan->juz_14 == '1') <span class="badge badge-success">Selesai</span> @else <span class="badge badge-danger">Belum Selesai</span> @endif</td>
                                </tr>
                                <tr>
                                    <td>Juz 15</td>
                                    <td style="width: 20%">@if($item->hapalan->juz_15 == '1') <span class="badge badge-success">Selesai</span> @else <span class="badge badge-danger">Belum Selesai</span> @endif</td>
                                </tr>
                                <tr>
                                    <td>Juz 16</td>
                                    <td style="width: 20%">@if($item->hapalan->juz_16 == '1') <span class="badge badge-success">Selesai</span> @else <span class="badge badge-danger">Belum Selesai</span> @endif</td>
                                </tr>
                                <tr>
                                    <td>Juz 17</td>
                                    <td style="width: 20%">@if($item->hapalan->juz_17 == '1') <span class="badge badge-success">Selesai</span> @else <span class="badge badge-danger">Belum Selesai</span> @endif</td>
                                </tr>
                                <tr>
                                    <td>Juz 18</td>
                                    <td style="width: 20%">@if($item->hapalan->juz_18 == '1') <span class="badge badge-success">Selesai</span> @else <span class="badge badge-danger">Belum Selesai</span> @endif</td>
                                </tr>
                                <tr>
                                    <td>Juz 19</td>
                                    <td style="width: 20%">@if($item->hapalan->juz_19 == '1') <span class="badge badge-success">Selesai</span> @else <span class="badge badge-danger">Belum Selesai</span> @endif</td>
                                </tr>
                                <tr>
                                    <td>Juz 20</td>
                                    <td style="width: 20%">@if($item->hapalan->juz_20 == '1') <span class="badge badge-success">Selesai</span> @else <span class="badge badge-danger">Belum Selesai</span> @endif</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-4">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td>Juz 21</td>
                                    <td style="width: 20%">@if($item->hapalan->juz_21 == '1') <span class="badge badge-success">Selesai</span> @else <span class="badge badge-danger">Belum Selesai</span> @endif</td>
                                </tr>
                                <tr>
                                    <td>Juz 22</td>
                                    <td style="width: 20%">@if($item->hapalan->juz_22 == '1') <span class="badge badge-success">Selesai</span> @else <span class="badge badge-danger">Belum Selesai</span> @endif</td>
                                </tr>
                                <tr>
                                    <td>Juz 23</td>
                                    <td style="width: 20%">@if($item->hapalan->juz_23 == '1') <span class="badge badge-success">Selesai</span> @else <span class="badge badge-danger">Belum Selesai</span> @endif</td>
                                </tr>
                                <tr>
                                    <td>Juz 24</td>
                                    <td style="width: 20%">@if($item->hapalan->juz_24 == '1') <span class="badge badge-success">Selesai</span> @else <span class="badge badge-danger">Belum Selesai</span> @endif</td>
                                </tr>
                                <tr>
                                    <td>Juz 25</td>
                                    <td style="width: 20%">@if($item->hapalan->juz_25 == '1') <span class="badge badge-success">Selesai</span> @else <span class="badge badge-danger">Belum Selesai</span> @endif</td>
                                </tr>
                                <tr>
                                    <td>Juz 26</td>
                                    <td style="width: 20%">@if($item->hapalan->juz_26 == '1') <span class="badge badge-success">Selesai</span> @else <span class="badge badge-danger">Belum Selesai</span> @endif</td>
                                </tr>
                                <tr>
                                    <td>Juz 27</td>
                                    <td style="width: 20%">@if($item->hapalan->juz_27 == '1') <span class="badge badge-success">Selesai</span> @else <span class="badge badge-danger">Belum Selesai</span> @endif</td>
                                </tr>
                                <tr>
                                    <td>Juz 28</td>
                                    <td style="width: 20%">@if($item->hapalan->juz_28 == '1') <span class="badge badge-success">Selesai</span> @else <span class="badge badge-danger">Belum Selesai</span> @endif</td>
                                </tr>
                                <tr>
                                    <td>Juz 29</td>
                                    <td style="width: 20%">@if($item->hapalan->juz_29 == '1') <span class="badge badge-success">Selesai</span> @else <span class="badge badge-danger">Belum Selesai</span> @endif</td>
                                </tr>
                                <tr>
                                    <td>Juz 30</td>
                                    <td style="width: 20%">@if($item->hapalan->juz_30 == '1') <span class="badge badge-success">Selesai</span> @else <span class="badge badge-danger">Belum Selesai</span> @endif</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@if ($item->prestasi_akademik)
<div class="row mb-3">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="font-weight-bold text-dark">Data Prestasi Akademik Alumni - {{ $item->user->nama }}</h4>
                </div>
                <div class="table-responsive">
                    <div class="">
                        <table class="table table-hover table-bordered" id="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Prestasi</th>
                                    <th>Tingkat</th>
                                    <th>Deskripsi</th>
                                    <th>Sertifikat</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($item->prestasi_akademik as $item2)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item2->prestasi }}</td>
                                    <td>{{ $item2->tingkat }}</td>
                                    <td>{{ $item2->deskripsi }}</td>
                                    <td><a href="{{ $item2->sertifikat }}" target="_blank">Link Sertifikat</a></td>
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
@endif

@if ($item->prestasi_non_akademik)
<div class="row mb-3">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="font-weight-bold text-dark">Data Prestasi Non Akademik Alumni - {{ $item->user->nama }}
                    </h4>
                </div>
                <div class="table-responsive">
                    <div class="">
                        <table class="table table-hover table-bordered" id="table2">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Prestasi</th>
                                    <th>Tingkat</th>
                                    <th>Deskripsi</th>
                                    <th>Sertifikat</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($item->prestasi_non_akademik as $item2)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item2->prestasi }}</td>
                                    <td>{{ $item2->tingkat }}</td>
                                    <td>{{ $item2->deskripsi }}</td>
                                    <td><a href="{{ $item2->sertifikat }}" target="_blank">Link Sertifikat</a></td>
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
@endif

@if ($item->perguruan_tinggi)
<div class="row mb-3">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="font-weight-bold text-dark">Data Perguruan Tinggi Alumni - {{ $item->user->nama }}</h4>
                </div>
                <div class="table-responsive">
                    <div class="">
                        <table class="table table-hover table-bordered" id="table3">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Universitas</th>
                                    <th>Program Studi</th>
                                    <th>Jenis Universitas</th>
                                    <th>Jalur Seleksi</th>
                                    <th>Tahun Masuk</th>
                                    <th>Tahun Lulus</th>
                                    <th>Nilai</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($item->perguruan_tinggi as $item2)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item2->nama_universitas }}</td>
                                    <td>{{ $item2->nama_program_studi }}</td>
                                    <td>{{ $item2->jenis_universitas }}</td>
                                    <td>{{ $item2->jalur_seleksi }}</td>
                                    <td>{{ $item2->tahun_masuk }}</td>
                                    <td>@if ($item2->tahun_lulus == NULL)
                                        <span class="badge badge-danger">Belum Lulus</span>
                                        @else
                                        {{ $item2->tahun_lulus }}
                                        @endif</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-success" data-toggle="modal"
                                            data-target="#exampleModal{{ $item2->id }}">
                                            <i class="fa fa-plus"></i> Lihat Nilai
                                        </button>
                                    </td>
                                    <div class="modal fade" id="exampleModal{{ $item2->id }}" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title text-dark" id="exampleModalLabel">Lihat Nilai {{ $item2->nama_universitas }}</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label for="ip" class="text-dark">IP Semester 1</label>
                                                            <input type="text" name="ip" class="form-control" id="ip" placeholder="-" value="{{ $item2->ip_1 }}" readonly>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label for="ip" class="text-dark">IP Semester 2</label>
                                                            <input type="text" name="ip" class="form-control" id="ip" placeholder="-" value="{{ $item2->ip_2 }}" readonly>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label for="ip" class="text-dark">IP Semester 3</label>
                                                            <input type="text" name="ip" class="form-control" id="ip" placeholder="-" value="{{ $item2->ip_3 }}" readonly>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label for="ip" class="text-dark">IP Semester 4</label>
                                                            <input type="text" name="ip" class="form-control" id="ip" placeholder="-" value="{{ $item2->ip_4 }}" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col-md-3">
                                                            <label for="ip" class="text-dark">IP Semester 5</label>
                                                            <input type="text" name="ip" class="form-control" id="ip" placeholder="-" value="{{ $item2->ip_5 }}" readonly>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label for="ip" class="text-dark">IP Semester 6</label>
                                                            <input type="text" name="ip" class="form-control" id="ip" placeholder="-" value="{{ $item2->ip_6 }}" readonly>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label for="ip" class="text-dark">IP Semester 7</label>
                                                            <input type="text" name="ip" class="form-control" id="ip" placeholder="-" value="{{ $item2->ip_7 }}" readonly>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label for="ip" class="text-dark">IP Semester 8</label>
                                                            <input type="text" name="ip" class="form-control" id="ip" placeholder="-" value="{{ $item2->ip_8 }}" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col-md-3">
                                                            <label for="ip" class="text-dark">IP Semester 9</label>
                                                            <input type="text" name="ip" class="form-control" id="ip" placeholder="-" value="{{ $item2->ip_9 }}" readonly>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label for="ip" class="text-dark">IP Semester 10</label>
                                                            <input type="text" name="ip" class="form-control" id="ip" placeholder="-" value="{{ $item2->ip_10 }}" readonly>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label for="ip" class="text-dark">IP Semester 11</label>
                                                            <input type="text" name="ip" class="form-control" id="ip" placeholder="-" value="{{ $item2->ip_11 }}" readonly>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label for="ip" class="text-dark">IP Semester 12</label>
                                                            <input type="text" name="ip" class="form-control" id="ip" placeholder="-" value="{{ $item2->ip_12 }}" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col-md-3">
                                                            <label for="ip" class="text-dark">IP Semester 13</label>
                                                            <input type="text" name="ip" class="form-control" id="ip" placeholder="-" value="{{ $item2->ip_13 }}" readonly>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label for="ip" class="text-dark">IP Semester 14</label>
                                                            <input type="text" name="ip" class="form-control" id="ip" placeholder="-" value="{{ $item2->ip_14 }}" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Tutup</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                                @empty
                                <tr class="text-center">
                                    <td colspan="8">-- Data Kosong --</td>
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
@endif

@if ($item->pekerjaan)
<div class="row mb-3">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="font-weight-bold text-dark">Data Pekerjaan Alumni - {{ $item->user->nama }}</h4>
                </div>
                <div class="table-responsive">
                    <div class="">
                        <table class="table table-hover table-bordered" id="table2">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Pekerjaan</th>
                                    <th>Jabatan</th>
                                    <th>Instansi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($item->pekerjaan as $item2)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item2->nama_pekerjaan }}</td>
                                    <td>{{ $item2->jabatan == NULL ? '-' : $item2->jabatan }}</td>
                                    <td>{{ $item2->instansi }}</td>
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
@endif

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
    $(document).ready(function () {
        $('#table2').DataTable({
            "orderable": false
        });
    });
    $(document).ready(function () {
        $('#table3').DataTable({
            "orderable": false
        });
    });
    $(document).ready(function () {
        $('#table4').DataTable({
            "orderable": false
        });
    });

</script>
@endpush
