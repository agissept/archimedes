@extends('layouts.master')
@section('content')

<section class="s-content s-content--top-padding s-content--narrow">

    <article class="row entry format-standard">

        <div class="entry__media col-full">
            <div class="entry__post-thumb">
                <img src="{{ Voyager::image($post->image)}}" sizes="(max-width: 2000px) 100vw, 2000px" alt="">
            </div>
        </div>

        <div class="entry__header col-full">
            <h1 class="entry__header-title display-1">
                {{$post->title}}
            </h1>
            <ul class="entry__header-meta">
                <li class="date">{{ date_format($post->updated_at, 'F, d Y' ) }}</li>
                <li class="byline">
                    By
                    <a href="#0">{{ $post->authorId->name }}</a>
                </li>
            </ul>
        </div>

        <div class="col-full entry__main">

            {!! $post->body !!}

            <div class="entry__taxonomies">
                <div class="entry__cat">
                    <h5>Posted In: </h5>
                    <span class="entry__tax-list">
                        <a href="#0">Lifestyle</a>
                        <a href="#0">Management</a>
                    </span>
                </div> <!-- end entry__cat -->

                <div class="entry__tags">
                    <h5>Tags: </h5>
                    <span class="entry__tax-list entry__tax-list--pill">
                        <a href="#0">orci</a>
                        <a href="#0">lectus</a>
                        <a href="#0">varius</a>
                        <a href="#0">turpis</a>
                    </span>
                </div> <!-- end entry__tags -->
            </div> <!-- end s-content__taxonomies -->

            <div class="entry__author">
                <img src="{{ Voyager::image($post->authorId->avatar) }}" alt="">

                <div class="entry__author-about">
                    <h5 class="entry__author-name">
                        <span>Posted by</span>
                        <a href="#0">{{ $post->authorId->name }}</a>
                    </h5>

                    <div class="entry__author-desc">
                        <p>
                            Alias aperiam at debitis deserunt dignissimos dolorem doloribus, fuga fugiat
                            impedit laudantium magni maxime nihil nisi quidem quisquam sed ullam voluptas
                            voluptatum. Lorem ipsum dolor sit.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </article>


    <div class="s-content__entry-nav">
        <div class="row s-content__nav">
            @if ($prevPost)
            <div class="col-six s-content__prev">
            <a href="/detail-post/{{$prevPost->id}}" rel="prev">
                    <span>Previous Post</span>
                    {{$prevPost->title}}
                </a>
            </div>
            @endif
            @if ($nextPost)
            <div class="col-six s-content__next">
                <a href="/detail-post/{{$nextPost->id}}" rel="next">
                    <span>Next Post</span>
                    {{$nextPost->title}}
                </a>
            </div>
            @endif
        </div>
    </div>


</section>

@endsection
