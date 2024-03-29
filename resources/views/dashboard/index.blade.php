@extends('dashboard.layout.main')
@section('container1')
    <div class=" container mr-3 ">
        <div class="row p-md-5 p-sm-5 ">
            <div class=" col-lg-3 bg-primary text-white p-2">
                <div class=" text-center">
                    <h5 id="">Halo {{ auth()->user()->name }}</h5>
                </div>
            </div>
            <div class=" col-lg bg-dark text-white p-2">
                <div class="result2 text-center"></div>
            </div>
            <div class="col-lg-3 bg-primary text-white p-2">
                <div class="result5 text-center">
                    <h5> Potensi Badai:</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class=" col p-md-5 p-sm-5 d-lg-flex ">
            <div class="row col-lg-2  form-group">
                <select class="form-select form-control form-select input-keyword" id="Provinsi">
                    <option value="0" type="button" selected id="sel">Pilih Provinsi</option>
                    @foreach ($Provinsi['data'] as $p)
                        <option value="{{ $p->nama_provinsi }}">{{ $p->nama_provinsi }}</option>
                    @endforeach
                </select>
            </div>
            <div class="row col-lg-1  form-group">
            </div>
            <div class="row col-lg-2  form-group">
                <select class="form-select form-select input-keyword2 src" name="nama_provinsi" id="kota">
                    <option value='0' id="sel1">Pilih</option>
                </select>
            </div>
            {{-- <div class="col-1">
                <button id="button-addon2" type="button" class="btn btn-primary"><span
                        data-feather="search"></span></button>
            </div> --}}
        </div>
    </div>
    <div class="col p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <div class="d-lg-flex">
                <div class="col-lg-8 p-md-5 p-sm-5">
                    <h1 class="display-5 fw-bold">Cuaca Hari Ini</h1>
                    <h2 class="result6"></h2>
                    <div class="result   fs-4"></div>
                </div>
                <div class=" fs-4 result8"></div>
            </div>
        </div>
    </div>
    <div class="col p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <div class="">
                <div class="col-lg-8 p-md-5 p-sm-5">
                    <h1 class="display-5 fw-bold">Prediksi Cuaca Kedepan</h1>
                    <h2 class="result7"></h2>
                </div>
                <div class=" col-lg-10 p-md-5 p-sm-5 d-lg-flex">
                    <div class=" col-lg-8 col-sm-8  result3"></div>
                    <div class=" col-lg-8 col-sm-8  result4"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container d-flex justify-content-center">
        <div class="col p-5 mb-4 bg-light rounded-3" id="ul">
            <div class="d-flex flex-row justify-content-between p-3 adiv text-white">
                <i class="fas fa-chevron-left"></i>
                <span class="pb-3">feedback</span>
                <i class="fas fa-times"></i>
            </div>
            <div class="mt-2 p-4 text-center">
                <h4 class="mb-3">Apakah Ramalah Hari Ini Sudah Akurat?</h4>
                <h5 class="px-3">Berikan Ulasan</h5>
                <div class=" d-lg-flex d-md-flex flex-row justify-content-center mt-5 g-2">
                    <form id="ulasan" class="">
                        {{-- <div class="d-flex flex-row justify-content-center mt-5 g-2 row "> --}}
                        <div class="col pb-5 p-5">
                            <button type="submit" class="btn btn-success save-data" value="Akurat" name="isi_ulasan"
                                id="tbl1" autocomplete="off">Akurat</button>
                            {{-- <input type="checkbox" class="btn-check" value="Akurat" onclick="aktif()" name="isi_ulasan"
                                    id="option1" autocomplete="off"> --}}
                            {{-- <label class="btn btn-success op" for="option1">Akurat</label> --}}
                            <span class="text-danger" id="akuratError"></span>
                        </div>
                        {{-- </div> --}}
                        <input hidden type="text" id="id" name="id_user" value="{{ auth()->user()->id }}">
                        {{-- <div class="p-5 container">
                            <div class="opsi col" id="opsi"></div>

                            <div class="dataTemp" id="dataTemp"></div>
                            <div id="demo"></div>
                            <div class="th" id="th"></div>
                            <div id="ulang" class="ulang btn btn-success">Beri Ulasan lagi</div>
                        </div> --}}
                        {{-- <div class="pb-5 pb-sm-5">
                            <label hidden for="option1"></label>
                            <button type="submit" class=" btn btn-primary btn-block save-data"
                                id="tbl1"><span>Send</span></button>
                        </div> --}}
                    </form>
                    <form id="ulasan1" class=" ml-5">
                        {{-- <div class="d-flex flex-row justify-content-center mt-5 g-2 row "> --}}
                        <div class="col pb-5 p-5">
                            <button type="submit" class="btn btn-danger save-data" value="Tidak Akurat" name="isi_ulasan"
                                id="tbl2" autocomplete="off">Tidak Akurat</button>
                            {{-- <input type="checkbox" class="btn-check" value="Tidak Akurat" onclick="tidakAktif()"
                                    name="isi_ulasan" id="option2" autocomplete="off"> --}}
                            {{-- <label class="btn btn-danger op1" for="option2">Tidak</label> --}}
                            <span class="text-danger" id="tidakError"></span>
                        </div>
                        {{-- </div> --}}
                        <input hidden type="text" id="id" name="id_user" value="{{ auth()->user()->id }}">
                        {{-- <div class="p-5 container">
                            <div class="opsi col" id="opsi"></div>
                            <div class="dataTemp" id="dataTemp"></div>
                            <div id="demo"></div>
                            <div class="th" id="th"></div>
                            <div id="ulang" class="ulang btn btn-success">Beri Ulasan lagi</div>
                        </div> --}}
                        {{-- <div class="pb-5 pb-sm-5">
                            <label hidden for="option1"></label>
                            <button type="submit" class=" btn btn-primary btn-block save-data"
                                id="tbl1"><span>Send</span></button>
                        </div> --}}
                    </form>
                </div>
                <div class=" pb-5">
                    <div class="th" id="th"></div>
                </div>

                <div class=" pt-5 position-relative">
                    <h6 class=" ">Developer Tim</h6>
                    <h6 class=""> @2022</h6>
                </div>
            </div>
        </div>

    </div>
@endsection
