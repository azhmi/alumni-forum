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
                                Baca berita terbaru disini!
                            </h1>
                        </div>
                        
                        <form class="au-form-icon--sm" action="" method="post">
                        @if (Route::has('login'))
                        @if (Auth::check())
                        @if(Auth::user()->level=="admin")
                            <a href="/berita/tambah" class="btn btn-success ">Tulis Artikel</a>
                            @endif @endif @endif
                           
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
            @foreach($berita as $b)
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12">
                    @if($b->bergam!='')
                    <img class="image-responsive" src="{{ URL::asset('gambar/berita')}}/{{$b->bergam}}" alt="gambar tidak tersedia"><br>
                    @endif
                    <strong>{{$b->name}}</strong> - {{$b->tglpost}}
                </div>
                <div class="col-lg-9 news-head">
                    <h3 class="display-5 my-3">{{$b->berjud}}</h3>
                    <p>
                    <?php echo
                        str_limit($b->beris, 140) 
                    ?></p>
                    <form method="POST" action="/berita/delete/{{$b->berid}}">
                    <a class="btn btn-outline-success btn-sm p-top" href="/berita/detail/{{$b->berid}}" role="button">Lihat selengkapnya...</a>
                    @if (Route::has('login'))
                        @if (Auth::check())
                        @if(Auth::user()->level=="admin")
                    <a class="btn btn-outline-warning btn-sm p-top" href="/berita/edit/{{$b->berid}}" role="button">Edit</a>
                   
                  {{ csrf_field() }} {{ method_field('DELETE') }}
                    <button class="btn btn-outline-danger btn-sm p-top" type="submit" role="button">Hapus</button>

                    @endif @endif @endif
                    </form>
                </div>
            </div>

            <hr>
            @endforeach
            {{ $berita->links() }}

        </div>
    </section>
@endsection