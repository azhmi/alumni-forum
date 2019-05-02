@extends('layout.app')

@section('status-loker')
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
                        @if (Route::has('login'))
                        @if (Auth::check())
                            <a href="/lowongan/tambah" class="btn btn-success ">Tulis Lowongan</a>
                            @endif @endif
                            
                        </form>
                    </div>
                </div>
            </div>
            <hr class="line-seprate">
        </div>
    </section>
@endsection

@section('content')
    <section class="statistic-chart">
        <div class="container">
            <div class="row">
             @foreach($loker as $l)
                <div class="col-md-3">
                    <div class="card">
                        @if($l->lokgam!='')
                        <img class="card-img-top"  src="{{ URL::asset('gambar/loker')}}/{{$l->lokgam}}" alt="gambar tidak tersedia">
                        @endif
                        <div class="card-body">
                            <h4 class="card-title mb-3">{{$l->lokjud}}</h4>
                            <strong>{{$l->name}}</strong> - {{$l->tglpost}}
                            <br>
                            <p class="card-text">
                            <?php echo
                        str_limit($l->lokis, 25) 
                    ?>
                            </p>
                            <hr>
                            <div class="mb-3">
                                <a class="btn btn-outline-secondary btn-sm btn-block" href="/lowongan/detail/{{$l->lokid}}" role="button">Lihat selengkapnya...</a>
                                @if (Route::has('login'))
                                @if (Auth::check())
                                @if(Auth::user()->id==$l->lokauth)
                            <form method="POST" action="/lowongan/delete/{{$l->lokid}}">
                                <a class="btn btn-outline-warning btn-sm p-top" href="/lowongan/edit/{{$l->lokid}}" role="button">Edit</a>
                   
                                {{ csrf_field() }} {{ method_field('DELETE') }}
                                    <button class="btn btn-outline-danger btn-sm p-top" type="submit" role="button">Hapus</button>
                            </form>
 
                        
                            @endif @endif @endif
                            </div>
                            
                           
                            
                            
                        </div>
                    </div>
                </div>
                    @endforeach  
                    {{ $loker->links() }}                 
            </div>
            
           
        </div>
        

    </section>
@endsection