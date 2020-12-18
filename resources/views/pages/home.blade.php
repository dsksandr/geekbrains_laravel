@extends('layouts.default')

@section('page_title')
    {{ $page_data['page_title'] ?? $page_data['title'] }}
@endsection

@section('content')
    <div class="main-inner container">
        @include('includes.page_title', ['title' => $page_data['title']])
    </div>
@stop
