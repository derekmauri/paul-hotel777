@extends('pimpinan.layouts.default')

@section('judul','Data Galeri')

@section('main')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="d-flex align-items-center">
              <div class="me-auto">
                  <h3 class="page-title">- Galeri -</h3>
              </div>             
          </div>
      </div>    

      <!-- Main content -->
		<section class="content">
            <div id="gallery">                
                </div>
                <!-- Default box -->
                <div class="box bg-transparent no-shadow b-0">
                  <div class="box-body">
                      <div id="gallery-content">
                          <div id="gallery-content-center" class="zoom-gallery">
                              {{-- <a href="../images/gallery/studio1.jpg" data-gallery="multiimages" title="Image title will be apear here"><img src="../images/gallery/studio1.jpg" alt="gallery" class="all studio" /> </a> --}}
                            @foreach ($galeri as $item )
                            <a href="{{asset('storage/galeri/' .$item->foto)}}" data-gallery="multiimages" title="Image"><img src="{{asset('storage/galeri/' .$item->foto)}}" class="all studio" alt="gallery" /></a>
                            @endforeach
                          </div>
                      </div>
                      </div>
                  </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
  
          </section>
          <!-- /.content -->	

    </div>
</div>
<!-- /.content-wrapper -->



@endsection
