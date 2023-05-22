
@extends('layouts.templates')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header"> 
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>about-us Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">about-us Page</li>
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
          <h3 class="card-title">Tentang saya</h3>

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
          Kamu adalah seorang mahasiswa di Politeknik Negeri Malang, yang berusia 20 tahun dan sedang menempuh semester ke-4. Kamu tinggal di Bekasi, mungkin kamu merantau dari kampung halamanmu untuk menuntut ilmu di kota yang lebih besar.

Sebagai mahasiswa, kamu mungkin sibuk dengan jadwal kuliah dan tugas-tugas akademikmu. Namun, kamu pastinya memiliki minat dan hobi tertentu di luar akademik. Apakah kamu suka berolahraga, membaca buku, menonton film, atau melakukan aktivitas lainnya?
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
        CR:SatriaYudhistira 27/TI2A
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