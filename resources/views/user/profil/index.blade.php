@extends('user.layouts.default')

@section('judul','Profil')

@section('main')

  <!-- Main content -->
  <section class="content">

    <div class="row">

      <div class="col-12">
        <div class="box">
          <div class="box-body">
              <!-- Nav tabs -->
              <ul class="nav nav-pills rounded nav-justified">
                  <li class="nav-item"> <a href="#navpills-1" class="nav-link active" data-bs-toggle="tab" aria-expanded="false">Sejarah</a> </li>
                  <li class="nav-item"> <a href="#navpills-2" class="nav-link" data-bs-toggle="tab" aria-expanded="false">Visi dan Misi</a> </li>
                  <li class="nav-item"> <a href="#navpills-3" class="nav-link" data-bs-toggle="tab" aria-expanded="true">Struktur Organinasi</a> </li>
              </ul>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
        <div class="box">
          <div class="box-body">
              <!-- Tab panes -->
              <div class="tab-content">
                  <div id="navpills-1" class="tab-pane active">
                      <!-- Categroy 1 -->
                      <div class=" tab-pane animation-fade active" id="category-1" role="tabpanel">
                        <div class="panel-group panel-group-simple panel-group-continuous" id="accordion2"
                        aria-multiselectable="true" role="tablist">
                          <!-- Question 1 -->
                          <div class="panel">
                            <div class="panel-heading" id="question-1" role="tab">
                              <a class="panel-title" aria-controls="answer-1" aria-expanded="true" data-bs-toggle="collapse"	href="#answer-1" data-parent="#accordion2">
                                  Sejarah Hotel 777 Abepura
                              </a>
                            </div>
                            <div class="panel-collapse collapse show" id="answer-1" aria-labelledby="question-1" role="tabpanel" data-bs-parent="#category-1">
                              <div class="panel-body">
                                Kota Abepura merupakan Kota Pendidikan dan Kota Religius. Perkembangan Pendidikan dan Keagamaan di Kota ini mendorong berbagai aktifitas pendidikan dan keagaamaan semakin meningkat. Selanjutnya aktifitas ini akan membawa dampak terhadap berbagai aktifitas yang membutuhkan akomodasi sementara. Kegiatan dimaksud seperti Acara Wisuda, Seminar-seminar pendidikan dan keagaamaan, Kebangunan Rohani, Berbagai perayaan keagaaman, kesemuanya sudah sepatutnya mendatang tamu dari luar kota Abepura. Dengan semakin meningkatnya aktifitas dimaksud maka akan membawa konsekuensi pada ketersediaan akomadasi. Hotel 777 hadir untuk menjawab kebutuhan dimaksud.
                               <br> Hotel 777  telah beroperasi sejak tanggal 7 Juli Tahun 2011 dalam rangka mendukung pembangunan kota Jayapura terutama penyediaan Jas perhotelan bernuansa religious.

                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End Categroy 1 -->
                  </div>
                  <div id="navpills-2" class="tab-pane">
                      <!-- Categroy 2 -->
                      <div class="tab-pane animation-fade" id="category-2" role="tabpanel">
                        <div class="panel-group panel-group-simple panel-group-continuous" id="accordion" aria-multiselectable="true" role="tablist">
                          <!-- Question 5 -->
                          <div class="panel">
                            <div class="panel-heading" id="question-5" role="tab">
                              <a class="panel-title" aria-controls="answer-5" aria-expanded="true" data-bs-toggle="collapse" href="#answer-5" data-parent="#accordion">
                                VISI HOTEL 777 ABEPURA
                              </a>
                            </div>
                            <div class="panel-collapse collapse show" id="answer-5" aria-labelledby="question-5" role="tabpanel" data-bs-parent="#category-2">
                              <div class="panel-body">
                                “Menjadi Hotel sebagai rumah kedua para tamu di Provinsi Papua tahun 2030”
                              </div>
                            </div>
                          </div>
                          <!-- End Question 5 -->
                          <!-- Question 6 -->
                          <div class="panel">
                            <div class="panel-heading" id="question-6" role="tab">
                              <a class="panel-title" aria-controls="answer-6" aria-expanded="false" data-bs-toggle="collapse" href="#answer-6" data-parent="#accordion">
                                MISI HOTEL 777 ABEPURA
                              </a>
                            </div>
                            <div class="panel-collapse collapse" id="answer-6" aria-labelledby="question-6" role="tabpanel" data-bs-parent="#category-2">
                              <div class="panel-body">
                                1.	Menciptakan kedamaian bertempat tinggal di Hotel 777 <br>
                                2.	Memberikan suasana yang nyaman, indah dan bersih di Hotel 777 <br>
                                3.	Mendapatkan pelayanan kemikmatan bertempat tinggal di Hotel 777 <br>
                                4.	Menjadikan para tamu sebagai saudara di rumah sendiri <br>
                                5.	Memberikan pelayanan teknologi komunikasi kepada para tamu.

                            </div>
                            </div>
                          </div>
                          <!-- End Question 6 -->
                        </div>
                      </div>
                      <!-- End Categroy 2 -->
                  </div>
                  <div id="navpills-3" class="tab-pane">
                      <!-- Categroy 3 -->
                      <div class="tab-pane animation-fade" id="category-3" role="tabpanel">
                        <div class="panel-group panel-group-simple panel-group-continuous" id="accordion1" aria-multiselectable="true" role="tablist">
                          <!-- Question 8 -->
                          <div class="panel">
                            <div class="panel-heading" id="question-8" role="tab">
                              <a class="panel-title" aria-controls="answer-8" aria-expanded="true" data-bs-toggle="collapse" href="#answer-8" data-parent="#accordion1">
                                STRUKTUR ORGANISASI
                              </a>
                            </div>
                            <div class="panel-collapse collapse show" id="answer-8" aria-labelledby="question-8" role="tabpanel" data-bs-parent="#category-3">
                              <div class="panel-body">
                                I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?
                              </div>
                            </div>
                          </div>
                          <!-- End Question 8 -->
                        </div>
                      </div>
                      <!-- End Categroy 3 -->
                  </div>
              </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
    </div>
    <!-- /.row -->

  </section>
  <!-- /.content -->
@endsection



