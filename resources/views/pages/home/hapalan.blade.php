@extends('layouts.home')

@section('title', 'Hapalan Al-Qur`an')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Tracer Alumni</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item" aria-current="page">Hapalan Al-Qur'an</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-3">Hapalan Al-Qur'an</h1>
            </div>
            <h5>Progress :</h5>
            <div class="progress mb-4" style="height: 20px;">
                <div class="progress-bar bg-success" role="progressbar" style="width: {{ App\Helper\Helper::progress() }}%;" aria-valuenow="{{ App\Helper\Helper::progress() }}" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <form action="{{ route('hapalan.update', Auth::user()->alumni->nisn) }}" method="post">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-floating">
                            <select class="form-select" id="juz_1" name="juz_1" required @if($item->juz_1 == '1') style="border: #1B9C85 2px solid;" @endif>
                                <option value="" hidden>-- Juz 1 --</option>
                                <option value="0" @if(old('juz_1', $item->juz_1) == '0') selected @endif>Belum Selesai</option>
                                <option value="1" @if(old('juz_1', $item->juz_1) == '1') selected @endif>Selesai</option>
                            </select>
                            @error('juz_1')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="juz_1" class="text-dark">Juz 1</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-floating">
                            <select class="form-select" id="juz_2" name="juz_2" required @if($item->juz_2 == '1') style="border: #1B9C85 2px solid;" @endif>
                                <option value="" hidden>-- Juz 2 --</option>
                                <option value="0" @if(old('juz_2', $item->juz_2) == '0') selected @endif>Belum Selesai</option>
                                <option value="1" @if(old('juz_2', $item->juz_2) == '1') selected @endif>Selesai</option>
                            </select>
                            @error('juz_2')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="juz_2" class="text-dark">Juz 2</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-floating">
                            <select class="form-select" id="juz_3" name="juz_3" required @if($item->juz_3 == '1') style="border: #1B9C85 2px solid;" @endif>
                                <option value="" hidden>-- Juz 3 --</option>
                                <option value="0" @if(old('juz_3', $item->juz_3) == '0') selected @endif>Belum Selesai</option>
                                <option value="1" @if(old('juz_3', $item->juz_3) == '1') selected @endif>Selesai</option>
                            </select>
                            @error('juz_3')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="juz_3" class="text-dark">Juz 3</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-floating">
                            <select class="form-select" id="juz_4" name="juz_4" required @if($item->juz_4 == '1') style="border: #1B9C85 2px solid;" @endif>
                                <option value="" hidden>-- Juz 4 --</option>
                                <option value="0" @if(old('juz_4', $item->juz_4) == '0') selected @endif>Belum Selesai</option>
                                <option value="1" @if(old('juz_4', $item->juz_4) == '1') selected @endif>Selesai</option>
                            </select>
                            @error('juz_4')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="juz_4" class="text-dark">Juz 4</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-floating">
                            <select class="form-select" id="juz_5" name="juz_5" required @if($item->juz_5 == '1') style="border: #1B9C85 2px solid;" @endif>
                                <option value="" hidden>-- Juz 5 --</option>
                                <option value="0" @if(old('juz_5', $item->juz_5) == '0') selected @endif>Belum Selesai</option>
                                <option value="1" @if(old('juz_5', $item->juz_5) == '1') selected @endif>Selesai</option>
                            </select>
                            @error('juz_5')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="juz_5" class="text-dark">Juz 5</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-floating">
                            <select class="form-select" id="juz_6" name="juz_6" required @if($item->juz_6 == '1') style="border: #1B9C85 2px solid;" @endif>
                                <option value="" hidden>-- Juz 6 --</option>
                                <option value="0" @if(old('juz_6', $item->juz_6) == '0') selected @endif>Belum Selesai</option>
                                <option value="1" @if(old('juz_6', $item->juz_6) == '1') selected @endif>Selesai</option>
                            </select>
                            @error('juz_6')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="juz_6" class="text-dark">Juz 6</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-2">
                        <div class="form-floating">
                            <select class="form-select" id="juz_7" name="juz_7" required @if($item->juz_7 == '1') style="border: #1B9C85 2px solid;" @endif>
                                <option value="" hidden>-- Juz 7 --</option>
                                <option value="0" @if(old('juz_7', $item->juz_7) == '0') selected @endif>Belum Selesai</option>
                                <option value="1" @if(old('juz_7', $item->juz_7) == '1') selected @endif>Selesai</option>
                            </select>
                            @error('juz_7')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="juz_7" class="text-dark">Juz 7</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-floating">
                            <select class="form-select" id="juz_8" name="juz_8" required @if($item->juz_8 == '1') style="border: #1B9C85 2px solid;" @endif>
                                <option value="" hidden>-- Juz 8 --</option>
                                <option value="0" @if(old('juz_8', $item->juz_8) == '0') selected @endif>Belum Selesai</option>
                                <option value="1" @if(old('juz_8', $item->juz_8) == '1') selected @endif>Selesai</option>
                            </select>
                            @error('juz_8')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="juz_8" class="text-dark">Juz 8</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-floating">
                            <select class="form-select" id="juz_9" name="juz_9" required @if($item->juz_9 == '1') style="border: #1B9C85 2px solid;" @endif>
                                <option value="" hidden>-- Juz 9 --</option>
                                <option value="0" @if(old('juz_9', $item->juz_9) == '0') selected @endif>Belum Selesai</option>
                                <option value="1" @if(old('juz_9', $item->juz_9) == '1') selected @endif>Selesai</option>
                            </select>
                            @error('juz_9')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="juz_9" class="text-dark">Juz 9</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-floating">
                            <select class="form-select" id="juz_10" name="juz_10" required @if($item->juz_10 == '1') style="border: #1B9C85 2px solid;" @endif>
                                <option value="" hidden>-- Juz 10 --</option>
                                <option value="0" @if(old('juz_10', $item->juz_10) == '0') selected @endif>Belum Selesai</option>
                                <option value="1" @if(old('juz_10', $item->juz_10) == '1') selected @endif>Selesai</option>
                            </select>
                            @error('juz_10')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="juz_10" class="text-dark">Juz 10</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-floating">
                            <select class="form-select" id="juz_11" name="juz_11" required @if($item->juz_11 == '1') style="border: #1B9C85 2px solid;" @endif>
                                <option value="" hidden>-- Juz 11 --</option>
                                <option value="0" @if(old('juz_11', $item->juz_11) == '0') selected @endif>Belum Selesai</option>
                                <option value="1" @if(old('juz_11', $item->juz_11) == '1') selected @endif>Selesai</option>
                            </select>
                            @error('juz_11')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="juz_11" class="text-dark">Juz 11</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-floating">
                            <select class="form-select" id="juz_12" name="juz_12" required @if($item->juz_12 == '1') style="border: #1B9C85 2px solid;" @endif>
                                <option value="" hidden>-- Juz 12 --</option>
                                <option value="0" @if(old('juz_12', $item->juz_12) == '0') selected @endif>Belum Selesai</option>
                                <option value="1" @if(old('juz_12', $item->juz_12) == '1') selected @endif>Selesai</option>
                            </select>
                            @error('juz_12')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="juz_12" class="text-dark">Juz 12</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-2">
                        <div class="form-floating">
                            <select class="form-select" id="juz_13" name="juz_13" required @if($item->juz_13 == '1') style="border: #1B9C85 2px solid;" @endif>
                                <option value="" hidden>-- Juz 13 --</option>
                                <option value="0" @if(old('juz_13', $item->juz_13) == '0') selected @endif>Belum Selesai</option>
                                <option value="1" @if(old('juz_13', $item->juz_13) == '1') selected @endif>Selesai</option>
                            </select>
                            @error('juz_13')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="juz_13" class="text-dark">Juz 13</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-floating">
                            <select class="form-select" id="juz_14" name="juz_14" required @if($item->juz_14 == '1') style="border: #1B9C85 2px solid;" @endif>
                                <option value="" hidden>-- Juz 14 --</option>
                                <option value="0" @if(old('juz_14', $item->juz_14) == '0') selected @endif>Belum Selesai</option>
                                <option value="1" @if(old('juz_14', $item->juz_14) == '1') selected @endif>Selesai</option>
                            </select>
                            @error('juz_14')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="juz_14" class="text-dark">Juz 14</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-floating">
                            <select class="form-select" id="juz_15" name="juz_15" required @if($item->juz_15 == '1') style="border: #1B9C85 2px solid;" @endif>
                                <option value="" hidden>-- Juz 15 --</option>
                                <option value="0" @if(old('juz_15', $item->juz_15) == '0') selected @endif>Belum Selesai</option>
                                <option value="1" @if(old('juz_15', $item->juz_15) == '1') selected @endif>Selesai</option>
                            </select>
                            @error('juz_15')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="juz_15" class="text-dark">Juz 15</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-floating">
                            <select class="form-select" id="juz_16" name="juz_16" required @if($item->juz_16 == '1') style="border: #1B9C85 2px solid;" @endif>
                                <option value="" hidden>-- Juz 16 --</option>
                                <option value="0" @if(old('juz_16', $item->juz_16) == '0') selected @endif>Belum Selesai</option>
                                <option value="1" @if(old('juz_16', $item->juz_16) == '1') selected @endif>Selesai</option>
                            </select>
                            @error('juz_16')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="juz_16" class="text-dark">Juz 16</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-floating">
                            <select class="form-select" id="juz_17" name="juz_17" required @if($item->juz_17 == '1') style="border: #1B9C85 2px solid;" @endif>
                                <option value="" hidden>-- Juz 17 --</option>
                                <option value="0" @if(old('juz_17', $item->juz_17) == '0') selected @endif>Belum Selesai</option>
                                <option value="1" @if(old('juz_17', $item->juz_17) == '1') selected @endif>Selesai</option>
                            </select>
                            @error('juz_17')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="juz_17" class="text-dark">Juz 17</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-floating">
                            <select class="form-select" id="juz_18" name="juz_18" required @if($item->juz_18 == '1') style="border: #1B9C85 2px solid;" @endif>
                                <option value="" hidden>-- Juz 18 --</option>
                                <option value="0" @if(old('juz_18', $item->juz_18) == '0') selected @endif>Belum Selesai</option>
                                <option value="1" @if(old('juz_18', $item->juz_18) == '1') selected @endif>Selesai</option>
                            </select>
                            @error('juz_18')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="juz_18" class="text-dark">Juz 18</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-2">
                        <div class="form-floating">
                            <select class="form-select" id="juz_19" name="juz_19" required @if($item->juz_19 == '1') style="border: #1B9C85 2px solid;" @endif>
                                <option value="" hidden>-- Juz 19 --</option>
                                <option value="0" @if(old('juz_19', $item->juz_19) == '0') selected @endif>Belum Selesai</option>
                                <option value="1" @if(old('juz_19', $item->juz_19) == '1') selected @endif>Selesai</option>
                            </select>
                            @error('juz_19')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="juz_19" class="text-dark">Juz 19</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-floating">
                            <select class="form-select" id="juz_20" name="juz_20" required @if($item->juz_20 == '1') style="border: #1B9C85 2px solid;" @endif>
                                <option value="" hidden>-- Juz 20 --</option>
                                <option value="0" @if(old('juz_20', $item->juz_20) == '0') selected @endif>Belum Selesai</option>
                                <option value="1" @if(old('juz_20', $item->juz_20) == '1') selected @endif>Selesai</option>
                            </select>
                            @error('juz_20')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="juz_20" class="text-dark">Juz 20</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-floating">
                            <select class="form-select" id="juz_21" name="juz_21" required @if($item->juz_21 == '1') style="border: #1B9C85 2px solid;" @endif>
                                <option value="" hidden>-- Juz 21 --</option>
                                <option value="0" @if(old('juz_21', $item->juz_21) == '0') selected @endif>Belum Selesai</option>
                                <option value="1" @if(old('juz_21', $item->juz_21) == '1') selected @endif>Selesai</option>
                            </select>
                            @error('juz_21')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="juz_21" class="text-dark">Juz 21</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-floating">
                            <select class="form-select" id="juz_22" name="juz_22" required @if($item->juz_22 == '1') style="border: #1B9C85 2px solid;" @endif>
                                <option value="" hidden>-- Juz 22 --</option>
                                <option value="0" @if(old('juz_22', $item->juz_22) == '0') selected @endif>Belum Selesai</option>
                                <option value="1" @if(old('juz_22', $item->juz_22) == '1') selected @endif>Selesai</option>
                            </select>
                            @error('juz_22')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="juz_22" class="text-dark">Juz 22</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-floating">
                            <select class="form-select" id="juz_23" name="juz_23" required @if($item->juz_23 == '1') style="border: #1B9C85 2px solid;" @endif>
                                <option value="" hidden>-- Juz 23 --</option>
                                <option value="0" @if(old('juz_23', $item->juz_23) == '0') selected @endif>Belum Selesai</option>
                                <option value="1" @if(old('juz_23', $item->juz_23) == '1') selected @endif>Selesai</option>
                            </select>
                            @error('juz_23')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="juz_23" class="text-dark">Juz 23</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-floating">
                            <select class="form-select" id="juz_24" name="juz_24" required @if($item->juz_24 == '1') style="border: #1B9C85 2px solid;" @endif>
                                <option value="" hidden>-- Juz 24 --</option>
                                <option value="0" @if(old('juz_24', $item->juz_24) == '0') selected @endif>Belum Selesai</option>
                                <option value="1" @if(old('juz_24', $item->juz_24) == '1') selected @endif>Selesai</option>
                            </select>
                            @error('juz_24')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="juz_24" class="text-dark">Juz 24</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-2">
                        <div class="form-floating">
                            <select class="form-select" id="juz_25" name="juz_25" required @if($item->juz_25 == '1') style="border: #1B9C85 2px solid;" @endif>
                                <option value="" hidden>-- Juz 25 --</option>
                                <option value="0" @if(old('juz_25', $item->juz_25) == '0') selected @endif>Belum Selesai</option>
                                <option value="1" @if(old('juz_25', $item->juz_25) == '1') selected @endif>Selesai</option>
                            </select>
                            @error('juz_25')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="juz_25" class="text-dark">Juz 25</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-floating">
                            <select class="form-select" id="juz_26" name="juz_26" required @if($item->juz_26 == '1') style="border: #1B9C85 2px solid;" @endif>
                                <option value="" hidden>-- Juz 26 --</option>
                                <option value="0" @if(old('juz_26', $item->juz_26) == '0') selected @endif>Belum Selesai</option>
                                <option value="1" @if(old('juz_26', $item->juz_26) == '1') selected @endif>Selesai</option>
                            </select>
                            @error('juz_26')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="juz_26" class="text-dark">Juz 26</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-floating">
                            <select class="form-select" id="juz_27" name="juz_27" required @if($item->juz_27 == '1') style="border: #1B9C85 2px solid;" @endif>
                                <option value="" hidden>-- Juz 27 --</option>
                                <option value="0" @if(old('juz_27', $item->juz_27) == '0') selected @endif>Belum Selesai</option>
                                <option value="1" @if(old('juz_27', $item->juz_27) == '1') selected @endif>Selesai</option>
                            </select>
                            @error('juz_27')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="juz_27" class="text-dark">Juz 27</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-floating">
                            <select class="form-select" id="juz_28" name="juz_28" required @if($item->juz_28 == '1') style="border: #1B9C85 2px solid;" @endif>
                                <option value="" hidden>-- Juz 28 --</option>
                                <option value="0" @if(old('juz_28', $item->juz_28) == '0') selected @endif>Belum Selesai</option>
                                <option value="1" @if(old('juz_28', $item->juz_28) == '1') selected @endif>Selesai</option>
                            </select>
                            @error('juz_28')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="juz_28" class="text-dark">Juz 28</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-floating">
                            <select class="form-select" id="juz_29" name="juz_29" required @if($item->juz_29 == '1') style="border: #1B9C85 2px solid;" @endif>
                                <option value="" hidden>-- Juz 29 --</option>
                                <option value="0" @if(old('juz_29', $item->juz_29) == '0') selected @endif>Belum Selesai</option>
                                <option value="1" @if(old('juz_29', $item->juz_29) == '1') selected @endif>Selesai</option>
                            </select>
                            @error('juz_29')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="juz_29" class="text-dark">Juz 29</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-floating">
                            <select class="form-select" id="juz_30" name="juz_30" required @if($item->juz_30 == '1') style="border: #1B9C85 2px solid;" @endif>
                                <option value="" hidden>-- Juz 30 --</option>
                                <option value="0" @if(old('juz_30', $item->juz_30) == '0') selected @endif>Belum Selesai</option>
                                <option value="1" @if(old('juz_30', $item->juz_30) == '1') selected @endif>Selesai</option>
                            </select>
                            @error('juz_30')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="juz_30" class="text-dark">Juz 30</label>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success mt-3">Update Data Hapalan Al-Qur`an</button>
                </div>
            </form>
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
