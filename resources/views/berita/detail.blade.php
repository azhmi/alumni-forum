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
                                {{$berita[0]->berjud}}
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
            <div class="row">
                <div class="col-md-6 offset-md-3 col-md-12 col-sm-12">
                @if($berita[0]->bergam!='')
                    <img class="image-responsive"  src="{{ URL::asset('gambar/berita')}}/{{$berita[0]->bergam}}"" alt="gambar tidak tersedia">
                    <br>
                    @endif
                    <strong>{{$berita[0]->name}}</strong> - {{$berita[0]->created_at}}
                </div>
                <hr class="line-seprate">
                <div class="col-lg-12 news-head">                            
                <?php echo $berita[0]->beris ?>
                </div>
            </div>
            <hr class="line-seprate">
        </div>
    </section>
@endsection