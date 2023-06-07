@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="d-xl-flex justify-content-between align-items-start">
    <h2 class="text-dark font-weight-bold mb-2">Dashboard</h2>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="mb-2 text-dark font-weight-normal">Jumlah Alumni</h5>
                        <h2 class="text-dark font-weight-bold">{{ $alumni != 0 ? $alumni : '-' }}</h2>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="mb-2 text-dark font-weight-normal">Alumni Yang Kuliah</h5>
                        <h2 class="text-dark font-weight-bold">{{ $alumniKuliah != 0 ? $alumniKuliah : '-' }}</h2>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="mb-2 text-dark font-weight-normal">Alumni Yang Kerja</h5>
                        <h2 class="text-dark font-weight-bold">{{ $alumniKerja != 0 ? $alumniKerja : '-' }}</h2>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="mb-2 text-dark font-weight-normal">Alumni Yang Lainnya</h5>
                        <h2 class="text-dark font-weight-bold">{{ $alumniLainnya != 0 ? $alumniLainnya : '-' }}
                        </h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Grafik Alumni Sesuai Status</h5>
                        <div class="graph-custom-legend clearfix" id="device-sales-legend"></div>
                        <canvas id="device-sales"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Grafik Alumni Per Tahun</h5>
                        <div class="graph-custom-legend clearfix" id="device-sales-legend2"></div>
                        <canvas id="device-sales2"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('addon-script')
<script src="{{ url('backend/assets/vendors/chart.js/Chart.min.js') }}"></script>
<script>
    const tahunValue = [];
    @forelse(App\Helper\Helper::getAlumniPerTahun() as $item)
        tahunValue.push({{ App\Helper\Helper::countAlumniPerTahun($item['tahun_lulus']) }})
    @empty
    @endforelse

    const tahun = [];
    @forelse(App\Helper\Helper::getAlumniPerTahun() as $item)
        tahun.push({{ $item['tahun_lulus'] }})
    @empty
    @endforelse
</script>
<script>
    var deviceSalesDarkData = {
        // labels: ["Kuliah", "Abdi Negara", "Bekerja", "Lainnya"],
        labels: ["Kuliah", "Bekerja", "Lainnya"],
        datasets: [
            {
                label: 'Jumlah',
                // data: [{{ $alumniKuliah }}, {{ $alumniAbdiNegara }}, {{ $alumniKerja }}, {{ $alumniLainnya }}],
                data: [{{ $alumniKuliah }}, {{ $alumniKerja }}, {{ $alumniLainnya }}],
                backgroundColor: [
                    '#B71375', '#8B1874', '#F79540', '#FC4F00'
                ],
                borderColor: [
                    '#B71375', '#8B1874', '#F79540', '#FC4F00'
                ],
                borderWidth: 1,
                fill: false
            }
        ]
    };
    var deviceSalesDarkOptions = {
        scales: {
            xAxes: [{
                stacked: false,
                barPercentage: .9,
                categoryPercentage: 0.4,
                position: 'bottom',
                display: true,
                gridLines: {
                    display: false,
                    drawBorder: false,
                    drawTicks: false
                },
                ticks: {
                    display: true, //this will remove only the label
                    stepSize: 5,
                    fontColor: "#3a3a43",
                    fontSize: 14,
                    padding: 10,
                }
            }],
            yAxes: [{
                stacked: false,
                display: true,
                gridLines: {
                    drawBorder: false,
                    display: true,
                    color: "#3a3a43",
                    drawTicks: false,
                    zeroLineColor: '#3a3a43',
                },
                ticks: {
                    display: true,
                    beginAtZero: true,
                    stepSize: 5,
                    fontColor: "#3a3a43",
                    fontSize: 14,
                    callback: function (value, index, values) {
                        return value + ' orang ';
                    },
                },
            }]
        },
        legend: {
            display: false
        },
        legendCallback: function (chart) {
            var text = [];
            text.push('<ul class="' + chart.id + '-legend">');
            for (var i = 0; i < chart.data.datasets.length; i++) {
                text.push('<li><span class="legend-box" style="background:' + chart.data.datasets[i]
                    .backgroundColor[i] + ';"></span><span class="legend-label text-muted">');
                if (chart.data.datasets[i].label) {
                    text.push(chart.data.datasets[i].label);
                }
                text.push('</span></li>');
            }
            text.push('</ul>');
            return text.join("");
        },
        tooltips: {
            backgroundColor: 'rgba(0, 0, 0, 1)',
        },
        plugins: {
            datalabels: {
                display: false,
                align: 'center',
                anchor: 'center'
            }
        }
    };
    var barChartCanvas = $("#device-sales").get(0).getContext("2d");
    // This will get the first returned node in the jQuery collection.
    var barChart = new Chart(barChartCanvas, {
        type: 'bar',
        data: deviceSalesDarkData,
        options: deviceSalesDarkOptions
    });
    document.getElementById('device-sales').innerHTML = barChart.generateLegend();
</script>
<script>
    var deviceSalesDarkData2 = {
        labels: tahun,
        datasets: [
            {
                label: 'Jumlah',
                data: tahunValue,
                backgroundColor: [
                    '#B71375', '#8B1874', '#F79540', '#FC4F00'
                ],
                borderColor: [
                    '#B71375', '#8B1874', '#F79540', '#FC4F00'
                ],
                borderWidth: 1,
                fill: false
            }
        ]
    };
    var deviceSalesDarkOptions2 = {
        scales: {
            xAxes: [{
                stacked: false,
                barPercentage: .9,
                categoryPercentage: 0.4,
                position: 'bottom',
                display: true,
                gridLines: {
                    display: false,
                    drawBorder: false,
                    drawTicks: false
                },
                ticks: {
                    display: true, //this will remove only the label
                    stepSize: 5,
                    fontColor: "#3a3a43",
                    fontSize: 14,
                    padding: 10,
                }
            }],
            yAxes: [{
                stacked: false,
                display: true,
                gridLines: {
                    drawBorder: false,
                    display: true,
                    color: "#3a3a43",
                    drawTicks: false,
                    zeroLineColor: '#3a3a43',
                },
                ticks: {
                    display: true,
                    beginAtZero: true,
                    stepSize: 5,
                    fontColor: "#3a3a43",
                    fontSize: 14,
                    callback: function (value, index, values) {
                        return value + ' orang ';
                    },
                },
            }]
        },
        legend: {
            display: false
        },
        legendCallback: function (chart) {
            var text = [];
            text.push('<ul class="' + chart.id + '-legend">');
            for (var i = 0; i < chart.data.datasets.length; i++) {
                text.push('<li><span class="legend-box" style="background:' + chart.data.datasets[i]
                    .backgroundColor[i] + ';"></span><span class="legend-label text-muted">');
                if (chart.data.datasets[i].label) {
                    text.push(chart.data.datasets[i].label);
                }
                text.push('</span></li>');
            }
            text.push('</ul>');
            return text.join("");
        },
        tooltips: {
            backgroundColor: 'rgba(0, 0, 0, 1)',
        },
        plugins: {
            datalabels: {
                display: false,
                align: 'center',
                anchor: 'center'
            }
        }
    };
    var barChartCanvas = $("#device-sales2").get(0).getContext("2d");
    // This will get the first returned node in the jQuery collection.
    var barChart = new Chart(barChartCanvas, {
        type: 'bar',
        data: deviceSalesDarkData2,
        options: deviceSalesDarkOptions2
    });
    document.getElementById('device-sales2').innerHTML = barChart.generateLegend();
</script>
@endpush
