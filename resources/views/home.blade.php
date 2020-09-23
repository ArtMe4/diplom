@extends('layouts.app')

@section('page-title')
    Главная
@endsection

@section('content')
<div class="container">
    <div class="d-flex justify-content-center">
            <div class="mr-5">
                <a href="admin"><button class="btn btn-info">Посмотреть все статьи</button></a>
            </div>
            <div>s
                <a href="admin/create"><button class="btn btn-info">Добавить статью</button></a>
            </div>
    </div>
</div>
@endsection
