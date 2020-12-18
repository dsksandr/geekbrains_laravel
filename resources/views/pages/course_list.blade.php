@extends('layouts.default')

@section('page_title')
    {{ $page_data['page_title'] ?? $page_data['title'] }}
@endsection

@section('content')
    <div class="main-inner container">

        @include('includes.page_title', ['title' => $page_data['title']])

        <div class="course-list row">
            @foreach ($page_data['course_list'] as $key => $item)

            <div class="col s12 m6">
                <div class="card">
                    <div class="card-image">
                        <img src="{{ $item['img_url'] }}">
                        <span class="card-title">{{ $item['name'] }}</span>
                    </div>
                    <div class="card-content">
                        <p>{{ $item['description'] }}</p>
                    </div>
                    <div class="card-action">
                        <a href="{{ route('course', ['id' => $key]) }}">Давайте начнем!</a>
                    </div>
                </div>
            </div>

            @endforeach

        </div>
    </div>


@stop
