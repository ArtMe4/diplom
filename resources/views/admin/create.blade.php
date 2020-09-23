@extends('layouts.app')

@section('page-title')
    Создание статьи
@endsection

@section('content')
    <div>
        <a href="/home"><button class="btn btn-warning">Назад</button></a>
        <h1>Создание новой статьи</h1>
        {!! Form::open(['action' => 'AdminController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="form-group w-75">
                {{ Form::label('title', 'Название статьи') }}
                {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Введите заголовок']) }}
            </div>
            <div class="form-group w-75">
                {{ Form::label('text', 'Текст статьи') }}
                {{ Form::textarea('text', '', ['id' => 'article-ckeditor', 'placeholder' => 'Введите текст статьи']) }}
            </div>
            {{ Form::file('main_image') }}<br><br>
            {{ Form::submit('Добавить статью', ['class' => 'btn btn-success']) }}
        {!! Form::close() !!}
    </div>
@endsection
