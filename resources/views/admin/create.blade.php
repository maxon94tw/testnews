@extends('layouts.admin')

@extends('admin.base')

@section('main')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h3 class="title">Add news</h3>
            <div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                @endif
                <form method="post" action="{{ route('news.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" name="title"/>
                    </div>

                    <div class="form-group">
                        <label for="photo">Photo:</label>
                        <input type="text" class="form-control" name="photo"/>
                    </div>

                    <div class="form-group">
                        <label for="tags">Tags:</label>
                        <input type="text" class="form-control" name="tags"/>
                    </div>
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <input type="text" class="form-control" name="description"/>
                    </div>
                    <div class="form-group">
                        <label for="text">Text:</label>
                        <input type="text" class="form-control" name="text"/>
                    </div>
                    <div class="form-group">
                        <label for="activity">Activity:</label>
                        <input type="text" class="form-control" name="activity"/>
                    </div>
                    <button type="submit" class="btn btn-primary-outline">Add news</button> <br>
                    <div class="form-group">
                        <input type="button" class="btn btn-primary-outline" onclick="window.location.href='http://testnews.test/news';" value="Back to the admin area"/>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
