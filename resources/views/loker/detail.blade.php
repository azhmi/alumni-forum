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
                        @if (Route::has('login'))
                        @if (Auth::check())
                        @if(Auth::user()->id==$loker->lokauth)

                        <form method="POST" action="/lowongan/delete/{{$loker->lokid}}">
                        {{ csrf_field() }} {{ method_field('DELETE') }}
                            <a href="/lowongan/edit/{{$loker->lokid}}" class="btn btn-warning">Edit</a>
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>

@endif @endif @endif
                         
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
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                        
                            <strong class="card-title">
                                {{$loker->lokjud}}</strong>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                            <div class="col-md-3">
                                <div class="card">
                                @if($loker->lokgam!='')
                            <img class="card-img-top"  src="{{ URL::asset('gambar/loker')}}/{{$loker->lokgam}}" alt="gambar tidak tersedia">
                            @endif
                            </div>
                            </div>
                            <?php echo $loker->lokis ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection