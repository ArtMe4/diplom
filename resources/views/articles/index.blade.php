@extends('layouts.index')

@section('page-title')
    Общественный совет при Министерстве природных ресурсов и экологии Омской области
@endsection

@section('styles')
    <link href="{{ asset('public/css/main.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div>
    @if(count($articles) > 0)
        @foreach($articles as $el)
            <div class="item">
                <a href="article/{{ $el->id }}">
                    <img src="/public/storage/images/{{ $el->image }}" class="img" alt="">
                    <div class="text">
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
