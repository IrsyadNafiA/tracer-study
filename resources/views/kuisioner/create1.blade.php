@extends('layout.index')

@section('content')
    <br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ route('kuisioner.postcreate1') }}" method="POST" enctype="multipart/form-data">
                <div class="card">
                    <!-- card header -->
                    <div class="card-header" >Pendataan Ketenagakerjaan</div>
                    <div class="card-body">
                        @csrf
                        <div class="d-flex justify-content-center">
                            <div class="col-12">
                                <!-- soal C1 -->
                                <div class="mb-4">
                                    <label for="kb2" class="form-label">Apakah saat ini anda sudah bekerja ?</label>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="C1" value="Sudah" onclick="kerja(0)">
                                          <label class="form-check-label" for="Sudah">
                                            Sudah
                                          </label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="C1" value="Belum" onclick="kerja(1)">
                                          <label class="form-check-label" for="Belum">
                                            Belum
                                          </label>
                                        </div>
                                      </div>                                     
                                </div>
                                <div class="input-group" id="datakerja">
                                    <div class="d-flex justify-content-center">
                                        <div class="col-12">
                                        <hr>
                                        Ketenagakerjaan
                                        <hr>
                                            <!-- Soal C2-->
                                            <div class="mb-4">
                                                <label for="kb2" class="form-label">Apakah anda bekerja di tempat magang ?</label>
                                                <div class="col-sm-10">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="C2" value="Ya">
                                                    <label class="form-check-label" for="Ya">
                                                        Ya
                                                    </label>
                                                    </div>
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="C2" value="Tidak">
                                                    <label class="form-check-label" for="Tidak">
                                                        Tidak
                                                    </label>
                                                    </div>
                                                </div>                                     
                                            </div>
                                            <!-- Soal C3-->
                                            <div class="mb-4">
                                                <div class="col-sm-12">
                                                    <label for="nama" class="form-label">Bulan dan tahun mulai bekerja ( sebelum lulus atau sesudah lulus )</label>
                                                    <label for="" class="form-label">contoh : Mei 2019</label>
                                                    <input type="text" class="form-control" name="C3" placeholder="">
                                                </div>
                                            </div>
                                            <!-- Soal C4-->
                                            <div class="mb-4">
                                                <label for="kb2" class="form-label">Skala perusahaan tempat anda bekerja</label>
                                                <div class="col-sm-10">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="C4" value="Lokal">
                                                        <label class="form-check-label" for="Ya">
                                                            Lokal
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="C4" value="Nasional">
                                                        <label class="form-check-label" for="Tidak">
                                                            Nasional
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="C4" value="Multinasional atau Internasional">
                                                        <label class="form-check-label" for="Tidak">
                                                            Multinasional atau Internasional
                                                        </label>
                                                    </div>
                                                </div>                                     
                                            </div>
                                            <!-- Soal C5-->
                                            <div class="mt-4">
                                                <div class="mb-4">
                                                    <div class="col-sm-12">
                                                        <label for="" class="form-label">Bagian dan posisi atau jabatan di tempat kerja anda sekarang</label>
                                                        <label for="" class="form-label">Contoh: Bagian Production, jabatan operator</label>
                                                        <input type="text" class="form-control" name="C5" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Soal C6-->
                                            <div class="mb-4">
                                                <label for="kb2" class="form-label">Penghasilan (takehomepay) yang diterima per bulan</label>
                                                <div class="col-sm-10">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="C6" value="< 1 Juta">
                                                        <label class="form-check-label" for="">
                                                            < 1 Juta
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="C6" value="1 - 5 Juta">
                                                        <label class="form-check-label" for="">
                                                            1 - 5 Juta
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="C6" value="> 5 Juta">
                                                        <label class="form-check-label" for="">
                                                            > 5 Juta
                                                        </label>
                                                    </div>
                                                </div>                                     
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                    </div>   
                    <!-- card footer --> 
                    <div class="card-footer text-end">
                        <div class="form.group row mb-0">
                          <div class="col-md-7 offset-md-5">
                            <button type="submit" class="btn btn-secondary">
                              Next
                            </button>
                         </div>
                        </div>
                      </div>        
                </div> 
            </form>
        </div>
    </div>
</div>
    
    
@endsection