@extends('layout.app')

@section('status')
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
                    <h1 class="title-4">Profil sekolah.</h1>
                    <hr>    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                               <form method="post" action="/edit-profil/update">
                               {{ csrf_field() }} {{ method_field('PATCH') }}
                                <div class="card-body">
                                    <div class="form-group">
                                    <label for="cc-name" class="control-label mb-1">Nama sekolah</label>
                                        <input type="text" id="text-input" name="pronam" value="{{$profil[0]->pronam}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                    <label for="cc-name" class="control-label mb-1">Visi sekolah</label>
                                    <textarea class="textarea" name="pronv"id="textarea">{{$profil[0]->pronv}}</textarea>
                                    </div>
                                    <div class="form-group">
                                    <label for="cc-name" class="control-label mb-1">Misi sekolah</label>
                                    <textarea class="textarea" name="pronm"id="textarea">{{$profil[0]->pronm}}</textarea>
                                    </div>



                                    <div class="form-group">
                                    <label for="cc-name" class="control-label mb-1">Alamat sekolah</label>
                                        <input type="text" id="text-input" name="prolok" value="{{$profil[0]->prolok}}" class="form-control">
                                    </div>
                                    <button class="btn btn-outline-success btn-block">
                                        Submit
                                    </button>
                                </div>
                                </form>
                               
                            </div>
                        </div>
                       
                    </div>
                    
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