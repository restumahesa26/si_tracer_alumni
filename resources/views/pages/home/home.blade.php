@extends('layouts.home')

@section('title', 'Home')

@section('content')
<!-- Carousel Start -->
<div class="container-fluid px-0 mb-5">
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{ url('image_1.jpg') }}" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-10 text-start">
                                <p class="fs-4 text-white animated slideInRight">Website <strong>Tracer Alumni</strong>
                                </p>
                                <h1 class="display-1 text-white mb-4 animated slideInRight">MAN IC BENGKULU TENGAH</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="{{ url('image_2.jpg') }}" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-end">
                            <div class="col-lg-10 text-end">
                                <p class="fs-4 text-white animated slideInLeft">Website <strong>Tracer Alumni</strong>
                                </p>
                                <h1 class="display-1 text-white mb-5 animated slideInLeft">MAN IC BENGKULU TENGAH</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->


<!-- Features Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="fs-5 fw-medium text-success">Fitur Tracer Alumni</p>
            <h1 class="display-5 mb-5">Fitur Tracer Alumni</h1>
        </div>
        <div class="row g-0 feature-row">
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                <div class="feature-item border h-100 p-5">
                    <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                        <img class="img-fluid" src="{{ url('frontend/img/icon/akademik.png') }}" alt="Icon">
                    </div>
                    <h5 class="mb-3">Prestasi Akademik</h5>
                    <p class="mb-0">Mengumpulkan Data Riwayat Prestasi Akademik setiap Alumni</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                <div class="feature-item border h-100 p-5">
                    <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                        <img class="img-fluid" src="{{ url('frontend/img/icon/soccer.png') }}" alt="Icon">
                    </div>
                    <h5 class="mb-3">Prestasi Non Akademik</h5>
                    <p class="mb-0">Mengumpulkan Data Riwayat Prestasi Non Akademik setiap Alumni</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                <div class="feature-item border h-100 p-5">
                    <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                        <img class="img-fluid" src="{{ url('frontend/img/icon/toga.png') }}" alt="Icon">
                    </div>
                    <h5 class="mb-3">Perguruan Tinggi</h5>
                    <p class="mb-0">Mengumpulkan Data Riwayat Perguruan Tinggi setiap Alumni</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                <div class="feature-item border h-100 p-5">
                    <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                        <img class="img-fluid" src="{{ url('frontend/img/icon/pekerjaan.png') }}" alt="Icon">
                    </div>
                    <h5 class="mb-3">Pekerjaan</h5>
                    <p class="mb-0">Mengumpulkan Data Riwayat Pekerjaan setiap Alumni</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->

<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="fs-5 fw-medium text-success">Grafik Data Alumni</p>
            <h1 class="display-5 mb-5">Grafik Data Alumni</h1>
        </div>
        <div class="row g-4">
            <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item position-relative h-100">
                    <div class="service-text rounded p-5">
                        <h5 class="mb-3">Lulusan Per Tahun</h4>
                            <div id="chart" style="min-height: 270px !important;"></div>
                    </div>
                    <div class="service-btn rounded-0 rounded-bottom">
                        <p class="fw-medium" href="">Grafik Alumni Berdasarkan Tahun Lulus</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item position-relative h-100">
                    <div class="service-text rounded p-5">
                        <h5 class="mb-3">Lulusan Berdasarkan Jenis Kelamin</h4>
                            <div id="chart2" style="min-height: 270px !important;"></div>
                    </div>
                    <div class="service-btn rounded-0 rounded-bottom">
                        <p class="fw-medium" href="">Grafik Alumni Berdasarkan Jenis Kelamin</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item position-relative h-100">
                    <div class="service-text rounded p-5">
                        <h5 class="mb-3">Lulusan Berdasarkan Jurusan</h4>
                            <div id="chart3" style="min-height: 270px !important;"></div>
                    </div>
                    <div class="service-btn rounded-0 rounded-bottom">
                        <p class="fw-medium" href="">Grafik Alumni Berdasarkan Jurusan</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item position-relative h-100">
                    <div class="service-text rounded p-5">
                        <h5 class="mb-3">Lulusan Berdasarkan Jalur Seleksi</h4>
                            <div id="chart4" style="min-height: 270px !important;"></div>
                    </div>
                    <div class="service-btn rounded-0 rounded-bottom">
                        <p class="fw-medium" href="">Grafik Alumni Berdasarkan Jalur Seleksi</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item position-relative h-100">
                    <div class="service-text rounded p-5">
                        <h5 class="mb-3">Lulusan Berdasarkan Jenis Perguruan Tinggi</h4>
                            <div id="chart5" style="min-height: 270px !important;"></div>
                    </div>
                    <div class="service-btn rounded-0 rounded-bottom">
                        <p class="fw-medium" href="">Grafik Alumni Berdasarkan Jenis Perguruan Tinggi</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item position-relative h-100">
                    <div class="service-text rounded p-5">
                        <h5 class="mb-3">Lulusan Berdasarkan Status</h4>
                            <div id="chart6" style="min-height: 270px !important;"></div>
                    </div>
                    <div class="service-btn rounded-0 rounded-bottom">
                        <p class="fw-medium" href="">Grafik Alumni Berdasarkan Status</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->
