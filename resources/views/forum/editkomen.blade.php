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
                    <h1 class="title-4">Topik menarik</h1>
                    <hr>    
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <div class="au-message__item-text">
                                        <div class="text">
                                            <h5 class="name">{{$forum[0]->name}}</h5>
                                            <p>{{$forum[0]->tglpost}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">
                                    <?php echo $forum[0]->foris ?>
                                    </p>
                                    <div class="table-data-feature">
                                    <form method="POST" action="/forum/delete/{{$forum[0]->forid}}">
                                        
                                        @if (Route::has('login'))
                                            @if (Auth::check())
                                            @if(Auth::user()->level==$forum[0]->level)
                                        
                                        <a class="item" href="/forum/edit/{{$forum[0]->forid}}"  data-toggle="tooltip" data-placement="top" title="Edit">
                                            <i class="zmdi zmdi-edit"></i>
                                        </a>
                                    
                                    {{ csrf_field() }} {{ method_field('DELETE') }}
                                        
                                        <button class="item" type="submit"  data-toggle="tooltip" data-placement="top" title="Delete">
                                            <i class="zmdi zmdi-delete"></i>
                                        </button>
                                        @endif @endif @endif
                                        </form>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                            @if($forum[0]->forgam!='')
                        <img class="card-img-top" src="{{ URL::asset('gambar/forum')}}/{{$forum[0]->forgam}}" alt="gambar tidak tersedia">
                        @endif
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <form method="post" action="/forum/detail/komen/{{$komen[0]->komid}}/update">
                        @csrf {{method_field('patch')}}
                        <div  class="col-md-12">
                            <p class="text">Edit Tanggapan Anda : </p>
                            <div class="form-group">
                            <input type="hidden" name="komforid" value="{{ $forum[0]->forid }}">
                                <textarea name="komis" id="foris" rows="3" placeholder="Content..." class="form-control">
                                <?php echo $komen[0]->komis?>
                                </textarea>
                            </div>
                            <button class="btn btn-outline-secondary btn-block">
                                Kirim komentar
                            </button>
                        </div>
                        </form>
                    </div>
                    <hr>
                    
                </div> 
                <div class="col-md-4">
                    <h1 class="title-4">Pertanyaan lainnya</h1>
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