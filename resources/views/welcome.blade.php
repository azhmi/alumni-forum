@extends('layout.app')

@section('status')
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
                                {{ $profil[0]->pronam }}
                            </h1>
                        </div>
                        @if (Route::has('login'))
                        @if (Auth::check())
                        @if(Auth::user()->level=="admin")
                        <form class="au-form-icon--sm" action="" method="post">
                            <a href="/edit-profil" class="btn btn-success ">Edit</a>
                        </form>
                        @endif
                        @endif
                        @endif
                        
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
                <div class="card">
                    <div class="card-body">
                        <h2 class="mb-4">Profil Sekolah</h2>
                        <hr>
                        <!-- <div class="typo-articles">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem officiis quis soluta recusandae maxime a in porro doloremque tempore tenetur eum, numquam eos quam dicta sint tempora aut, iure alias!
                        </div> -->
                        <br>
                        <div class="vue-lists">
                            <h2 class="mb-4">Visi & Misi</h2>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                <h3>Visi</h3>
                                <hr>
                                <?php
                             echo $profil[0]->pronv ;
                             ?> 
                                </div>
                                <div class="col-md-6 text-left">
                                <div>
                                    <h3>Misi</h3>
                                    <hr>
                                    <?php
                             echo $profil[0]->pronm ;
                             ?> 
                                </div>
                                </div>
                            </div>
                        </div>
                        
                        <br>
                        <div class="vue-misc">
                        <h2 class="display-5 my-3">Alamat</h2>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                            <h3> {{ $profil[0]->prolok }}</h3>
                            
                            </div>
                            </div>
                    </div>
            </div>
        </div>
    </section>
@endsection