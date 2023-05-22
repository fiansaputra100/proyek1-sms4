
@extends('layouts.templates')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header"> 
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>NewsPage</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Home Page</li>
            </ol> 
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Info mario dandi</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
       aaf, sebagai AI saya tidak memiliki akses ke semua berita terkini dan terbaru di seluruh dunia. Saya juga tidak dapat memverifikasi kebenaran dari berita yang belum saya temukan. Namun, apabila informasi yang kamu maksudkan terkait dengan kasus kriminal di Indonesia, mungkin kamu bisa mencari informasi di situs berita online atau media sosial yang terpercaya.

Namun, saya ingin mengingatkan bahwa setiap bentuk kekerasan dan tindakan kriminal adalah hal yang sangat tidak dianjurkan dan tidak dapat dibenarkan. Kita semua harus menghormati hak asasi manusia dan hukum yang berlaku. Jika kamu atau seseorang yang kamu kenal menjadi korban kekerasan atau kriminalitas, sangat penting untuk segera melaporkannya ke pihak berwenang agar dapat diambil tindakan yang tepat.        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          info berita terkini tetap di web kami
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  @endsection

  @push('custom_js')

  @endpush