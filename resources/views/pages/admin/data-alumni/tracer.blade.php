<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Tracer Alumni</title>
    <link rel="shortcut icon" href="{{ url('logo_mini.svg') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <style>
        @media print{
            @page {
                size: landscape
            }
        }

        @media print {
            .pagebreak { page-break-before: always; } /* page-break-after works, as well */
        }

        body {
            font-family: 'Times New Roman';
        }

        table tr th, table tr td {
            font-size: 12px;
        }

        .table-bordered tr td {
            padding: 8px !important;
        }

        .table-bordered th, .table-bordered td{
            border: 1px solid #2C3333 !important;
        }
    </style>
</head>
<body>
    <div class="text-center">
        <h5 class="font-weight-bold">Data Tracer Alumni</h5>
    </div>
    <table class="table table-borderless">
        <tbody>
            <tr>
                <td style="width: 12%; padding: 0 !important;"><h6 class="font-weight-bold">NISN</h6></td>
                <td style="padding: 0 !important;"><h6 class="font-weight-bold">: {{ $item->nisn }}</h6></td>
            </tr>
            <tr>
                <td style="width: 12%; padding: 0 !important;"><h6 class="font-weight-bold">Nama</h6></td>
                <td style="padding: 0 !important;"><h6 class="font-weight-bold">: {{ $item->user->nama }}</h6></td>
            </tr>
            <tr>
                <td style="width: 12%; padding: 0 !important;"><h6 class="font-weight-bold">Jenis Kelamin</h6></td>
                <td style="padding: 0 !important;"><h6 class="font-weight-bold">: {{ $item->jenis_kelamin == 'L' ? 'Laki-Laki' : 'Perempuan' }}</h6></td>
            </tr>
            <tr>
                <td style="width: 12%; padding: 0 !important;"><h6 class="font-weight-bold">Angkatan</h6></td>
                <td style="padding: 0 !important;"><h6 class="font-weight-bold">: {{ $item->angkatan }}</h6></td>
            </tr>
        </tbody>
    </table>
    <h4 class="text-center font-weight-bold mt-3" style="font-size: 18px;">Data Prestasi Akademik</h4>
    <table class="table table-bordered" id="table">
        <thead>
            <tr class="text-center">
                <th style="vertical-align : middle; text-align:center;">No</th>
                <th style="vertical-align : middle; text-align:center;">Nama</th>
                <th style="vertical-align : middle; text-align:center;">NISN</th>
                <th style="vertical-align : middle; text-align:center;">Juz Hapalan</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($items as $item)
            <tr>
                <td style="vertical-align : middle; text-align:center;">{{ $loop->iteration }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->alumni->user->nama }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->alumni->nisn }}</td>
                <td style="vertical-align : middle; text-align:center;">
                @if ($item->juz_1 == '1')
                    <span class="badge badge-success text-dark">Juz 1</span>
                @endif
                @if ($item->juz_2 == '1')
                    <span class="badge badge-success text-dark">Juz 2</span>
                @endif
                @if ($item->juz_3 == '1')
                    <span class="badge badge-success text-dark">Juz 3</span>
                @endif
                @if ($item->juz_4 == '1')
                    <span class="badge badge-success text-dark">Juz 4</span>
                @endif
                @if ($item->juz_5 == '1')
                    <span class="badge badge-success text-dark">Juz 5</span>
                @endif
                @if ($item->juz_6 == '1')
                    <span class="badge badge-success text-dark">Juz 6</span>
                @endif
                @if ($item->juz_7 == '1')
                    <span class="badge badge-success text-dark">Juz 7</span>
                @endif
                @if ($item->juz_8 == '1')
                    <span class="badge badge-success text-dark">Juz 8</span>
                @endif
                @if ($item->juz_9 == '1')
                    <span class="badge badge-success text-dark">Juz 9</span>
                @endif
                @if ($item->juz_10 == '1')
                    <span class="badge badge-success text-dark">Juz 10</span>
                @endif
                @if ($item->juz_11 == '1')
                    <span class="badge badge-success text-dark">Juz 11</span>
                @endif
                @if ($item->juz_12 == '1')
                    <span class="badge badge-success text-dark">Juz 12</span>
                @endif
                @if ($item->juz_13 == '1')
                    <span class="badge badge-success text-dark">Juz 13</span>
                @endif
                @if ($item->juz_14 == '1')
                    <span class="badge badge-success text-dark">Juz 14</span>
                @endif
                @if ($item->juz_15 == '1')
                    <span class="badge badge-success text-dark">Juz 15</span>
                @endif
                @if ($item->juz_16 == '1')
                    <span class="badge badge-success text-dark">Juz 16</span>
                @endif
                @if ($item->juz_17 == '1')
                    <span class="badge badge-success text-dark">Juz 17</span>
                @endif
                @if ($item->juz_18 == '1')
                    <span class="badge badge-success text-dark">Juz 18</span>
                @endif
                @if ($item->juz_19 == '1')
                    <span class="badge badge-success text-dark">Juz 19</span>
                @endif
                @if ($item->juz_20 == '1')
                    <span class="badge badge-success text-dark">Juz 20</span>
                @endif
                @if ($item->juz_21 == '1')
                    <span class="badge badge-success text-dark">Juz 21</span>
                @endif
                @if ($item->juz_22 == '1')
                    <span class="badge badge-success text-dark">Juz 22</span>
                @endif
                @if ($item->juz_23 == '1')
                    <span class="badge badge-success text-dark">Juz 23</span>
                @endif
                @if ($item->juz_24 == '1')
                    <span class="badge badge-success text-dark">Juz 24</span>
                @endif
                @if ($item->juz_25 == '1')
                    <span class="badge badge-success text-dark">Juz 25</span>
                @endif
                @if ($item->juz_26 == '1')
                    <span class="badge badge-success text-dark">Juz 26</span>
                @endif
                @if ($item->juz_27 == '1')
                    <span class="badge badge-success text-dark">Juz 27</span>
                @endif
                @if ($item->juz_28 == '1')
                    <span class="badge badge-success text-dark">Juz 28</span>
                @endif
                @if ($item->juz_29 == '1')
                    <span class="badge badge-success text-dark">Juz 29</span>
                @endif
                @if ($item->juz_30 == '1')
                    <span class="badge badge-success text-dark">Juz 30</span>
                @endif
                </td>
            </tr>
            @empty
            <tr class="text-center">
                <td colspan="7">-- Data Kosong --</td>
            </tr>
            @endforelse
        </tbody>
    </table>
    <div class="pagebreak"></div>
    <h4 class="text-center font-weight-bold mt-4" style="font-size: 18px;">Data Prestasi Akademik</h4>
    <table class="table table-bordered" id="table">
        <thead>
            <tr class="text-center">
                <th style="vertical-align : middle; text-align:center;">No</th>
                <th style="vertical-align : middle; text-align:center;">Nama</th>
                <th style="vertical-align : middle; text-align:center;">NISN</th>
                <th style="vertical-align : middle; text-align:center;">Prestasi</th>
                <th style="vertical-align : middle; text-align:center;">Tingkat</th>
                <th style="vertical-align : middle; text-align:center;">Sertifikat</th>
                <th style="vertical-align : middle; text-align:center;">Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($items2 as $item)
            <tr>
                <td style="vertical-align : middle; text-align:center;">{{ $loop->iteration }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->alumni->user->nama }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->alumni->nisn }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->prestasi }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->tingkat }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->sertifikat }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->deskripsi }}</td>
            </tr>
            @empty
            <tr class="text-center">
                <td colspan="7">-- Data Kosong --</td>
            </tr>
            @endforelse
        </tbody>
    </table>
    <div class="pagebreak"></div>
    <h4 class="text-center font-weight-bold mt-4" style="font-size: 18px;">Data Prestasi Non Akademik</h4>
    <table class="table table-bordered" id="table">
        <thead>
            <tr class="text-center">
                <th style="vertical-align : middle; text-align:center;">No</th>
                <th style="vertical-align : middle; text-align:center;">Nama</th>
                <th style="vertical-align : middle; text-align:center;">NISN</th>
                <th style="vertical-align : middle; text-align:center;">Prestasi</th>
                <th style="vertical-align : middle; text-align:center;">Tingkat</th>
                <th style="vertical-align : middle; text-align:center;">Sertifikat</th>
                <th style="vertical-align : middle; text-align:center;">Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($items3 as $item)
            <tr>
                <td style="vertical-align : middle; text-align:center;">{{ $loop->iteration }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->alumni->user->nama }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->alumni->nisn }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->prestasi }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->tingkat }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->sertifikat }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->deskripsi }}</td>
            </tr>
            @empty
            <tr class="text-center">
                <td colspan="7">-- Data Kosong --</td>
            </tr>
            @endforelse
        </tbody>
    </table>
    <div class="pagebreak"></div>
    <h4 class="text-center font-weight-bold mt-4" style="font-size: 18px;">Data Pekerjaan</h4>
    <table class="table table-bordered" id="table">
        <thead>
            <tr class="text-center">
                <th style="vertical-align : middle; text-align:center;">No</th>
                <th style="vertical-align : middle; text-align:center;">Nama</th>
                <th style="vertical-align : middle; text-align:center;">NISN</th>
                <th style="vertical-align : middle; text-align:center;">Pekerjaan</th>
                <th style="vertical-align : middle; text-align:center;">Jabatan</th>
                <th style="vertical-align : middle; text-align:center;">Instansi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($items4 as $item)
            <tr>
                <td style="vertical-align : middle; text-align:center;">{{ $loop->iteration }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->alumni->user->nama }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->alumni->nisn }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->nama_pekerjaan }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->jabatan }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->instansi }}</td>
            </tr>
            @empty
            <tr class="text-center">
                <td colspan="6">-- Data Kosong --</td>
            </tr>
            @endforelse
        </tbody>
    </table>
    <div class="pagebreak"></div>
    <h4 class="text-center font-weight-bold mt-4" style="font-size: 18px;">Data Perguruan Tinggi</h4>
    <table class="table table-bordered" id="table">
        <thead>
            <tr class="text-center">
                <th style="vertical-align : middle; text-align:center;">No</th>
                <th style="vertical-align : middle; text-align:center;">Nama</th>
                <th style="vertical-align : middle; text-align:center;">NISN</th>
                <th style="vertical-align : middle; text-align:center;">Universitas</th>
                <th style="vertical-align : middle; text-align:center;">Program Studi</th>
                <th style="vertical-align : middle; text-align:center;">Jenis Universitas</th>
                <th style="vertical-align : middle; text-align:center;">Jalur Seleksi</th>
                <th style="vertical-align : middle; text-align:center;">Tahun Masuk</th>
                <th style="vertical-align : middle; text-align:center;">Tahun Lulus</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($items5 as $item)
            <tr>
                <td style="vertical-align : middle; text-align:center;">{{ $loop->iteration }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->alumni->user->nama }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->alumni->nisn }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->nama_universitas }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->nama_program_studi }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->jenis_universitas }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->jalur_seleksi }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->tahun_masuk }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->tahun_lulus }}</td>
            </tr>
            @empty
            <tr class="text-center">
                <td colspan="9">-- Data Kosong --</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<script>
    window.print()
</script>
</html>
