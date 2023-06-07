<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Data Alumni</title>
    <link rel="shortcut icon" href="{{ url('logo_si_mini.svg') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <style>
        @media print{
            @page {
                size: landscape
            }
        }

        body {
            font-family: 'Times New Roman';
        }

        table tr th, table tr td {
            font-size: 13px;
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
    <div class="table-responsive mt-3">
        <table class="table table-hover table-bordered" id="table1">
            <thead>
                <tr class="text-center">
                    <th style="vertical-align : middle; text-align:center;">No</th>
                    <th style="vertical-align : middle; text-align:center;">Nama</th>
                    <th style="vertical-align : middle; text-align:center;">NISN</th>
                    <th style="vertical-align : middle; text-align:center;">Jenis Kelamin</th>
                    <th style="vertical-align : middle; text-align:center;">Angkatan</th>
                    <th style="vertical-align : middle; text-align:center;">Tempat, Tanggal Lahir</th>
                    <th style="vertical-align : middle; text-align:center;">Jurusan</th>
                    <th style="vertical-align : middle; text-align:center;">No. HP</th>
                    <th style="vertical-align : middle; text-align:center;">Email</th>
                    <th style="vertical-align : middle; text-align:center;">Alamat</th>
                    <th style="vertical-align : middle; text-align:center;">Tahun Masuk</th>
                    <th style="vertical-align : middle; text-align:center;">Tahun Lulus</th>
                    <th style="vertical-align : middle; text-align:center;">Status Sekarang</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($items as $siswa)
                <tr>
                    <td style="vertical-align : middle; text-align:center;">{{ $loop->iteration }}</td>
                    <td style="vertical-align : middle; text-align:center;">{{ $siswa->user->nama }}</td>
                    <td style="vertical-align : middle; text-align:center;">{{ $siswa->nisn }}</td>
                    <td style="vertical-align : middle; text-align:center;">
                        @if ($siswa->jenis_kelamin == 'L')
                            Laki-Laki
                        @elseif ($siswa->jenis_kelamin == 'P')
                            Perempuan
                        @endif
                    </td>
                    <td style="vertical-align : middle; text-align:center;">{{ $siswa->angkatan }}</td>
                    <td style="vertical-align : middle; text-align:center;">{{ $siswa->tempat_lahir }}, {{ $siswa->tanggal_lahir != '' ? \Carbon\Carbon::parse($siswa->tanggal_lahir)->translatedFormat('d F Y') : '' }}</td>
                    <td style="vertical-align : middle; text-align:center;">{{ $siswa->jurusan }}</td>
                    <td style="vertical-align : middle; text-align:center;">{{ $siswa->no_hp }}</td>
                    <td style="vertical-align : middle; text-align:center;">{{ $siswa->user->email }}</td>
                    <td style="vertical-align : middle; text-align:center;">{{ $siswa->alamat }}</td>
                    <td style="vertical-align : middle; text-align:center;">{{ $siswa->tahun_masuk }}</td>
                    <td style="vertical-align : middle; text-align:center;">{{ $siswa->tahun_lulus }}</td>
                    <td style="vertical-align : middle; text-align:center;">{{ $siswa->status_sekarang }}</td>
                </tr>
                @empty
                <tr class="text-center">
                    <td colspan="12"> -- Data Kosong --</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</html>
