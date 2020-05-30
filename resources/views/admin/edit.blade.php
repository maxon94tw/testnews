@extends('layouts.admin')

@extends('admin.base')

@section('main')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h3 class="title">Update the news</h3>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <br />
            @endif
            <form method="post" action="{{ route('news.update', $new->id) }}">
                @method('PATCH')
                @csrf
                <div class="form-group">

                    <label for="title">Title:</label>
                    <input type="text" class="form-control" name="title" value={{ $new->title }} />
                </div>

                <div class="form-group">
                    <label for="photo">Photo:</label>
                    <input type="text" class="form-control" name="photo" value={{ $new->photo }} />
                </div>

                <div class="form-group">
                    <label for="email">Tags:</label>
                    <input type="text" class="form-control" name="tags" value={{ $new->tags }} />
                </div>
                <div class="form-group">
                    <label for="city">Description:</label>
                    <input type="text" class="form-control" name="description" value={{ $new->description }} />
                </div>
                <div class="form-group">
                    <label for="country">Text:</label>
                    <input type="text" class="form-control" name="text" value={{ $new->text }} />
                </div>
                <div class="form-group">
                    <label for="job_title">Activity:</label>
                    <input type="text" class="form-control" name="activity" value={{ $new->activity }} />
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
