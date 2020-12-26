@extends('layouts.default')

@section('page_title')
    {{ $page_data['page_title'] ?? $page_data['title'] }}
@endsection

@section('content')
    <div class="main-inner container ">

        @include('includes.page_title', ['title' => $page_data['title']])

        <div class="raw">
            <img class="materialboxed" width="400" src="{{ $page_data['img_url'] }}">
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    var elems = document.querySelectorAll('.materialboxed');
                    var instances = M.Materialbox.init(elems, {});
                });

            </script>
            <p>
                {{ $page_data['description'] }}
            </p>
            <a href="{{ url()->previous() }}" class="waves-effect waves-light btn">Назад</a>
        </div>
    </div>


@stop
