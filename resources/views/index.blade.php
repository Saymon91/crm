@extends('layouts/portal')

<?php
$title = 'PORTAL';

/*$modal = [
    'title' => 'Тестовый заголовок',
    'type' => 'notify',
    'content' => '<p>Какое-то сообщение и трататата твлдвап олп жлдофыв ывл</p>'
]*/

?>

@section('style')
    @parent
    <link rel="stylesheet" type="text/css" href="/css/variables.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="stylesheet" type="text/css" href="/css/glyphicon.css">
@endsection

@section('body')
    <div class="background"></div>
    @include('elements/main_menu')
    <div class="content flex-center position-ref full-height @if(isset($modal)) blur @endif">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                    @endauth
            </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                <a href="{{{ route('portal::home') }}}">Laravel ТЕСТ контент</a>
            </div>
        </div>
    </div>

    @if (isset($modal))
        @include('elements/modal', ['modal'=>$modal])
    @endif
@endsection