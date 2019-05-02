@extends('layout.app')

@section('status-forum')
    active
@endsection

@section('header')
    <section class="welcome2 p-t-40 p-b-55">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="welcome2-inner m-t-60">
                        <div class="welcome2-greeting">
                            <h1 class="title-6">Forum
                                <span>Alumni</span>, SLTA</h1>
                            <p>Sebagai media berbagi informasi. Karena sharing is caring, wew!</p>
                        </div>
                        <form class="form-header form-header2" action="" method="post">
                            <input class="au-input au-input--w435" type="text" name="search" placeholder="Pencarian . . . ">
                            <button class="au-btn--submit" type="submit">
                                <i class="zmdi zmdi-search"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <section class="statistic statistic2">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="title-4">Buat Pertanyaan, Pernyataan, atau Diskusi.</h1>
                    <hr>    
                    <form method="post" enctype="multipart/form-data" action="/forum/tambah/save">
                        @csrf
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
                                <div class="card-body">
                                    <div class="form-group">
                                    <label for="cc-name" class="control-label mb-1">Judul Forum</label>
                            
                                        <input type="text" id="text-input" name="forjud" placeholder="Judul" class="form-control">
                                    </div>
                                    <div class="form-group">
                                    <label for="cc-name" class="control-label mb-1">Isi forum</label>
                            
                                        <textarea name="foris" id="textarea-input" rows="3" placeholder="Content..." class="form-control"></textarea>
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
                                <input type="file" id="forgam" name="forgam" class="form-control-file">
                            </div>
                        </div>
                        
                    </div>
                    </form>
                </div> 
                <div class="col-md-4">
                    <h1 class="title-4">Pertanyaan Populer  </h1>
                    <hr> 
                    <!-- TOP CAMPAIGN-->
                    <div class="top-campaign">
                        <div class="table-responsive">
                            <table class="table table-top-campaign">
                                <tbody>
                                    <tr>
                                        <td>iPhone X 64Gb Grey, iPhone X 64Gb Grey, iPhone X 64Gb Grey</td>
                                        <td>Lihat</td>
                                    </tr>
                                    <tr>
                                        <td>United Kingdom</td>
                                        <td>Lihat</td>
                                    </tr>
                                    <tr>
                                        <td>Turkey</td>
                                        <td>Lihat</td>
                                    </tr>
                                    <tr>
                                        <td>Germany</td>
                                        <td>Lihat</td>
                                    </tr>
                                    <tr>
                                        <td>France</td>
                                        <td>Lihat</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END TOP CAMPAIGN-->
                </div> 
            </div>
        </div>
    </section>
@endsection