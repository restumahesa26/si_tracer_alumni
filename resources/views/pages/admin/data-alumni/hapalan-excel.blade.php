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
                <th style="vertical-align : middle; text-align:center;">Juz 1</th>
                <th style="vertical-align : middle; text-align:center;">Juz 2</th>
                <th style="vertical-align : middle; text-align:center;">Juz 3</th>
                <th style="vertical-align : middle; text-align:center;">Juz 4</th>
                <th style="vertical-align : middle; text-align:center;">Juz 5</th>
                <th style="vertical-align : middle; text-align:center;">Juz 6</th>
                <th style="vertical-align : middle; text-align:center;">Juz 7</th>
                <th style="vertical-align : middle; text-align:center;">Juz 8</th>
                <th style="vertical-align : middle; text-align:center;">Juz 9</th>
                <th style="vertical-align : middle; text-align:center;">Juz 10</th>
                <th style="vertical-align : middle; text-align:center;">Juz 11</th>
                <th style="vertical-align : middle; text-align:center;">Juz 12</th>
                <th style="vertical-align : middle; text-align:center;">Juz 13</th>
                <th style="vertical-align : middle; text-align:center;">Juz 14</th>
                <th style="vertical-align : middle; text-align:center;">Juz 15</th>
                <th style="vertical-align : middle; text-align:center;">Juz 16</th>
                <th style="vertical-align : middle; text-align:center;">Juz 17</th>
                <th style="vertical-align : middle; text-align:center;">Juz 18</th>
                <th style="vertical-align : middle; text-align:center;">Juz 19</th>
                <th style="vertical-align : middle; text-align:center;">Juz 20</th>
                <th style="vertical-align : middle; text-align:center;">Juz 21</th>
                <th style="vertical-align : middle; text-align:center;">Juz 22</th>
                <th style="vertical-align : middle; text-align:center;">Juz 23</th>
                <th style="vertical-align : middle; text-align:center;">Juz 24</th>
                <th style="vertical-align : middle; text-align:center;">Juz 25</th>
                <th style="vertical-align : middle; text-align:center;">Juz 26</th>
                <th style="vertical-align : middle; text-align:center;">Juz 27</th>
                <th style="vertical-align : middle; text-align:center;">Juz 28</th>
                <th style="vertical-align : middle; text-align:center;">Juz 29</th>
                <th style="vertical-align : middle; text-align:center;">Juz 30</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($items as $item)
            <tr>
                <td style="vertical-align : middle; text-align:center;">{{ $loop->iteration }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->alumni->user->nama }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->alumni->nisn }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->juz_1 == '1' ? 'Selesai' : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->juz_2 == '1' ? 'Selesai' : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->juz_3 == '1' ? 'Selesai' : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->juz_4 == '1' ? 'Selesai' : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->juz_5 == '1' ? 'Selesai' : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->juz_6 == '1' ? 'Selesai' : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->juz_7 == '1' ? 'Selesai' : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->juz_8 == '1' ? 'Selesai' : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->juz_9 == '1' ? 'Selesai' : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->juz_10 == '1' ? 'Selesai' : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->juz_11 == '1' ? 'Selesai' : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->juz_12 == '1' ? 'Selesai' : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->juz_13 == '1' ? 'Selesai' : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->juz_14 == '1' ? 'Selesai' : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->juz_15 == '1' ? 'Selesai' : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->juz_16 == '1' ? 'Selesai' : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->juz_17 == '1' ? 'Selesai' : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->juz_18 == '1' ? 'Selesai' : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->juz_19 == '1' ? 'Selesai' : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->juz_20 == '1' ? 'Selesai' : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->juz_21 == '1' ? 'Selesai' : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->juz_22 == '1' ? 'Selesai' : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->juz_23 == '1' ? 'Selesai' : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->juz_24 == '1' ? 'Selesai' : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->juz_25 == '1' ? 'Selesai' : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->juz_26 == '1' ? 'Selesai' : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->juz_27 == '1' ? 'Selesai' : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->juz_28 == '1' ? 'Selesai' : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->juz_29 == '1' ? 'Selesai' : '-' }}</td>
                <td style="vertical-align : middle; text-align:center;">{{ $item->juz_30 == '1' ? 'Selesai' : '-' }}</td>
            </tr>
            @empty
            <tr class="text-center">
                <td colspan="7">-- Data Kosong --</td>
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
