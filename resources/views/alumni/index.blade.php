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
                                Data Alumni
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
<section class="statistic statistic2">
        <div class="container">
<div class="table-responsive table-responsive-data2">
                                    <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%" >
                                        <thead>
                                            <tr>
                                            
                                            <th>Tahun</th>                                              
                                                <th>nisn</th>
                                                <th>nama</th>
                                                <th>Jurusan</th>
                                                <th>email</th>
                                                <th>Alamat</th>
                                                <th>No hp</th>
                                                <th>status</th>
                                                <th>tempat kerja</th>
                                                @if (Route::has('login'))
                        @if (Auth::check())
                        @if(Auth::user()->level=="admin")
                                                <th>aksi</th>
                                                @endif @endif @endif
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($user as $u )
                                            <tr class="tr-shadow">
                                                
                                            <td>{{$u->tahun}}</td>
                                                <td>{{$u->nisn}}</td>
                                                <td>{{$u->name}}</td>
                                                <td>{{$u->jurusan}}</td>
                                                <td>
                                                    <span class="block-email">{{$u->email}}</span>
                                                </td>
                                                <td class="desc">{{$u->alamat}}</td>
                                                <td>{{$u->nohp}}</td>
                                                <td>
                                                    <span class="status--process">{{$u->status}}</span>
                                                </td>
                                                <td>{{{$u->temker}}}</td>
                                                @if (Route::has('login'))
                        @if (Auth::check())
                        @if(Auth::user()->level=="admin")
                                                <td>
                                                    <div class="table-data-feature">
                                                       
                                                        <a class="item" data-toggle="tooltip" data-placement="top" title="Edit" href="alumni/edit/{{$u->id}}">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </a>
                                                        <form method="POST" action="/alumni/hapus/{{$u->id}}">
                                                        {{ csrf_field() }} {{ method_field('DELETE') }}
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete" type="submit">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        </form>
                                                       
                                                    </div>
                                                </td>
                                                @endif @endif @endif
                                            </tr>
                                            @endforeach
                                            
                                         
                                        </tbody>
                                    </table>
                                    
                                </div>
                       
                                <!-- END DATA TABLE -->
</div>
</section>
@endsection