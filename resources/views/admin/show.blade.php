@extends('layouts.app')

@section('page-title')
    {{ $article->title }}
@endsection

@section('styles')
    <link href="{{ asset('public/css/stat.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div>
        <a href="/admin" class="btn btn-warning">Назад</a><br>

{{--        <h1>{{ $article->title }}</h1>--}}

{{--        <div>--}}
{{--            <p>{!! $article->text !!}</p>--}}
{{--            <p>Дата создания: {{ $article->created_at }}</p>--}}
{{--        </div>--}}
    </div>
    <div class="item">
            <img src="/public/storage/images/{{ $article->image }}" class="img" alt="">
            <div class="content">
                <p>{{ $article->created_at }}</p>
                <h3>{{ $article->title }}</h3>
            </div>
    </div>
        <p>{!! $article->text !!}</p>
    <hr>
    <div class="d-flex w-25 justify-content-between">
        <a href="/admin/{{$article->id}}/edit" class="btn btn-info">Редактировать</a>

        {!! Form::open(['action' => ['AdminController@destroy', $article->id], 'method' => 'POST']) !!}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Удалить статью', ['class' => 'btn btn-danger']) }}
        {!! Form::close() !!}
    </div>
@endsection
