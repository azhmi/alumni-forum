@extends('layout.app')

@section('status-berita')
    active
@endsection

@section('header')
<section class="au-breadcrumb2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="au-breadcrumb-content">
                        <div class="au-breadcrumb-left">
                            <h1 class="title-4">
                                Lowongan Pekerjaan
                            </h1>
                        </div>
                        <form class="au-form-icon--sm" action="" method="post">
                            <input class="au-input--w300 au-input--style2" type="text" placeholder="Cari lowongan pekerjaan">
                            <button class="au-btn--submit2" type="submit">
                                <i class="zmdi zmdi-search"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <hr class="line-seprate">
        </div>
    </section>
@endsection

@section('content')
    <section class="statistic statistic2">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <div class="au-message__item-text">
                                
                                <div class="text">
                                    <h5 class="name">{{ Auth::user()->name }} </h5>
                                    <p><?php 
                                    echo(date("d-m-Y    ",time()));
                                    ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <form method="post" action="/lowongan/tambah/save"  enctype="multipart/form-data">
                               {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                            <label for="cc-name" class="control-label mb-1">Judul Lowongan</label>
                                    
                                <input type="text" id="text-input" name="lokjud" placeholder="Judul" class="form-control">
                            </div>
                            <div class="form-group">
                            <label for="cc-name" class="control-label mb-1">Isi lowongan</label>
                                    
                                <textarea name="lokis" id="eg-custom-toolbar" placeholder="Isi berita" rows="3" class="form-control"></textarea>
                            </div>
                            <button class="btn btn-outline-success btn-block">
                                Submit
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <p>Gambar</p>
                    <small class="form-text text-muted">Jika ada</small>
                    <div class="card">
                        <input type="file" id="file-input" name="lokgam" class="form-control-file">
                    </div>
                </div>
                </form>
            </div>
        </div>
    </section>
@endsection