@endsection

@push('addon-script')
<script src="{{ url('frontend/lib/apexcharts/dist/apexcharts.min.js') }}"></script>
<script>
    var tahunValue = [];
    @forelse(App\Helper\Helper::getAlumniPerTahun() as $item)
        tahunValue.push({{ App\Helper\Helper::countAlumniPerTahun($item['tahun_lulus']) }})
    @empty
    @endforelse

    var tahun = [];
    @forelse(App\Helper\Helper::getAlumniPerTahun() as $item)
        tahun.push({{ $item['tahun_lulus'] }})
    @empty
    @endforelse

    console.log(tahunValue)
    console.log(tahun)
</script>
<script>
    const jenisKelaminValue = [];
    @forelse(App\Helper\Helper::getAlumniJenisKelamin() as $item)
        jenisKelaminValue.push({{ App\Helper\Helper::countAlumniJenisKelamin($item['jenis_kelamin']) }})
    @empty
    @endforelse
</script>
<script>
    const jurusanValue = [];
    @forelse(App\Helper\Helper::getAlumniJurusan() as $item)
        jurusanValue.push({{ App\Helper\Helper::countAlumniJurusan($item['jurusan']) }})
    @empty
    @endforelse
</script>
<script>
    const jalurSeleksiValue = [];
    jalurSeleksiValue.push({{ App\Helper\Helper::countAlumniJalurSeleksi('SNMPTN (SNBP)') }})
    jalurSeleksiValue.push({{ App\Helper\Helper::countAlumniJalurSeleksi('SBMPTN (SNBT)') }})
    jalurSeleksiValue.push({{ App\Helper\Helper::countAlumniJalurSeleksi('Ujian Mandiri PTN') }})
    jalurSeleksiValue.push({{ App\Helper\Helper::countAlumniJalurSeleksi('SPAN-PTKIN') }})
    jalurSeleksiValue.push({{ App\Helper\Helper::countAlumniJalurSeleksi('UMPTKIN') }})
    jalurSeleksiValue.push({{ App\Helper\Helper::countAlumniJalurSeleksi('Ujian Mandiri PTKIN') }})
    jalurSeleksiValue.push({{ App\Helper\Helper::countAlumniJalurSeleksi('SNMPN (POLITEKNIK)') }})
    jalurSeleksiValue.push({{ App\Helper\Helper::countAlumniJalurSeleksi('SBMPN (POLITEKNIK)') }})
    jalurSeleksiValue.push({{ App\Helper\Helper::countAlumniJalurSeleksi('Seleksi Perguruan Tinggi Swasta') }})
    jalurSeleksiValue.push({{ App\Helper\Helper::countAlumniJalurSeleksi('KEDINASAN') }})
    jalurSeleksiValue.push({{ App\Helper\Helper::countAlumniJalurSeleksi('LAINNYA') }})
</script>
<script>
    const jenisUniversitasValue = [];
    jenisUniversitasValue.push({{ App\Helper\Helper::countAlumniJenisUniversitas('PTN') }})
    jenisUniversitasValue.push({{ App\Helper\Helper::countAlumniJenisUniversitas('PTKIN') }})
    jenisUniversitasValue.push({{ App\Helper\Helper::countAlumniJenisUniversitas('PTS') }})
    jenisUniversitasValue.push({{ App\Helper\Helper::countAlumniJenisUniversitas('PERGURUAN TINGGI KEDINASAN') }})
    jenisUniversitasValue.push({{ App\Helper\Helper::countAlumniJenisUniversitas('POLITEKNIK') }})
    jenisUniversitasValue.push({{ App\Helper\Helper::countAlumniJenisUniversitas('PERGURUAN TINGGI LUAR NEGERI') }})
    jenisUniversitasValue.push({{ App\Helper\Helper::countAlumniJenisUniversitas('LAINNYA') }})
