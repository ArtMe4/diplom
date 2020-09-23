@extends('layouts.app')

@section('page-title')
    Обновление статьи
@endsection

@section('content')



    <div>
        <a href="/admin/{{ $article->id }}"><button class="btn btn-warning">Назад</button></a>
        <h1>Редактирование статьи</h1>
        {!! Form::open(['action' => ['AdminController@update', $article->id], 'method' => 'POST']) !!}
        <div class="form-group w-75">
            {{ Form::label('title', 'Название статьи') }}
            {{ Form::text('title', $article->title, ['class' => 'form-control', 'placeholder' => 'Введите заголовок']) }}
        </div>
        <div class="form-group w-75">
            {{ Form::label('text', 'Текст статьи') }}
            {{ Form::textarea('text', $article->text, ['id' => 'article-ckeditor', 'placeholder' => 'Введите текст статьи']) }}
        </div>
        {{ Form::hidden('_method', 'PUT') }}
        {{ Form::submit('Обновить статью', ['class' => 'btn btn-success']) }}
        {!! Form::close() !!}
    </div>
@endsection
