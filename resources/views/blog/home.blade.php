@extends('layouts.blog.template')
@section("title", "Blog | Página inicial")
@section('content')
<div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://i.pinimg.com/474x/b7/92/7a/b7927a612c4208f92bbaf93c94597d28.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://alkasoft.com.br/wp-content/uploads/2017/09/imagem125_2-700x321.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://www.ilpost.it/wp-content/uploads/2018/04/macaco-800x400.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="row mt-4">
    <div class="col-12 text-center">
        <h1>DESTAQUES</h1>
    </div>
</div>

<div class="row">
    @foreach ($articles as $article)
        <div class="col col-sm-12 col-md-4">
            <div class="card">
                <img src="https://i.pinimg.com/474x/b7/92/7a/b7927a612c4208f92bbaf93c94597d28.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$article->title}}</h5>
                    <p class="card-text">{{$article->preview}}</p>
                    <a href="/artigo/{{$article->id}}" class="btn btn-primary">LER AGORA</a>
                </div>
            </div>
        </div>
    @endforeach 
</div>
@endsection
