@extends("layouts.app",['title'=>$post->gen_seo_title()])
@section("content")


    {{--https://webdevetc.com/laravel/packages/blogetc-blog-system-for-your-laravel-app/help-documentation/laravel-blog-package-blogetc#guide_to_views--}}

    <div class='container'>
        <div class='row'>
            <div class='col-sm-12 col-md-12 col-lg-12'>

                @include("blogetc::partials.show_errors")
                @include("blogetc::partials.full_post_details")
                <div class="container">
                    <br>
                    Viewrs: {{$post->view_count}}
                    <br>
                    <br>
                    <br>
                </div>


                <div class="container">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <form action="{{ route('posts.post') }}" method="POST">
                                        {{ csrf_field() }}
                                        <div class="card">
                                            <div class="container-fliud">
                                                <div class="wrapper row">

                                                    <div class="details col-md-6">
                                                        <div class="rating">
                                                            <input id="input-1" name="rate" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="{{ $post->userAverageRating }}" data-size="xs">
                                                            <input type="hidden" name="id" required="" value="{{ $post->id }}">
                                                            <br/>
                                                            <button class="btn btn-success">Submit Review</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    $("#input-id").rating();
                </script>


                    <div class="panel-footer">
                        Views: {{ $post->view_count }}
                    </div>

                @include('posts.show')


                @if(config("blogetc.comments.type_of_comments_to_show","built_in") !== 'disabled')
                    <div class="" id='maincommentscontainer'>
                        <h2 class='text-center' id='blogetccomments'>Comments</h2>
                        @include("blogetc::partials.show_comments")
                    </div>
                @else
                    {{--Comments are disabled--}}
                @endif


            </div>
        </div>
    </div>

@endsection
