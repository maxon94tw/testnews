@php
    /** @var \WebDevEtc\BlogEtc\Models\Post $post */
@endphp
@if(Auth::check() && Auth::user()->canManageBlogEtcPosts())
    <a href="{{$post->editUrl()}}" class="btn btn-outline-secondary btn-sm pull-right float-right">
        Edit Post
    </a>
@endif
<h3 class='blog_title'>
<a href='http://www.testnews.test/news'>

    Back</a>

</h3>

@if(Auth::check() && Auth::user()->canManageBlogEtcPosts())
    <div class="text-center">
        <p class='mb-1'>You are logged in as a blog admin user.
            <br>

            <a href='{{route("blogetc.admin.index")}}'
               class='btn border  btn-outline-primary btn-sm '>

                <i class="fa fa-cogs" aria-hidden="true"></i>

                Go To Blog Admin Panel</a>


        </p>
    </div>
@endif

<h2 class='blog_title'>{{$post->title}}</h2>

<?=$post->imageTag('medium', false, 'd-block mx-auto'); ?>

<h5 class='blog_subtitle'>{{$post->subtitle}}</h5>

<p class="blog_body_content">
    {!! $post->renderBody() !!}

    {{--@if(config("blogetc.use_custom_view_files")  && $post->use_view_file)--}}
    {{--                                // use a custom blade file for the output of those blog post--}}
    {{--   @include("blogetc::partials.use_view_file")--}}
    {{--@else--}}
    {{--   {!! $post->post_body !!}        // unsafe, echoing the plain html/js--}}
    {{--   {{ $post->post_body }}          // for safe escaping --}}
    {{--@endif--}}
</p>

<hr/>

@if($post->posted_at)
    Posted <strong>{{ $post->posted_at->diffForHumans() }}</strong>
@endif

@includeWhen($post->author, 'blogetc::partials.author', ['post'=>$post])
@includeWhen($post->categories, 'blogetc::partials.categories', ['post'=>$post])

