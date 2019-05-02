@extends('layout.app')

@section('status-alumni')
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
                                Data Alumni  Perbarui?
                            </h1>
                        </div>
                        
                       
                        
                    </div>
                </div>
            </div>
            <hr class="line-seprate">
        </div>
    </section>
@endsection

@section('content')
<div class="col-lg-12">

                                <div class="card">
                                    <div class="card-header">
                                        <strong>Alumni</strong>
                                        <small> Form</small>
                                    </div>
                                    <form method="POST" action="/alumni/edit/{{$user->id}}/save">
                                    {{ csrf_field() }} {{ method_field('PATCH') }}
                                    <div class="card-body card-block">
                                        <div class="form-group">
                                            <label for="company" class=" form-control-label">NISN</label>
                                            <input type="number" id="company"  class="form-control" name="nisn" value="{{$user->nisn}}" >
                                        </div>
                                        <div class="form-group">
                                            <label for="vat" class=" form-control-label">Nama</label>
                                            <input type="text" id="vat"value="{{$user->name}}" class="form-control" name="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="company" class=" form-control-label">Email</label>
                                            <input type="email" id="company" value="{{$user->email}}"class="form-control" name="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="street" class=" form-control-label">Alamat</label>
                                            <input type="text" id="street" value="{{$user->alamat}}"class="form-control" name="alamat">
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-8">
                                                <div class="form-group">
                                                    <label for="city" class=" form-control-label">Nomor handphone</label>
                                                    <input type="number" id="city" value="{{$user->nohp}}" class="form-control" name="nohp">
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="form-group">
                                                    <label for="postal-code" class=" form-control-label">Status</label>
                                                    <input type="text" id="postal-code" value="{{$user->status}}"" class="form-control"name="status"> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="country" class=" form-control-label">Tempat Kerja</label>
                                            <input type="text" id="country"value="{{$user->temker}}"class="form-control" name="temker">
                                        </div>
                                        <div class="form-group">
                                            <label for="country" class=" form-control-label">Tahun(Angkatan)</label>
                                            <input type="text" id="country" placeholder="tempat kerja" class="form-control" name="tahun" value="{{$user->tahun}}">
                                        </div>
                                        <div class=" form-group">
                                                
                                                    <label for="select" class=" form-control-label">Select Jurusan</label>
                                                
                                                    <select name="jurusan" id="select" class="form-control">
                                                    
                                                        <option value="">Please select</option>
                                                        <option value="Akuntansi" <?php if($user->jurusan=="Akuntansi"){echo"selected";}?>>Akuntansi</option>
                                                        <option value="administrasi perkantoran" <?php if($user->jurusan=="administrasi perkantoran"){echo"selected";}?>>administrasi perkantoran</option>
                                                        <option value="teknik komputer jaringan" <?php if($user->jurusan=="teknik komputer jaringan"){echo"selected";}?>>teknik komputer jaringan</option>
                                                        <option value="parawisata" <?php if($user->jurusan=="parawisata"){echo"selected";}?>>parawisata</option>
                                                        <option value="management usaha" <?php if($user->jurusan=="management usaha"){echo"selected";}?>>management usaha</option>
                                                    </select>
                                               
                                            </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        
                                    </div>
                                    </form>
                                </div>
                                
                            </div>
                            
@endsection