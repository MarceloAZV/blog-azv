@extends('temp')

@section('title', 'Blog do Azv')

@section('content')

<!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url({{ asset('/img/home-bg.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        @foreach($header as $cabecalho)
                            <h1>{{ $cabecalho[0] }}</h1>
                            <hr class="small">
                            <span class="subheading">{{ $cabecalho[1] }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

                @foreach($posts as $post)

                    <div class="post-preview">
                        <h2 class="post-title">
                            {{ $post[2] }}
                        </h2>
                        <h3 class="post-subtitle">
                            {{ $post[3] }}
                        </h3>
                        <p class="post-meta">Postado Por <a href="autor/Marcelo Azevedo">{{ $post[0] }}</a> em {{ $post[1] }}</p>
                        <p>{{ $post[4] }}</p>
                    </div>
                <hr>

                @endforeach

            </div>
        </div>
    </div>

    <hr>

@stop