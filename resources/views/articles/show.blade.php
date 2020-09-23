@extends('layouts.index')

@section('page-title')
    {{ $article->title }}
@endsection

@section('styles')
    <link href="{{ asset('public/css/show.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div>
        <a href="/" class="btn btn-info">Назад</a><br>
    </div>
    <div class="item">
        <img src="/public/storage/images/{{ $article->image }}" class="img" alt="">
        <div class="content">
            <p>{{ $article->created_at }}</p>
            <h3>{{ $article->title }}</h3>
        </div>
    </div>
        <p>{!! $article->text !!}</p>
@endsection
