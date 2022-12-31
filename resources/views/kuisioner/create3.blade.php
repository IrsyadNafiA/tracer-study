@extends('layout.index')

@section('content')
    <br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ route('kuisioner.postcreate3') }}" method="POST" enctype="multipart/form-data">
                <div class="card">
                    <!-- card header -->
                    <div class="card-header" >Prestasi Kuliah</div>
                    <div class="card-body">
                        @csrf
                        <div class="d-flex justify-content-center">
                            <div class="col-12">
                                <!-- soal E1 -->
                                <div class="mb-4">
                                    <label for="kb2" class="form-label">Apakah memiliki prestasi selama kuliah</label>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="E1" value="Ya" onclick="prestasi(0)">
                                          <label class="form-check-label" for="Ya">
                                            Ya
                                          </label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="E1" value="Tidak" onclick="prestasi(1)">
                                          <label class="form-check-label" for="Tidak">
                                            Tidak
                                          </label>
                                        </div>
                                      </div>                                     
                                </div>
                                <div class="input-group" id="dataprestasi">
                                    <div class="d-flex justify-content-center">
                                        <div class="col-12">
                                        <hr>
                                        Pendataan Prestasi
                                        <hr>
                                            <!-- Soal E2-->
                                            <div class="mb-4">
                                                <div class="col-sm-12">
                                                    <label for="nama" class="form-label">Di bidang apa prestasi yang dimiliki (bisa diisi lebih dari satu)</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Akademik" id="flexCheckDefault" name="E2">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                          Akademik
                                                        </label>
                                                      </div>
                                                      <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Non Akademik" id="flexCheckChecked" name="E21">
                                                        <label class="form-check-label" for="flexCheckChecked">
                                                          Non Akademik ( Seni atau Olahraga )
                                                        </label>
                                                      </div>
                                                </div>
                                            </div>
                                            <!-- Soal E3-->
                                            <div class="mb-4">
                                                <div class="col-sm-12">
                                                    <label for="nama" class="form-label">Tingkat prestasi yang diraih di bidang akademik (bisa diisi lebih dari satu)</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Lokal" id="flexCheckDefault" name="E3">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                          Lokal
                                                        </label>
                                                      </div>
                                                      <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Nasional" id="flexCheckChecked" name="E31">
                                                        <label class="form-check-label" for="flexCheckChecked">
                                                          Nasional
                                                        </label>
                                                      </div>
                                                      <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="International" id="flexCheckChecked" name="E32">
                                                        <label class="form-check-label" for="flexCheckChecked">
                                                          International
                                                        </label>
                                                      </div>
                                                </div>
                                            </div>
                                            <!-- Soal E4-->
                                            <div class="mb-4">
                                                <div class="col-sm-12">
                                                    <label for="nama" class="form-label">Tingkat prestasi yang diraih di bidang non-akademik (bisa diisi lebih dari satu)</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Lokal" id="flexCheckDefault" name="E4">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                          Lokal
                                                        </label>
                                                      </div>
                                                      <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Nasional" id="flexCheckChecked" name="E41">
                                                        <label class="form-check-label" for="flexCheckChecked">
                                                          Nasional
                                                        </label>
                                                      </div>
                                                      <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="International" id="flexCheckChecked" name="E42">
                                                        <label class="form-check-label" for="flexCheckChecked">
                                                          International
                                                        </label>
                                                      </div>
                                                </div>
                                            </div>
                                            <!-- Soal E5-->
                                            <div class="mb-4">
                                                <label for="kb2" class="form-label">Juara berapa pada prestasi tersebut (jika ada lebih dari satu, pilih yang paling tinggi)</label>
                                                <div class="col-sm-10">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="E5" value="Juara 1">
                                                    <label class="form-check-label" for="Juara 1">
                                                        Juara 1
                                                    </label>
                                                    </div>
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="E5" value="Juara 2">
                                                    <label class="form-check-label" for="Juara 2">
                                                        Juara 2
                                                    </label>
                                                    </div>
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="E5" value="Juara 3">
                                                    <label class="form-check-label" for="Juara 3">
                                                        Juara 3
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
                            Store
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