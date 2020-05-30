@extends('layouts.admin')

@extends('admin.base')

@section('content')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            Hello, {{ Auth::user()->login }}. That`s admin area. You can <a href="{{ route('news.create') }}">create</a> news, or watch the <a href="{{ route('news.index') }}">list</a> of news!
        </div>
    </div>
@endsection

{{--@section('content')--}}
