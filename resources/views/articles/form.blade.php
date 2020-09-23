@extends('layouts.index')

@section('page-title')
    Отправка обращения в Общественную палату
@endsection

@section('content')
    <div>
        <h1>Отправка обращения в Общественную палату</h1>
        <div>
            {!! Form::open(['action' => 'ArticlesController@sendForm', 'method' => 'POST']) !!}
            <div class="form-group">
                {{ Form::label('name', 'Фамилия Имя Отчество') }}
                {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Иванов Иван Иванович']) }}
            </div>
            <div class="form-group">
                {{ Form::label('data', 'Дата рождения') }}
                {{ Form::date('data', date('d-m-Y'), ['class' => 'form-control', 'placeholder' => '']) }}
            </div>
            <div class="form-group">
                {{ Form::label('phone', 'Контактный номер') }}
                {{ Form::text('phone', '', ['class' => 'form-control', 'placeholder' => '89XXXXXXXXX']) }}
            </div>
            <div class="form-group">
                {{ Form::label('email', 'E-mail') }}
                {{ Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'email@email.com']) }}
            </div>
            <div class="form-group">
                {{ Form::label('text', 'Текст обращения') }}
                {{ Form::textarea('text', '', ['class' => 'form-control', 'placeholder' => 'Введите текст обращения']) }}
            </div>
            {{ Form::submit('Отправить', ['class' => 'btn btn-success']) }}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
