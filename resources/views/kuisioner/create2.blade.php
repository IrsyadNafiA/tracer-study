@extends('layout.index')

@section('content')
    <br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ route('kuisioner.postcreate2') }}" method="POST" enctype="multipart/form-data">
                <div class="card">
                    <!-- card header -->
                    <div class="card-header" >Pertanyaan kewirausahaan</div>
                    <div class="card-body">
                        @csrf
                        <div class="d-flex justify-content-center">
                            <div class="col-12">
                                <!-- soal D1 -->
                                <div class="mb-4">
                                    <label for="kb2" class="form-label">Apakah memiliki usaha atau berwirausaha</label>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="D1" value="Ya" onclick="wirausaha(0)">
                                          <label class="form-check-label" for="Ya">
                                            Ya
                                          </label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="D1" value="Tidak" onclick="wirausaha(1)">
                                          <label class="form-check-label" for="Tidak">
                                            Tidak
                                          </label>
                                        </div>
                                      </div>                                     
                                </div>
                                <div class="input-group" id="datawirausaha">
                                    <div class="d-flex justify-content-center">
                                        <div class="col-12">
                                        <hr>
                                        Pendataan Kewirausahaan
                                        <hr>
                                            <!-- Soal D2-->
                                            <div class="mb-4">
                                                <div class="col-sm-12">
                                                    <label for="nama" class="form-label">Tahun memulai usaha atau berwirausaha</label>
                                                    <label for="" class="form-label">contoh : 2021</label>
                                                    <input type="text" class="form-control" name="D2" placeholder="">
                                                </div>
                                            </div>
                                            <!-- Soal D3-->
                                            <div class="mb-4">
                                                <label for="kb2" class="form-label">Jenis usaha/perusahaan</label>
                                                <div class="col-sm-10">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="D3" value="Jasa">
                                                    <label class="form-check-label" for="Jasa">
                                                        Jasa
                                                    </label>
                                                    </div>
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="D3" value="Dagang">
                                                    <label class="form-check-label" for="Dagang">
                                                        Dagang
                                                    </label>
                                                    </div>
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="D3" value="Manufaktur">
                                                    <label class="form-check-label" for="Manufaktur">
                                                        Manufaktur
                                                    </label>
                                                    </div>
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="D3" value="Lainnya">
                                                    <label class="form-check-label" for="Lainnya">
                                                        Lainnya
                                                    </label>
                                                    </div>
                                                </div>                                     
                                            </div>
                                            <!-- Soal D4-->
                                            <div class="mb-4">
                                                <div class="col-sm-12">
                                                    <label for="nama" class="form-label">Nama usaha/perusahaan</label>
                                                    <label for="" class="form-label">contoh : CV Abadi, Batam</label>
                                                    <input type="text" class="form-control" name="D4" placeholder="">
                                                </div>
                                            </div>
                                            <!-- Soal D5-->
                                            <div class="mb-4">
                                                <div class="col-sm-12">
                                                    <label for="nama" class="form-label">Alamat usaha/perusahaan</label>
                                                    <label for="" class="form-label">contoh : Jl. Fulan No.9, Nagoya, Batam</label>
                                                    <input type="text" class="form-control" name="D5" placeholder="">
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