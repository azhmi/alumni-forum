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
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <section class="statistic statistic2">
        <div class="container">
            <h1 class="title-4">Topik menarik</h1>
            <hr>    
            <div class="row">
                @foreach($forum as $f)
                <div class="col-md-3">
                    <div class="card">
                        @if($f->forgam!='')
                        <img class="card-img-top" src="gambar/forum/{{$f->forgam}}" alt="gambar tidak tersedia">
                        @endif
                        
                        <div class="card-body">
                            <h4 class="card-title mb-3">{{$f->forjud}}</h4>
                            <strong>{{$f->name}}</strong> - {{$f->tglpost}}
                            <br>
                            <p class="card-text">
                                <?php 
                                    echo str_limit($f->foris, 25)
                                ?>
                            </p>
                            <hr>
                            <div class="mb-3">
                                <a class="btn btn-outline-secondary btn-sm btn-block" href="/forum/detail/{{$f->forid}}" role="button">Komentar...</a>
                                @if (Route::has('login'))
                                @if (Auth::check())
                                @if(Auth::user()->id==$f->forauth)
                            <form method="POST" action="/forum/delete/{{$f->forid}}">
                                <a class="btn btn-outline-warning btn-sm p-top" href="/forum/edit/{{$f->forid}}" role="button">Edit</a>
                   
                                {{ csrf_field() }} {{ method_field('DELETE') }}
                                    <button class="btn btn-outline-danger btn-sm p-top" type="submit" role="button">Hapus</button>
                            </form>
 
                        
                            @endif @endif @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                {{ $forum->links() }}

            </div>
        </div>
    </section>
@endsection