</script>
<script>
    const statusValue = [];
    statusValue.push({{ App\Helper\Helper::countAlumniStatus('Melanjutkan Pendidikan') }})
    statusValue.push({{ App\Helper\Helper::countAlumniStatus('Bekerja') }})
    statusValue.push({{ App\Helper\Helper::countAlumniStatus('Lainnya') }})
</script>
<script>
    var options = {
        series: tahunValue,
            chart: {
            width: 350,
            height: 200,
            type: 'pie',
        },
        labels: tahun,
        plotOptions: {
        pie: {
            dataLabels: {
                offset: -25,
            },
            }
        },
        responsive: [{
            breakpoint: 480,
            options: {
            chart: {
                width: 200
            },
            legend: {
                position: 'bottom'
            }
            }
        }]
    };
    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();
</script>
<script>
var options2 = {
        series: jenisKelaminValue,
            chart: {
            width: 350,
            height: 200,
            type: 'pie',
        },
        labels: ['Laki-Laki', 'Perempuan'],
        plotOptions: {
        pie: {
            dataLabels: {
                offset: -25,
            },
            }
        },
        responsive: [{
            breakpoint: 480,
            options: {
            chart: {
                width: 200
            },
            legend: {
                position: 'bottom'
            }
            }
        }]
    };
    var chart2 = new ApexCharts(document.querySelector("#chart2"), options2);
    chart2.render();
</script>
<script>
    var options3 = {
        series: jurusanValue,
            chart: {
            width: 350,
            height: 200,
            type: 'pie',
        },
        labels: ['IPA', 'IPS'],
        plotOptions: {
            pie: {
                dataLabels: {
                    offset: -25,
                },
            }
        },
        responsive: [{
            breakpoint: 480,
            options: {
            chart: {
                width: 200
            },
            legend: {
                position: 'bottom'
            }
            }
        }]
            // dataLabels: {
            //     formatter: function (val, opts) {
            //         return opts.w.config.series[opts.seriesIndex]
            //     },
            // },
        };
        var chart3 = new ApexCharts(document.querySelector("#chart3"), options3);
        chart3.render();
    </script>
    <script>
        var options4 = {
            series: jalurSeleksiValue,
                chart: {
                width: 400,
                height: 200,
                type: 'pie',
            },
            labels: ['SNBP', 'SNBT', 'UMPTN', 'SPAN-PTKIN', 'UMPTKIN', 'Mandiri PTKIN', 'SNMPN', 'SBMPN', 'SPTS', 'KEDINASAN', 'Lainnya'],
            plotOptions: {
            pie: {
                dataLabels: {
                    offset: -25,
                },
                }
            },
        responsive: [{
            breakpoint: 480,
            options: {
            chart: {
                width: 200
            },
            legend: {
                position: 'bottom'
            }
            }
        }]
        };
        var chart4 = new ApexCharts(document.querySelector("#chart4"), options4);
        chart4.render();
    </script>
    <script>
        var options5 = {
            series: jenisUniversitasValue,
                chart: {
                width: 400,
                height: 200,
                type: 'pie',
            },
            labels: ['PTN', 'PTKIN', 'PTS', 'KEDINASAN', 'POLITEKNIK', 'PTLN', 'LAINNYA'],
            plotOptions: {
            pie: {
                dataLabels: {
                    offset: -25,
                },
                }
            },
        responsive: [{
            breakpoint: 480,
            options: {
            chart: {
                width: 200
            },
            legend: {
                position: 'bottom'
            }
            }
        }]
        };
        var chart5 = new ApexCharts(document.querySelector("#chart5"), options5);
        chart5.render();
    </script>
    <script>
        var options6 = {
            series: statusValue,
                chart: {
                width: 450,
                height: 200,
                type: 'pie',
            },
            labels: ['Melanjutkan Pendidikan', 'Bekerja','Lainnya'],
            plotOptions: {
            pie: {
                dataLabels: {
                    offset: -25,
                },
                }
            },
        responsive: [{
            breakpoint: 480,
            options: {
            chart: {
                width: 200
            },
            legend: {
                position: 'bottom'
            }
            }
        }]
        };
        var chart6 = new ApexCharts(document.querySelector("#chart6"), options6);
        chart6.render();
    </script>
@endpush
