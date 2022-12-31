@extends('layout.index')

@section('content')
    <br>
    <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
            <form action="{{ route('kuisioner.postcreate') }}" method="POST" enctype="multipart/form-data">
              <!--route('kuisioner.post.create')-->
              <div class="card">
                <!-- card header -->
              <div class="card-header" >Umpan Balik</div>
              <div class="card-body">
                @csrf
                <div class="d-flex justify-content-center">
                    <div class="col-12">
                          <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="A1" placeholder="">
                          </div>
                          <div class="mb-3">
                            <label for="nim" class="form-label">NIM</label>
                            <input type="text" class="form-control" name="A2" placeholder="">
                          </div>
                          <div class="mb-3">
                            <label for="TahunLulus" class="form-label">Tahun masuk (terdaftar) di Polibatam</label>
                            <input type="text" class="form-control" name="A3" placeholder="">
                          </div>
                          <fieldset class="row mb-3">
                            <legend class="col-form-label col-sm-3 pt-0">Kelas</legend>
                            <div class="col-sm-10">
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="A4" value="Regular Pagi">
                                <label class="form-check-label" for="kelas_pagi">
                                  Regular Pagi
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="A4" value="Regular Malam">
                                <label class="form-check-label" for="kelas_malam">
                                  Regular Malam
                                </label>
                              </div>
                            </div>
                          </fieldset>
                        <!--  <div class="mb-3">
                            <label for="tahun_lulus" class="form-label">Tahun Lulus </label>
                            <input type="text" class="form-control" name="A4" placeholder="e.g 2019">
                          </div> -->
                          <div class="mb-3">
                            <label for="jurusan" class="form-label">Jurusan</label>
                            <select name="A5" class="form-select">
                            <option selected>Choose...</option>
                            <option>Teknik Electro</option>
                            <option>Managemen Bisnis</option>
                            <option>Teknik Informatika</option>
                            <option>Teknik Mesin</option>
                            </select>
                          </div>
                          <div class="mb-3">
                            <label for="prodi" class="form-label">Program Studi</label>
                            <select name="A6" class="form-select">
                            <option selected>Choose...</option>
                            <option>Akuntansi</option>
                            <option>Akuntansi Manajerial</option>
                            <option>Administrasi Bisnis Terapan</option>
                            <option>Teknik Informatika</option>
                            <option>Teknik Geomatika</option>
                            <option>Teknik Multimedia Jaringan</option>
                            <option>Animasi</option>
                            <option>Rekayasa Keamanan Siber</option>
                            <option>Teknologi Rekayasa Perangkat Lunak</option>
                            <option>Teknik Elektronika Manufaktur</option>
                            <option>Teknik Elektronika</option>
                            <option>Teknik Instrumentasi</option>
                            <option>Teknik Mekatronika</option>
                            <option>Teknik Robotika</option>
                            <option>Teknik Mesin</option>
                            <option>Teknik Perencanaan dan Konstruksi Kapal</option>
                            <option>Teknik Perawatan Pesawat Udara</option>
                            <option>Teknik Rekayasa Pembangkit Energi</option>
                            </select>
                          </div>
                          <div class="mb-3">
                            <label for="bulan_tahun_lulus" class="form-label">Bulan dan Tahun Lulus dari Polibatam</label>
                            <input type="text" class="form-control" name="A7" placeholder="">
                          </div>
                          <div class="mb-3">
                            <label for="ipk" class="form-label">Indeks Prestasi Kumulatif (IPK) saat lulus</label>
                            <input type="text" class="form-control" name="A8" placeholder="">
                          </div>
                          <div class="mb-3">
                            <label for="usia" class="form-label">Usia (Tahun)</label>
                            <input type="text" class="form-control" name="A9" placeholder="">
                          </div>
                        <!-- Jenis Kelamin -->
                          <fieldset class="row mb-3">
                            <legend class="col-form-label col-sm-3 pt-0">Jenis Kelamin</legend>
                            <div class="col-sm-10">
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="A10" value="Laki-Laki">
                                <label class="form-check-label" for="laki-laki">
                                  Laki-Laki
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="A10" value="Perempuan">
                                <label class="form-check-label" for="Perempuan">
                                  Perempuan
                                </label>
                              </div>
                            </div>
                          </fieldset>
                        <!-- Alamat -->   
                          <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat Tempat Tinggal Sekarang (Termasuk Kota dan Kode POS)</label>
                            <input type="text" class="form-control" name="A11" placeholder="">
                          </div>
                        <!-- email --> 
                          <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" name="A12" placeholder="">
                          </div>
                        <!-- nomor hp/wa --> 
                          <div class="mb-4">
                            <label for="hp" class="form-label">No.Hp/WA Aktif</label>
                            <input type="text" class="form-control" name="A13" placeholder="">
                          </div>
                       
                          <!-- .... -->
                          <div class="mb-3">
                            <label for="kuis" class="form-label">Bagaimana kepuasan Anda terhadap kondisi pembelajaran di Politeknik Negeri Batam?</label>
                            <!-- <input type="text" class="form-control" name="A#" placeholder="081233445566"> -->
                             <!-- grid -->
                            <div class="container">
                              <div class="mt-4">
                                <div class="row">
                                  <div class="col-7">
                                  </div>
                                  <div class="col-1">
                                    1
                                  </div>
                                  <div class="col-1">
                                    2
                                  </div>
                                  <div class="col-1">
                                    3
                                  </div>
                                  <div class="col-1">
                                    4
                                  </div>
                                  <div class="col-1">
                                    5
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <hr>
                           <!-- isi kuisioner a1-->
                           <div class="container">
                            <div class="row">
                              <div class="col-7">
                                <label for="soal">Kualitas pendidik/guru/dosen/instruktur</label>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka1" id="" value="Tidak Baik Sekali">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka1" id="" value="Tidak Baik">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka1" id="" value="Cukup">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka1" id="" value="Baik">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka1" id="" value="Baik Sekali">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                            </div>
                           </div>
                           <hr>
                           <!-- isi kuisioner a2-->
                           <div class="container">
                            <div class="row">
                              <div class="col-7">
                                <label for="soal">Kesempatan berkomunikasi di luar kelas dengan pendidik/guru/dosen/instruktur</label>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka2" id="" value="Tidak Baik Sekali">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka2" id="" value="Tidak Baik">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka2" id="" value="Cukup">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka2" id="" value="Baik">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka2" id="" value="Baik Sekali">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                            </div>
                           </div>
                           <hr>
                           <!-- isi kuisioner a3-->
                           <div class="container">
                            <div class="row">
                              <div class="col-7">
                                <label for="soal">Bimbingan akademik secara umum</label>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka3" id="" value="Tidak Baik Sekali">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka3" id="" value="Tidak Baik">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka3" id="" value="Cukup">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka3" id="" value="Baik">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka3" id="" value="Baik Sekali">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                            </div>
                           </div>
                           <hr>
                           <!-- isi kuisioner a4-->
                           <div class="container">
                            <div class="row">
                              <div class="col-7">
                                <label for="soal">Bimbingan untuk menghadapi ujian akhir</label>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka4" id="" value="Tidak Baik Sekali">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka4" id="" value="Tidak Baik">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka4" id="" value="Cukup">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka4" id="" value="Baik">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka4" id="" value="Baik Sekali">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                            </div>
                           </div>
                           <hr>
                           <!-- isi kuisioner a5-->
                           <div class="container">
                            <div class="row">
                              <div class="col-7">
                                <label for="soal">Materi pelajaran/mata kuliah</label>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka5" id="" value="Tidak Baik Sekali">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka5" id="" value="Tidak Baik">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka5" id="" value="Cukup">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka5" id="" value="Baik">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka5" id="" value="Baik Sekali">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                            </div>
                           </div>
                           <hr>
                           <!-- isi kuisioner a6-->
                           <div class="container">
                            <div class="row">
                              <div class="col-7">
                                <label for="soal">Keberagaman program studi/bidang keahlian/keterampilan yang ditawarkan</label>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka6" id="" value="Tidak Baik Sekali">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka6" id="" value="Tidak Baik">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka6" id="" value="Cukup">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka6" id="" value="Baik">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka6" id="" value="Baik Sekali">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                            </div>
                           </div>
                           <hr>
                           <!-- isi kuisioner a7-->
                           <div class="container">
                            <div class="row">
                              <div class="col-7">
                                <label for="soal">Sistem penilaian</label>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka7" id="" value="Tidak Baik Sekali">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka7" id="" value="Tidak Baik">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka7" id="" value="Cukup">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka7" id="" value="Baik">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka7" id="" value="Baik Sekali">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                            </div>
                           </div>
                           <hr>
                           <!-- isi kuisioner a8-->
                           <div class="container">
                            <div class="row">
                              <div class="col-7">
                                <label for="soal">Penekanan pada praktik dan praktikum</label>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka8" id="" value="Tidak Baik Sekali">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka8" id="" value="Tidak Baik">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka8" id="" value="Cukup">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka8" id="" value="Baik">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka8" id="" value="Baik Sekali">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                            </div>
                           </div>
                           <hr>
                           <!-- isi kuisioner a9-->
                           <div class="container">
                            <div class="row">
                              <div class="col-7">
                                <label for="soal">Metode pengajaran</label>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka9" id="" value="Tidak Baik Sekali">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka9" id="" value="Tidak Baik">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka9" id="" value="Cukup">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka9" id="" value="Baik">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka9" id="" value="Baik Sekali">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                            </div>
                           </div>
                           <hr>
                           <!-- isi kuisioner a10-->
                           <div class="container">
                            <div class="row">
                              <div class="col-7">
                                <label for="soal">Koleksi buku perpustakaan</label>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka10" id="" value="Tidak Baik Sekali">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka10" id="" value="Tidak Baik">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka10" id="" value="Cukup">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka10" id="" value="Baik">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka10" id="" value="Baik Sekali">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                            </div>
                           </div>
                           <hr>
                           <!-- isi kuisioner a11-->
                           <div class="container">
                            <div class="row">
                              <div class="col-7">
                                <label for="soal">Ketersediaan bahan ajar</label>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka11" id="" value="Tidak Baik Sekali">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka11" id="" value="Tidak Baik">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka11" id="" value="Cukup">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka11" id="" value="Baik">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka11" id="" value="Baik Sekali">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                            </div>
                           </div>
                           <hr>
                           <!-- isi kuisioner a12-->
                           <div class="container">
                            <div class="row">
                              <div class="col-7">
                                <label for="soal">Kualitas dari fasilitas yang disediakan</label>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka12" id="" value="Tidak Baik Sekali">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka12" id="" value="Tidak Baik">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka12" id="" value="Cukup">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka12" id="" value="Baik">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka12" id="" value="Baik Sekali">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                            </div>
                           </div>
                           <hr>
                           <!-- isi kuisioner a13-->
                           <div class="container">
                            <div class="row">
                              <div class="col-7">
                                <label for="soal">Kualitas program magang</label>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka13" id="" value="Tidak Baik Sekali">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka13" id="" value="Tidak Baik">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka13" id="" value="Cukup">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka13" id="" value="Baik">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka13" id="" value="Baik Sekali">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                            </div>
                           </div>
                           <hr>
                           <!-- isi kuisioner a14-->
                           <div class="container">
                            <div class="row">
                              <div class="col-7">
                                <label for="soal">Kualitas pembelajaran bahasa asing</label>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka14" id="" value="Tidak Baik Sekali">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka14" id="" value="Tidak Baik">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka14" id="" value="Cukup">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka14" id="" value="Baik">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka14" id="" value="Baik Sekali">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                            </div>
                           </div>
                           <hr>
                           <!-- isi kuisioner a15-->
                           <div class="container">
                            <div class="row">
                              <div class="col-7">
                                <label for="soal">Program pengembangan budaya kerja/karakter/soft skill</label>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka15" id="" value="Tidak Baik Sekali">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka15" id="" value="Tidak Baik">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka15" id="" value="Cukup">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka15" id="" value="Baik">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka15" id="" value="Baik Sekali">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                            </div>
                           </div>
                           <hr>
                           <!-- kuis a16 -->
                          <fieldset class="row mb-5">
                            <legend class="col-form-label col-sm-15 pt-3">Bagaimana Anda mendapatkan instansi/lembaga/perusahaan untuk magang selama studi?</legend>
                            <div class="col-sm-15">
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="ka16" value="Permintaan industri melalui informasi yang didapat dari situs umum">
                                <label class="form-check-label" for="kuis a16">
                                  Permintaan industri melalui informasi yang didapat dari situs umum
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="ka16" value="Permintaan industri melalui informasi dari institusi pendidikan">
                                <label class="form-check-label" for="kuis a16">
                                  Permintaan industri melalui informasi dari institusi pendidikan
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="ka16" value="Ditempatkan di satuan pendidikan">
                                <label class="form-check-label" for="kuis a16">
                                  Ditempatkan di satuan pendidikan
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="ka16" value="Mencari sendiri">
                                <label class="form-check-label" for="kuis a16">
                                  Mencari sendiri
                                </label>
                              </div>
                            </div>
                          </fieldset>
                          <!-- .... -->
                          <div class="mb-3">
                            <label for="kuis" class="form-label">Menurut Anda, bagaimana kualitas magang selama studi?</label>
                            <!-- <input type="text" class="form-control" name="A#" placeholder="081233445566"> -->
                             <!-- grid -->
                            <div class="container">
                              <div class="mt-4">
                                <div class="row">
                                  <div class="col-7">
                                  </div>
                                  <div class="col-1">
                                    1
                                  </div>
                                  <div class="col-1">
                                    2
                                  </div>
                                  <div class="col-1">
                                    3
                                  </div>
                                  <div class="col-1">
                                    4
                                  </div>
                                  <div class="col-1">
                                    5
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <hr>
                           <!-- isi kuisioner a17-->
                           <div class="container">
                            <div class="row">
                              <div class="col-7">
                                <label for="soal">Penempatan magang oleh Politeknik Negeri Batam</label>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka17" id="" value="Tidak Baik Sekali">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka17" id="" value="Tidak Baik">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka17" id="" value="Cukup">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka17" id="" value="Baik">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka17" id="" value="Baik Sekali">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                            </div>
                           </div>
                           <hr>
                           <!-- isi kuisioner a18-->
                           <div class="container">
                            <div class="row">
                              <div class="col-7">
                                <label for="soal">Kejelasan kegiatan selama magang</label>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka18" id="" value="Tidak Baik Sekali">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka18" id="" value="Tidak Baik">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka18" id="" value="Cukup">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka18" id="" value="Baik">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka18" id="" value="Baik Sekali">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                            </div>
                           </div>
                           <hr>
                           <!-- isi kuisioner a19-->
                           <div class="container">
                            <div class="row">
                              <div class="col-7">
                                <label for="soal">Sarana praktik di tempat magang</label>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka19" id="" value="Tidak Baik Sekali">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka19" id="" value="Tidak Baik">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka19" id="" value="Cukup">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka19" id="" value="Baik">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka19" id="" value="Baik Sekali">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                            </div>
                           </div>
                           <hr>
                           <!-- isi kuisioner a20-->
                           <div class="container">
                            <div class="row">
                              <div class="col-7">
                                <label for="soal">Bimbingan selama magang</label>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka20" id="" value="Tidak Baik Sekali">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka20" id="" value="Tidak Baik">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka20" id="" value="Cukup">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka20" id="" value="Baik">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka20" id="" value="Baik Sekali">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                            </div>
                           </div>
                           <hr>
                           <!-- isi kuisioner a21-->
                           <div class="container">
                            <div class="row">
                              <div class="col-7">
                                <label for="soal">Evaluasi setelah selesai magang</label>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka21" id="" value="Tidak Baik Sekali">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka21" id="" value="Tidak Baik">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka21" id="" value="Cukup">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka21" id="" value="Baik">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka21" id="" value="Baik Sekali">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                            </div>
                           </div>
                           <hr>
                           <!-- isi kuisioner a22-->
                           <div class="container">
                            <div class="row">
                              <div class="col-7">
                                <label for="soal">Penyaluran bekerja setelah selesai magang</label>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka22" id="" value="Tidak Baik Sekali">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka22" id="" value="Tidak Baik">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka22" id="" value="Cukup">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka22" id="" value="Baik">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka22" id="" value="Baik Sekali">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                            </div>
                           </div>
                           <hr>
                           <!-- isi kuisioner a23-->
                           <div class="container">
                            <div class="row">
                              <div class="col-7">
                                <label for="soal">Kesesuaian tugas magang dengan prodi/bidang keahlian/jenis keterampilan</label>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka23" id="" value="Tidak Baik Sekali">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka23" id="" value="Tidak Baik">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka23" id="" value="Cukup">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka23" id="" value="Baik">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka23" id="" value="Baik Sekali">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                            </div>
                           </div>
                           <hr>
                           <!-- isi kuisioner a24-->
                           <div class="container">
                            <div class="row">
                              <div class="col-7">
                                <label for="soal">Kurikulum berstandar industri</label>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka24" id="" value="Tidak Baik Sekali">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka24" id="" value="Tidak Baik">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka24" id="" value="Cukup">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka24" id="" value="Baik">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                              <div class="col-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="ka24" id="" value="Baik Sekali">
                                  <label class="form-check-label" for="inlineRadio1"></label>
                                </div>
                              </div>
                            </div>
                           </div>
                           <hr>
                           <!-- kuis a25 -->
                          <fieldset class="row mb-3">
                            <legend class="col-form-label col-sm-10 pt-3">Apakah Anda memiliki sertifikat kompetensi?</legend>
                            <div class="col-sm-10">
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="ka25" value="Ya" onclick="sertif(0)">
                                <label class="form-check-label" for="Ya">
                                  Ya
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="ka25" value="Tidak" onclick="sertif(1)">
                                <label class="form-check-label" for="Tidak">
                                  Tidak
                                </label>
                              </div>
                            </div>
                          </fieldset>
                          <hr>
                          <div class="input-group" id="sertifikasi">
                            <div class="d-flex justify-content-center">
                              <div class="col-12">
                                <!-- soal b1 -->
                                  <div class="mb-4">
                                    <label for="kb1" class="form-label">Apakah jenis sertifikat kompetensi yang dimiliki ? (bisa lebih dari 1)</label>
                                    <textarea type="text" class="form-control" name="kb1" placeholder=""></textarea>
                                  </div>
                                <!-- soal b2 -->
                                <div class="mb-4">
                                    <label for="kb2" class="form-label">Dari manakah sertifikat kompetensi yang dimiliki ? (bisa lebih dari 1)</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Diterbitkan oleh politeknik negeri batam" id="flexCheckDefault" name="kb2">
                                        <label class="form-check-label" for="">
                                            Diterbitkan oleh politeknik negeri batam
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Diterbitkan oleh lembaga lain yang bermitra dengan Politeknik Negeri Batam" id="flexCheckChecked" name="kb3">
                                        <label class="form-check-label" for="">
                                            Diterbitkan oleh lembaga lain yang bermitra dengan Politeknik Negeri Batam
                                        </label>
                                      </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Melalui kegiatan dan biaya mandiri" id="flexCheckDefault" name="kb4">
                                        <label class="form-check-label" for="">
                                            Melalui kegiatan dan biaya mandiri
                                        </label>
                                      </div>
                                      <!-- Soal kb3 -->
                                      <div class="mt-4">
                                        <label for="kb5" class="form-label">
                                            Silahkan upload sertifikat yang anda miliki (Cukup Upload 1 Saja)<br>
                                            Nama file: NIM_Jenis Sertifikasi (33121010XX_FinancialPlanner)<br>
                                        </label>
                                        <!-- <form action="#" method="POST" enctype="multipart/form-data"> -->
                                          <!--  <input type="hidden" name="kb3" value="{{ csrf_token() }}"> -->
                                            <div class="group">
                                                <input type="file" id="file" name="kb5">
                                                
                                            </div>
                                      <!--  </form> -->
                                      </div>
                                  </div>
                              </div>
                            </div>
                          </div>
                          
                    </div>
                          <!--<div class="card-header" >Pendataan Sertifikasi Kompetensi</div>-->
                          <!--<div class="card-body">-->
                          
                      <!--  <button type="submit" class="mt-4">Simpan</button> -->
                </div>
              </div>
              <div class="card-footer text-end">
                <div class="form.group row mb-0">
                  <div class="col-md-7 offset-md-5">
                    <button type="submit" class="btn btn-secondary">
                      Next
                    </button>
                 </div>
                </div>
              </div>
            </form>
          </div>
      </div>
    </div>
@endsection