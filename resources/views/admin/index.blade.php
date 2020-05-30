@extends('layouts.admin')

@extends('admin.base')

@section('main')
    <div class="row">
        <div class="col-sm-12">
            <h1 class="title">News</h1>
            <h3 class=""title">Hello, {{ Auth::user()->login }}. Welcome to the admin area!</h2>
            <div>
                <a style="margin: 19px;" href="{{ route('news.create')}}" class="btn btn-primary">Add news</a>
            </div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Title</td>
                    <td>Photo</td>
                    <td>Tags</td>
                    <td>Description</td>
                    <td>Text</td>
                    <td>Activity</td>
                    <td colspan = 2>Actions</td>
                </tr>
                </thead>
                <tbody>
                @foreach($news as $new)
                    <tr>
                        <td>{{$new->id}}</td>
                        <td>{{$new->title}}</td>
                        <td>{{$new->photo}}</td>
                        <td>{{$new->tags}}</td>
                        <td>{{$new->description}}</td>
                        <td>{{$new->text}}</td>
                        <td>{{$new->activity}}</td>
                        <td>
                            <a href="{{ route('news.edit',$new->id)}}" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('news.destroy', $new->id)}}" onsubmit="confirm()" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div>
            </div>

            <div class="col-sm-12">

                @if(session()->get('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
            </div>
@endsection
