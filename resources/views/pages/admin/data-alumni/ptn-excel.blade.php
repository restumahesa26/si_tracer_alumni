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
                <th style="vertical-align : middle; text-align:center;">IP SMT 1</th>
                <th style="vertical-align : middle; text-align:center;">IP SMT 2</th>
                <th style="vertical-align : middle; text-align:center;">IP SMT 3</th>
                <th style="vertical-align : middle; text-align:center;">IP SMT 4</th>
                <th style="vertical-align : middle; text-align:center;">IP SMT 5</th>
                <th style="vertical-align : middle; text-align:center;">IP SMT 6</th>
                <th style="vertical-align : middle; text-align:center;">IP SMT 7</th>
                <th style="vertical-align : middle; text-align:center;">IP SMT 8</th>
                <th style="vertical-align : middle; text-align:center;">IP SMT 9</th>
                <th style="vertical-align : middle; text-align:center;">IP SMT 10</th>
                <th style="vertical-align : middle; text-align:center;">IP SMT 11</th>
                <th style="vertical-align : middle; text-align:center;">IP SMT 12</th>
                <th style="vertical-align : middle; text-align:center;">IP SMT 13</th>
                <th style="vertical-align : middle; text-align:center;">IP SMT 14</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($items as $item)
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
                <td style="vertical-align : middle; text-align:center;">{{ $item->ip_1 }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->ip_2 }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->ip_3 }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->ip_4 }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->ip_5 }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->ip_6 }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->ip_7 }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->ip_8 }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->ip_9 }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->ip_10 }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->ip_11 }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->ip_12 }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->ip_13 }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->ip_14 }}</td>
            </tr>
            @empty
            <tr class="text-center">
                <td colspan="23">-- Data Kosong --</td>
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
