@extends('layouts.home')

@section('title', 'Alumni')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Alumni</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item" aria-current="page">Alumni</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-5">Alumni</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="table-responsive">
                        <div class="">
                            <table class="table table-bordered" id="table">
                                <thead>
                                    <tr class="text-center">
                                        <th style="vertical-align : middle; text-align:center;">No</th>
                                        <th style="vertical-align : middle; text-align:center;">Nama</th>
                                        <th style="vertical-align : middle; text-align:center;">Jenis Kelamin</th>
                                        <th style="vertical-align : middle; text-align:center;">Angkatan</th>
                                        <th style="vertical-align : middle; text-align:center;">Perguruan Tinggi</th>
                                        <th style="vertical-align : middle; text-align:center;">Program Studi</th>
                                        <th style="vertical-align : middle; text-align:center;">Jalur Seleksi</th>
                                        <th style="vertical-align : middle; text-align:center;">Tahun Masuk</th>
                                        <th style="vertical-align : middle; text-align:center;">Tahun Lulus</th>
                                        <th style="vertical-align : middle; text-align:center;">Pekerjaan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($items as $item)
                                        <tr>
                                            <td style="vertical-align : middle;" class="text-center">{{ $loop->iteration }}</td>
                                            <td style="vertical-align : middle; text-align:center;">{{ $item->user->nama }}</td>
                                            <td style="vertical-align : middle; text-align:center;" class="text-center">
                                                @if ($item->jenis_kelamin == NULL)
                                                    -
                                                @else
                                                    {{ $item->jenis_kelamin == 'L' ? 'Laki-Laki' : 'Perempuan' }}
                                                @endif
                                            </td>
                                            <td style="vertical-align : middle; text-align:center;">{{ $item->angkatan != '' ? $item->angkatan : '-' }}</td>
                                            <td style="vertical-align : middle; text-align:center;">{{ $item->getPerguruanTinggi($item->nisn) ?  $item->getPerguruanTinggi($item->nisn)->nama_universitas : '-' }}</td>
                                            <td style="vertical-align : middle; text-align:center;">{{ $item->getPerguruanTinggi($item->nisn) ?  $item->getPerguruanTinggi($item->nisn)->nama_program_studi : '-' }}</td>
                                            <td style="vertical-align : middle; text-align:center;">{{ $item->getPerguruanTinggi($item->nisn) ?  $item->getPerguruanTinggi($item->nisn)->jalur_seleksi : '-' }}</td>
                                            <td style="vertical-align : middle; text-align:center;" class="text-center">{{ $item->getPerguruanTinggi($item->nisn) ?  $item->getPerguruanTinggi($item->nisn)->tahun_masuk : '-' }}</td>
                                            <td style="vertical-align : middle; text-align:center;" class="text-center">{{ $item->getPerguruanTinggi($item->nisn) ?  $item->getPerguruanTinggi($item->nisn)->tahun_lulus == '' ? '-' : $item->getPerguruanTinggi($item->nisn)->tahun_lulus : '-' }}</td>
                                            <td style="vertical-align : middle; text-align:center;">{{ $item->getPekerjaan($item->nisn) ?  $item->getPekerjaan($item->nisn)->nama_pekerjaan : '-' }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="9">-- Data Kosong --</td>
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
    <!-- Contact End -->
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
@endpush
