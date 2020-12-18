@extends('layouts.default')

@section('page_title')
    {{ $page_data['page_title'] ?? $page_data['title'] }}
@endsection

@section('content')
    <div class="main-inner container ">
        <div class="row">
            @if ($page_data['is_auth'])

            @else
            <form class="user_auth col s6">

                <h6>Для того чтобы зайти в личный кабинет, автоизуйтесь!</h6>

                <div class="row">
                    <div class="input-field col s12">
                        <input id="login" type="text" class="validate">
                        <label for="login">Login</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="password" type="password" class="validate">
                        <label for="password">Password</label>
                    </div>
                </div>

                <a href="{{ url()->previous() }}" class="waves-effect waves-light btn">Назад</a>
            </form>


            @endif
        </div>
    </div>


@stop
