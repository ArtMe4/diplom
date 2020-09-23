@extends('layouts.app')

@section('page-title')
    Все статьи
@endsection

@section('styles')
    <link href="{{ asset('public/css/stat.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="d-flex flex-column align-items-center">
        <h1>Все статьи на сайте</h1>
        @if(count($articles) > 0)
            @foreach($articles as $el)
                <div class="item">
                    <a href="admin/{{ $el->id }}">
                    <img src="/public/storage/images/{{ $el->image }}" class="img" alt="">
                    <div class="content">
                        <p>{{ $el->created_at }}</p>
                        <h3>{{ $el->title }}</h3>
                    </div>
                    </a>
                </div>
            @endforeach
            {{ $articles->links() }}
        @else
            <p>На данный момент статей нет.</p>
        @endif
    </div>
@endsection
